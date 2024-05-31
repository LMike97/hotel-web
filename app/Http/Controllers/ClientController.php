<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
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
            $users = User::All()->where('type', '==', 'Client')->pluck('user_image');
            $clients = Client::All();
            return view('tablas.Tabla_Clientes')->with('clientes', $clients)->with('imagenes', $users);
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
            return view('administracion.Clientes');
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
    public function store(ClientRequest $request)
    {
        $cliente = new Client();
        $cliente->user_id = $request->get('user_id');
        $cliente->first_name = $request->get('first_name');
        $cliente->second_name = $request->get('second_name');
        $cliente->first_lastname = $request->get('first_lastname');
        $cliente->second_lastname = $request->get('second_lastname');
        $cliente->no_reservation = $request->get('no_reservation');
        $cliente->discount = $request->get('discount');
        $cliente->save();
        return redirect()->route('clients.index')->with('notice', 'El cliente ha sido dado de alta correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin','Employee']);
            $clients = Client::find($id);
            $idUser = $clients->user_id;
            $user = User::find($idUser);
            return view('tablas.show.Cliente_Show')->with('clientes', $clients)->with('imagenes', $user);
        }else
        {
            Redirect::back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin','Employee']);
            $client = Client::find($id);
            return redirect()->route('clients.create')->with('cliente', $client)->with('modo','editar');
        }else
        {
            Redirect::back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'user_id' => ['exists:users,id','required', Rule::unique('clients','user_id')->ignore($id)],
            'first_name' => 'min:4|max:25|required',
            'second_name' => 'max:25',
            'first_lastname' => 'min:2|max:25|required',
            'second_lastname' => 'max:25'
        ]);
        $cliente = Client::find($id);
        $cliente->user_id = $request->get('user_id');
        $cliente->first_name = $request->get('first_name');
        $cliente->second_name = $request->get('second_name');
        $cliente->first_lastname = $request->get('first_lastname');
        $cliente->second_lastname = $request->get('second_lastname');
        $cliente->no_reservation = $request->get('no_reservation');
        $cliente->discount = $request->get('discount');
        $cliente->save();
        return redirect()->route('clients.index')->with('notice', 'El cliente ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
