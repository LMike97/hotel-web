<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\AccountController;
use App\http\Controllers\ClientAccountController;
use App\http\Controllers\BedroomController;
use App\http\Controllers\HotelController;
use App\http\Controllers\ClientController;
use App\http\Controllers\EmployeeController;
use App\http\Controllers\ReservationController;
use App\http\Controllers\HotelPhotoController;
use App\http\Controllers\LoginController;
use App\http\Controllers\PerfilClientController;
use App\http\Controllers\PerfilEmployeeController;
use App\http\Controllers\ProfileAdminController;
use App\http\Controllers\ReservationClientController;
use App\http\Controllers\BedroomPhotosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::resource('admin_account', AccountController::class);
    Route::resource('account', ClientAccountController::class);

    Route::resource('bedrooms', BedroomController::class);

    Route::resource('hotels', HotelController::class);

    Route::resource('clients', ClientController::class);

    Route::resource('employees', EmployeeController::class);

    Route::resource('reservations', ReservationController::class);
    Route::get('misReservaciones/{id}', [ReservationController::class, 'misReservaciones']);

    Route::resource('client_reservations', ReservationClientController::class);
    Route::get('cancel/{id}', [ReservationClientController::class, 'cancel']);
    
    Route::resource('hotel-pictures', HotelPhotoController::class);

    Route::resource('bedroom-pictures', BedroomPhotosController::class);

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
    Route::get('signout', [LoginController::class, 'signOut'])->name('signout');

    Route::resource('profile_client', PerfilClientController::class);

    Route::resource('profile_employee', PerfilEmployeeController::class);

    Route::resource('profile_admin', ProfileAdminController::class);

    Route::get('/Buscar_Cliente', function () {
        if(View::exists('administracion.Editar-Cliente')){
            return view('administracion.Editar-Cliente');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_Cliente', function () {
        if(View::exists('administracion.Mostrar-Cliente')){
            return view('administracion.Mostrar-Cliente');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_Empleado', function () {
        if(View::exists('administracion.Editar-Empleado')){
            return view('administracion.Editar-Empleado');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    }); 

    Route::get('/Mostrar_Empleado', function () {
        if(View::exists('administracion.Mostrar-Empleado')){
            return view('administracion.Mostrar-Empleado');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_Usuario', function () {
        if(View::exists('administracion.Editar-Usuario')){
            return view('administracion.Editar-Usuario');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_Usuario', function () {
        if(View::exists('administracion.Mostrar-Usuario')){
            return view('administracion.Mostrar-Usuario');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_Hotel', function () {
        if(View::exists('administracion.Editar-Hotel')){
            return view('administracion.Editar-Hotel');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_Hotel', function () {
        if(View::exists('administracion.Mostrar-Hotel')){
            return view('administracion.Mostrar-Hotel');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_Habitacion', function () {
        if(View::exists('administracion.Editar-Habitacion')){
            return view('administracion.Editar-Habitacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_Habitacion', function () {
        if(View::exists('administracion.Mostrar-Habitacion')){
            return view('administracion.Mostrar-Habitacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_FHotel', function () {
        if(View::exists('administracion.fotos_hotel.Editar-FHotel')){
            return view('administracion.fotos_hotel.Editar-FHotel');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_FHotel', function () {
        if(View::exists('administracion.fotos_hotel.Mostrar-FHotel')){
            return view('administracion.fotos_hotel.Mostrar-FHotel');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_FHabitacion', function () {
        if(View::exists('administracion.fotos_habitacion.Editar-FHabitacion')){
            return view('administracion.fotos_habitacion.Editar-FHabitacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_FHabitacion', function () {
        if(View::exists('administracion.fotos_habitacion.Mostrar-FHabitacion')){
            return view('administracion.fotos_habitacion.Mostrar-FHabitacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Buscar_Reservacion', function () {
        if(View::exists('administracion.Editar-AdmReservacion')){
            return view('administracion.Editar-AdmReservacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Mostrar_Reservacion', function () {
        if(View::exists('administracion.Mostrar-Reservacion')){
            return view('administracion.Mostrar-Reservacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/edit-client', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/clients/{$item}/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-client', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/clients/{$item}");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-employee', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/employees/{$item}/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-employee', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/employees/{$item}");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-account', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/admin_account/{$item}/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-account', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/admin_account/{$item}");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-hotel', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/hotels/{$item}/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-hotel', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/hotels/{$item}");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-bedroom', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/bedrooms/{$item}/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-bedroom', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/bedrooms/{$item}");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-reservation', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/client_reservations/$item/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/cancel-reservation', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("cancel/$item");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-fHotel', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/hotel-pictures/$item/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-fHotel', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/hotel-pictures/$item");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-AdmReservation', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/reservations/$item/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-AdmReservation', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/reservations/$item");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/edit-fHabitacion', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/bedroom-pictures/$item/edit");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/show-fHabitacion', function(){
        $id = request()->only('ID');
        if($id != null)
        {
            foreach($id as $item)
            {
                return redirect()->to("/bedroom-pictures/$item");
            }
        }
        else
        {
            return "¡NO SE HA ENVIADO NADA!";
        }
    });

    Route::get('/', function () {
        if(View::exists('Casa')){
            return view('Casa');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Contacto', function () {
        if(View::exists('Contáctanos')){
            return view('Contáctanos');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Login', function () {
        if(View::exists('Iniciar-Sesión')){
            return view('Iniciar-Sesión');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    /*Route::post('/Login', function(){
        $credentials = request()->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            request()->session()->regenerate();

            return redirect()->intented('/Casa');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    });*/

    Route::get('/Casa', function () {
        if(View::exists('Casa')){
            return view('Casa');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Cuenta', function () {
        if(View::exists('Crear-Cuenta')){
            return view('Crear-Cuenta');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Hotel/Westin', function () {
        if(View::exists('hoteles.The-westin-GDL')){
            return view('hoteles.The-westin-GDL');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Hotel/Safi', function () {
        if(View::exists('hoteles.Hotel-Safi-Valle-Mty')){
            return view('hoteles.Hotel-Safi-Valle-Mty');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Hotel/NHCollection', function () {
        if(View::exists('hoteles.NH-Collection-CDMX')){
            return view('hoteles.NH-Collection-CDMX');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Reservacion', function () {
        if(View::exists('reservacion.Reservacion')){
            return view('reservacion.Reservacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Reservacion/Concluida', function () {
        if(View::exists('reservacion.Reserva_Hecha')){
            return view('reservacion.Reserva_Hecha');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/master', function(){
        if(View::exists('secciones.master')){
            return view('secciones.master');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Reservaciones', function(){
        if(View::exists('administracion.Admin_Reservaciones')){
            return view('administracion.Admin_Reservaciones');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Clientes', function(){
        if(View::exists('administracion.Clientes')){
            return view('administracion.Clientes');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Cuentas', function(){
        if(View::exists('administracion.Cuentas')){
            return view('administracion.Cuentas');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Empleados', function(){
        if(View::exists('administracion.Empleados')){
            return view('administracion.Empleados');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Hoteles', function(){
        if(View::exists('administracion.Hoteles')){
            return view('administracion.Hoteles');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Fotos_Habitacion', function(){
        if(View::exists('administracion.fotos_habitacion.Fotos_Habitacion')){
            return view('administracion.fotos_habitacion.Fotos_Habitacion');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Fotos_Hotel', function(){
        if(View::exists('administracion.fotos_hotel.Fotos_Hotel')){
            return view('administracion.fotos_hotel.Fotos_Hotel');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Eliminar_FotosHB', function(){
        if(View::exists('administracion.fotos_habitacion.Eliminar_FotosHB')){
            return view('administracion.fotos_habitacion.Eliminar_FotosHB');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    Route::get('/Administracion/Eliminar_FotosHT', function(){
        if(View::exists('administracion.fotos_hotel.Eliminar_FotosHT')){
            return view('administracion.fotos_hotel.Eliminar_FotosHT');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });

    /*Route::get('/Tablas/Cuentas', function(){
        if(View::exists('tablas.Tabla_Cuentas')){
            return view('tablas.Tabla_Cuentas');
        }else{
            return "LA RUTA DEL ARCHIVO NO CORRESPONDE O EL ARCHIVO NO EXISTE";
        }
    });*/
    
    /*Route::view('/', 'index');

    Route::view('/Contacto', 'Contáctanos');
    Route::view('/Login', 'Iniciar-Sesión');
    Route::view('/Casa', 'Casa');
    Route::view('/Cuenta', 'Crear-Cuenta');

    Route::view('/Hotel/Westin', 'hoteles.The-westin-GDL');
    Route::view('/Hotel/Safi', 'hoteles.Hotel-Safi-Valle-Mty');
    Route::view('/Hotel/NHCollection', 'hoteles.NH-Collection-CDMX');

    Route::view('/Reservacion', 'reservacion.Reservacion');
    Route::view('/Reservacion/Concluida', 'reservacion.Reserva_Hecha');

    Route::view('/Master', 'secciones.master');*/
