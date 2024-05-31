<?php

namespace App\Http\Controllers;

use App\Http\Requests\BedroomPhotoRequest;
use App\Models\Bedroom_Photo;
use Illuminate\Http\Request;
use Redirect;

class BedroomPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin','Employee']);
            $photos = Bedroom_Photo::All();
            return view('tablas.Tabla_Habitaciones-Photos')->with('fotos', $photos);
        }else
        {
            return Redirect::back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin','Employee']);
            return view('administracion.fotos_habitacion.Fotos_Habitacion');
        }else
        {
            return Redirect::back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BedroomPhotoRequest $request)
    {
        $photo = new Bedroom_Photo();
        $imagen = $request->file('name');
        if($imagen != null)
        {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/habitaciones');
            $request->name->move($destino, $nombre);
            $photo->bedroom_id = $request->get('bedroom_id');
            $photo->name = $nombre;
            $photo->save();
            return redirect()->route('bedroom-pictures.index')->with('notice', 'La foto ha sido dada de alta correctamente');
        }
        else
        {
            return redirect()->route('bedroom-pictures.index')->with('notice', 'No se ha guardado Ningún registro');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin','Employee']);
            $foto = Bedroom_Photo::find($id);
            return view('tablas.show.Habitacion-Photos_Show')->with('foto', $foto);
        }else
        {
            Redirect::back();
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin','Employee']);
            $photo = Bedroom_Photo::find($id);
            return redirect()->route('bedroom-pictures.create')->with('foto-habitacion', $photo)->with('modo','editar');
        }else
        {
            return Redirect::back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BedroomPhotoRequest $request, $id)
    {
        $photo = Bedroom_Photo::find($id);
        $imagen = $request->file('name');
        if($imagen != null)
        {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/habitaciones');
            $request->name->move($destino, $nombre);
            $photo->name = $nombre;
        }
        $photo->bedroom_id = $request->get('bedroom_id');
        $photo->save();
        return redirect()->route('bedroom-pictures.index')->with('notice', 'La foto ha sido actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
