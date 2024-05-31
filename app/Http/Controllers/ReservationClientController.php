<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\User;
use App\Models\Client;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationClientController extends Controller
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
            return view('reservacion.Reservacion-Error');
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
            return view('reservacion.Editar_Reservacion');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            if($reservation == null)
            {
                return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN NO EXISTE');
            }
            else
            {
                if($reservation->status == 'Process')
                {
                    return redirect()->route('client_reservations.create')->with('reservacion', $reservation)->with('modo','editar');
                }
                else
                {
                    if($reservation->status == 'Paid')
                    {
                        return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA NO ES POSIBLE ACTUALIZARLA PORQUE YA SE HA PAGADO');
                    }
                    elseif($reservation->status == 'Cancel')
                    {
                        return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA NO ES POSIBLE ACTUALIZARLA PORQUE HA SIDO CANCELADA');
                    }
                    else
                    {
                        return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA NO ES POSIBLE ACTUALIZARLA');
                    }
                }
            }
        }else
        {
            Redirect::back();
        }
    }

    public function cancel($id, Request $request)
    {
        if($request->user() != null)
        {
            $reservation = Reservation::find($id);
            if($reservation == null)
            {
                return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN NO EXISTE');
            }
            else
            {
                if($reservation->status == 'Process')
                {
                    $reservation->status = 'Cancel';
                    $reservation->save();
                    return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA SE HA CANCELADO. RESERVACIÓN "reservation->id"')->with('modo', 'cancel');
                }
                else
                {
                    if($reservation->status == 'Paid')
                    {
                        return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA NO ES POSIBLE CANCELARLA PORQUE YA SE HA PAGADO');
                    }
                    elseif($reservation->status == 'Cancel')
                    {
                        return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA NO ES POSIBLE CANCELARLA PORQUE HA SIDO CANCELADA');
                    }
                    else
                    {
                        return redirect()->route('client_reservations.index')->with('notice','LA RESERVACIÓN SELECCIONADA NO ES POSIBLE CACELARLA');
                    }
                }
            }
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
    public function update(Request $request, $id)
    {
        $reservacion = Reservation::find($id);
        $reservacion->guest_name = $request->get('guest_name');
        $reservacion->initial_date = $request->get('initial_date');
        $reservacion->final_date = $request->get('final_date');
        $reservacion->telephone = $request->get('telephone');
        $reservacion->email = $request->get('email');
        $reservacion->special_petition = $request->get('special_petition');
        $reservacion->save();
        return redirect()->route('client_reservations.index')->with('notice', 'SE HA ACTULIZADO CORRECTAMENTE LA RESERVACIÓN')->with('modo', 'exito');
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
