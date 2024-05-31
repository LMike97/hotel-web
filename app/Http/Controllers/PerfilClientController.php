<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerfilClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $request->user()->authorizeRoles(['Client']);
            return view('perfil.Perfil-Cliente-Mod');
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
    public function show($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Client']);
            $profile = User::find($id);
            $client = User::find($id)->client;
            return view('perfil.Perfil-Cliente')->with('perfil', $profile)->with('cliente', $client);
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
            $request->user()->authorizeRoles(['Client']);
            $profile = User::find($id);
            $client = User::find($id)->client;
            return redirect()->route('profile_client.create')->with('perfil', $profile)->with('cliente', $client)->with('modo', 'editar');
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
        $this->validate($request,[
            'first_name' => 'min:4|max:25|required',
            'second_name' => 'max:25',
            'first_lastname' => 'min:2|max:25|required',
            'second_lastname' => 'max:25'
        ]);
        $cuenta = User::find($id);
        $cliente = User::find($id)->client;
        $imagen = $request->file('name');
        if($imagen != null)
        {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/usuarios');
            $request->name->move($destino, $nombre);
            $cuenta->user_image = $nombre;
        }
        $cuenta->user_name = $request->get('user_name');
        $cuenta->telephone = $request->get('telephone');
        $cliente->toQuery()->update([
            'first_name' =>$request->get('first_name'),
            'second_name' => $request->get('second_name'),
            'first_lastname' => $request->get('first_lastname'),
            'second_lastname' => $request->get('second_lastname'),
        ]);
        $cuenta->save();
        return view('perfil.Perfil-Cliente')->with('notice', 'Su Perfil Se Ha Actualizado Correctamente')->with('perfil', $cuenta)->with('cliente', $cliente);
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
