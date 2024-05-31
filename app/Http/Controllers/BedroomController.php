<?php

namespace App\Http\Controllers;

use App\Http\Requests\BedroomRequest;
use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Models\Hotel;
use Redirect;

class BedroomController extends Controller
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
            $bedrooms = Bedroom::All();
            return view('tablas.Tabla_Habitaciones')->with('habitaciones', $bedrooms);
        }else
        {
            Redirect::back();
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
            return view('administracion.Habitaciones');
        }else
        {
            Redirect::back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BedroomRequest $request)
    {
        $habitacion = new Bedroom();
        $habitacion->hotel_id = $request->get('hotel_id');
        $habitacion->type = $request->get('type');
        $habitacion->description = $request->get('description');
        $habitacion->additional = $request->get('aditionals');
        $habitacion->capacity = $request->get('capacity');
        $habitacion->price = $request->get('price');
        $habitacion->available = $request->get('available');
        $habitacion->status = $request->get('status');
        $habitacion->save();
        return redirect()->route('bedrooms.index')->with('notice', 'La habitación ha sido dada de alta correctamente.');
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
            $bedrooms = Bedroom::find($id);
            return view('tablas.show.habitacion_Show')->with('habitaciones', $bedrooms);
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
            $bedroom = Bedroom::find($id);
            return redirect()->route('bedrooms.create')->with('habitacion', $bedroom)->with('modo','editar');
        }else
        {
            Redirect::back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BedroomRequest $request, $id)
    {
        $habitacion = Bedroom::find($id);
        $habitacion->hotel_id = $request->get('hotel_id');
        $habitacion->type = $request->get('type');
        $habitacion->description = $request->get('description');
        $habitacion->additional = $request->get('aditionals');
        $habitacion->capacity = $request->get('capacity');
        $habitacion->price = $request->get('price');
        $habitacion->available = $request->get('available');
        $habitacion->status = $request->get('status');
        $habitacion->save();
        return redirect()->route('bedrooms.index')->with('notice', 'La habitación ha sido actualizada correctamente.');
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
