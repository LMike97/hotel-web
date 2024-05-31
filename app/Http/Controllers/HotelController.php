<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\Models\Hotel;
use Redirect;

class HotelController extends Controller
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
            $hoteles = Hotel::All();
            return view('tablas.Tabla_Hoteles')->with('hoteles', $hoteles);
        }
        else
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
            return view('administracion.Hoteles');
        }
        else
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
    public function store(HotelRequest $request)
    {
        $request->user()->authorizeRoles(['Admin','Employee']);
        $hotel = new Hotel();
        $hotel->name = $request->get('name');
        $hotel->description = $request->get('description');
        $hotel->additional = $request->get('additional');
        $hotel->direction = $request->get('direction');
        $hotel->no_telephone = $request->get('no_telephone');
        $hotel->save();
        return redirect()->route('hotels.index')->with('notice', 'El hotel ha sido dado de alta correctamente.');
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
            $hotel = Hotel::find($id);
            return view('tablas.show.Hotel_Show')->with('hoteles', $hotel);
        }else
        {
            return Redirect::back();
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
            $hotel = Hotel::find($id);
            return redirect()->route('hotels.create')->with('hotel', $hotel)->with('modo','editar');
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
    public function update(HotelRequest $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->name = $request->get('name');
        $hotel->description = $request->get('description');
        $hotel->additional = $request->get('additional');
        $hotel->direction = $request->get('direction');
        $hotel->no_telephone = $request->get('no_telephone');
        $hotel->save();
        return redirect()->route('hotels.index')->with('notice', 'El hotel ha sido actualizado correctamente.');
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
