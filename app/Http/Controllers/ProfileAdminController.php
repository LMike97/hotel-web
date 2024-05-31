<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;

class ProfileAdminController extends Controller
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
            $request->user()->authorizeRoles(['Admin']);
            return view('perfil.Perfil-Admin-Mod');
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
            $request->user()->authorizeRoles(['Admin']);
            $profile = User::find($id);
            return view('perfil.Perfil-Admin')->with('admin', $profile);
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
            $request->user()->authorizeRoles(['Admin']);
            $profile = User::find($id);
            return redirect()->route('profile_admin.create')->with('admin', $profile)->with('modo', 'editar');
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
            'name' => 'min:4|max:25|required',
            'lastname' => 'min:2|max:25|required',
        ]);
        $cuenta = User::find($id);
        $imagen = $request->file('file');
        if($imagen != null)
        {
            $nombre = time().'.'.$imagen->getClientOriginalExtension();
            $destino = public_path('img/usuarios');
            $request->file->move($destino, $nombre);
            $cuenta->user_image = $nombre;
        }
        $cuenta->user_name = $request->get('user_name');
        $cuenta->telephone = $request->get('telephone');
        $cuenta->name = $request->get('name');
        $cuenta->lastname = $request->get('lastname');
        $cuenta->save();
        return view('perfil.Perfil-Admin')->with('notice', 'Su Perfil Se Ha Actualizado Correctamente')->with('admin', $cuenta);
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
