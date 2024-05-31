<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use Redirect;

class ReservationController extends Controller
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
            $reservations = Reservation::All();
            return view('tablas.Tabla_Reservaciones')->with('reservaciones', $reservations);
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
            return view('administracion.Admin_Reservaciones');
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
    public function store(ReservationRequest $request)
    {
        $reservacion = new Reservation();
        $reservacion->bedroom_id = $request->get('bedroom_id');
        $reservacion->client_id = $request->get('client_id');
        $reservacion->guest_name = $request->get('guest_name');
        $reservacion->initial_date = $request->get('initial_date');
        $reservacion->final_date = $request->get('final_date');
        $reservacion->number_bedrooms = $request->get('number_bedrooms');
        $reservacion->telephone = $request->get('telephone');
        $reservacion->email = $request->get('email');
        $reservacion->special_petition = $request->get('special_petition');
        $reservacion->total_price = $request->get('total_price');
        $reservacion->status = $request->get('status');
        $reservacion->save();
        return redirect()->route('reservations.index')->with('notice', 'La reservación se creó correctamente.');
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
            $reservations = Reservation::find($id);
            return view('tablas.show.Reservacion_Show')->with('reservaciones', $reservations);
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
            $reservation = Reservation::find($id);
            return redirect()->route('reservations.create')->with('reservacion', $reservation)->with('modo','editar');
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
    public function update(ReservationRequest $request, $id)
    {
        $reservacion = Reservation::find($id);
        $reservacion->bedroom_id = $request->get('bedroom_id');
        $reservacion->client_id = $request->get('client_id');
        $reservacion->guest_name = $request->get('guest_name');
        $reservacion->initial_date = $request->get('initial_date');
        $reservacion->final_date = $request->get('final_date');
        $reservacion->number_bedrooms = $request->get('number_bedrooms');
        $reservacion->telephone = $request->get('telephone');
        $reservacion->email = $request->get('email');
        $reservacion->special_petition = $request->get('special_petition');
        $reservacion->total_price = $request->get('total_price');
        $reservacion->status = $request->get('status');
        $reservacion->save();
        return redirect()->route('reservations.index')->with('notice', 'La reservación se actualizó correctamente.');
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

    public function misReservaciones($id, Request $request)
    {
        if($request->user() != null)
        {
            $client = User::find($id)->client;
            foreach($client as $item)
            {
                $reservations = Client::find($item->id)->reservation;
            }
            return view('reservacion.Mis_Reservaciones')->with('reservaciones', $reservations);
        }else
        {
            Redirect::back();
        }
    }

}
