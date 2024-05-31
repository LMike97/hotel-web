<?php

namespace App\Http\Controllers;

use Hash;
use Redirect;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

class AccountController extends Controller
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
            $request->user()->authorizeRoles(['Admin']);
            $accounts = User::all();
            return view('tablas.Tabla_Cuentas')->with('cuentas', $accounts);
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
            $request->user()->authorizeRoles(['Admin']);
            return view('administracion.Cuentas');
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
    public function store(AccountRequest $request)
    {
        $cuenta = new User();
        $cuenta->user_name = $request->get('user_name');
        $cuenta->email = $request->get('email');
        $cuenta->password = Hash::make($request->get('password'));
        $cuenta->telephone = $request->get('telephone');
        $cuenta->type = $request->get('type');
        $cuenta->name = $request->get('name');
        $cuenta->lastname = $request->get('lastname');
        $cuenta->save();
        $cuenta->roles()->attach(Role::where('name', $request->get('type'))->first());
        return redirect()->route('admin_account.index')->with('notice', 'El usuario ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin']);
            $account = User::find($id);
            return view('tablas.show.Cuenta_Show')->with('cuenta', $account);
        }else
        {
            Redirect::back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if($request->user() != null)
        {
            $request->user()->authorizeRoles(['Admin']);
            $account = User::find($id);
            return redirect()->route('admin_account.create')->with('cuenta', $account)->with('modo','editar');
        }else
        {
            Redirect::back();
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'user_name' => 'min:4|max:50',
            'email' => ['required', Rule::unique('users')->ignore($id)],
            'password' => 'min:6|max:15|required',
            'telephone' => 'min:10|max:12|required',
            'type' => 'max:10|required',
            'name' => 'min:4|max:25|required',
            'lastname' => 'min:2|max:25|required'
        ]);
        $cuenta = User::find($id);
        $cuenta->user_name = $request->get('user_name');
        $cuenta->email = $request->get('email');
        $cuenta->password = Hash::make($request->get('password'));
        $cuenta->telephone = $request->get('telephone');
        $cuenta->type = $request->get('type');
        $cuenta->name = $request->get('name');
        $cuenta->lastname = $request->get('lastname');
        $cuenta->save();
        $cuenta->roles()->attach(Role::where('name', $request->get('type'))->first());
        return redirect()->route('admin_account.index')->with('notice', 'El usuario ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
