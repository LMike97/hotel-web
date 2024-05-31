<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelPhotoRequest;
use Illuminate\Http\Request;
use App\Models\Hotel_Photo;
use Redirect;

class HotelPhotoController extends Controller
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
            $photos = Hotel_Photo::All();
            return view('tablas.Tabla_Hotel-Photos')->with('fotos', $photos);
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
            return view('administracion.fotos_hotel.Fotos_Hotel');
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
    public function store(HotelPhotoRequest $request)
    {
        $photo = new Hotel_Photo();
        $imagen = $request->file('name');
        if($imagen != null)
        {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/hoteles');
            $request->name->move($destino, $nombre);
            $photo->hotel_id = $request->get('hotel_id');
            $photo->name = $nombre;
            $photo->save();
            return redirect()->route('hotel-pictures.index')->with('notice', 'La foto ha sido dada de alta correctamente');
        }
        else
        {
            return redirect()->route('hotel-pictures.index')->with('notice', 'No se ha guardado Ningún registro');
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
            $foto = Hotel_Photo::find($id);
            return view('tablas.show.Hotel-Photos_Show')->with('foto', $foto);
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
            $photo = Hotel_Photo::find($id);
            return redirect()->route('hotel-pictures.create')->with('foto-hotel', $photo)->with('modo','editar');
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
    public function update(HotelPhotoRequest $request, $id)
    {
        $photo = Hotel_Photo::find($id);
        $imagen = $request->file('name');
        if($imagen != null)
        {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/hoteles');
            $request->name->move($destino, $nombre);
            $photo->name = $nombre;
        }
        $photo->hotel_id = $request->get('hotel_id');
        $photo->save();
        return redirect()->route('hotel-pictures.index')->with('notice', 'La foto ha sido dada actualizada correctamente.');
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
