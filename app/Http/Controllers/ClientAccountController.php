<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AccountRequest;

class ClientAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Crear-cuenta');
    }

    public function create()
    {
        return view('Crear-Cuenta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        $Account = new User();
        $Account->user_name = $request->get('user_name');
        $Account->email = $request->get('email');
        $Account->password = Hash::make($request->get('password'));
        $Account->telephone = $request->get('telephone');
        $Account->type = 'Client';
        $Account->name = $request->get('name');
        $Account->lastname = $request->get('lastname');
        $Account->save();
        return redirect()->route('account.create')->with('notice', 'El usuario ha sido creado correctamente.');
    }
}
