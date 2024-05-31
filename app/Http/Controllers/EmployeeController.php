<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;

class EmployeeController extends Controller
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
            $users = User::All()->where('type', '==', 'Employee')->pluck('user_image');
            $employees = Employee::All();
            return view('tablas.Tabla_Empleados')->with('empleados', $employees)->with('imagenes', $users);
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
            return view('administracion.Empleados');
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
    public function store(EmployeeRequest $request)
    {
        $empleados = new Employee();
        $empleados->user_id = $request->get('user_id');
        $empleados->hotel_id = $request->get('hotel_id');
        $empleados->first_name = $request->get('first_name');
        $empleados->second_name = $request->get('second_name');
        $empleados->first_lastname = $request->get('first_lastname');
        $empleados->second_lastname = $request->get('second_lastname');
        $empleados->direction = $request->get('direction');
        $empleados->position = $request->get('position');
        $empleados->save();
        return redirect()->route('employees.index')->with('notice', 'El empleado ha sido dado de alta correctamente.');
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
            $employees = Employee::find($id);
            $idUser = $employees->user_id;
            $user = User::find($idUser);
            return view('tablas.show.Empleado_Show')->with('empleados', $employees)->with('imagenes', $user);
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
            $employee = Employee::find($id);
            return redirect()->route('employees.create')->with('empleado', $employee)->with('modo','editar');
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
            'user_id' => ['exists:users,id','required', Rule::unique('employees','user_id')->ignore($id)],
            'hotel_id' => 'exists:hotels,id|required',
            'first_name' => 'min:4|max:25|required',
            'second_name' => 'max:25',
            'first_lastname' => 'min:2|max:25|required',
            'second_lastname' => 'min:2|max:25',
            'direction' => 'required',
            'position' => 'required'
        ]);
        $empleados = Employee::find($id);
        $empleados->user_id = $request->get('user_id');
        $empleados->hotel_id = $request->get('hotel_id');
        $empleados->first_name = $request->get('first_name');
        $empleados->second_name = $request->get('second_name');
        $empleados->first_lastname = $request->get('first_lastname');
        $empleados->second_lastname = $request->get('second_lastname');
        $empleados->direction = $request->get('direction');
        $empleados->position = $request->get('position');
        $empleados->save();
        return redirect()->route('employees.index')->with('notice', 'El empleado ha sido actualizado correctamente.');
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
