<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerfilEmployeeController extends Controller
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
            $request->user()->authorizeRoles(['Employee']);
            return view('perfil.Perfil-Empleado-Mod');
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
            $request->user()->authorizeRoles(['Employee']);
            $profile = User::find($id);
            $employee = User::find($id)->employee;
            return view('perfil.Perfil-Empleado')->with('perfil', $profile)->with('empleado', $employee);
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
            $request->user()->authorizeRoles(['Employee']);
            $profile = User::find($id);
            $employee = User::find($id)->employee;
            return redirect()->route('profile_employee.create')->with('perfil', $profile)->with('empleado', $employee)->with('modo', 'editar');
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
            'second_lastname' => 'min:2|max:25',
            'direction' => 'required',
        ]);
        $cuenta = User::find($id);
        $empleado = User::find($id)->employee;
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
        $empleado->toQuery()->update([
            'first_name' =>$request->get('first_name'),
            'second_name' => $request->get('second_name'),
            'first_lastname' => $request->get('first_lastname'),
            'second_lastname' => $request->get('second_lastname'),
            'direction' => $request->get('direction'),
        ]);
        $cuenta->save();
        return view('perfil.Perfil-Empleado')->with('notice', 'Su Perfil Se Ha Actualizado Correctamente')->with('perfil', $cuenta)->with('empleado', $empleado);
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
