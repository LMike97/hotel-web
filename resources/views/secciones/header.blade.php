@php($user = Auth::user())
<header class="u-clearfix u-header u-header" id="sec-babf">
    <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
        <a href="{{url('/Casa')}}" data-page-id="57186792" class="u-image u-logo u-image-1" data-image-width="614" data-image-height="141" title="Casa">
            <img src="../assets/images/LOGOS_HW1.png" class="u-logo-image u-logo-image-1" data-image-width="268.2">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></symbol>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <!-- Usuario -->
                    @guest
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{url('/Casa')}}" style="padding: 10px 20px;">Casa</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{url('/account/create')}}" style="padding: 10px 20px;">Crear Cuenta</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{url('/Login')}}" style="padding: 10px 20px;">Iniciar Sesión</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{url('/Contacto')}}" style="padding: 10px 20px;">Contáctanos</a></li>
                    @else
                    <!-- Cliente -->
                    @if($user->type == 'Client')
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Casa</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/misReservaciones/{{$user->id}}" style="padding: 10px 20px;">Mis Reservaciones</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/profile_client/{{$user->id}}" style="padding: 10px 20px;">Perfil</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link  u-white" href="/profile_client/{{$user->id}}/edit">Administrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ route('signout') }}">Salir</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{url('/Contacto')}}" style="padding: 10px 20px;">Contáctanos</a></li>
                    <!-- Empleado -->
                    @elseif($user->type == 'Employee')
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Casa</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/clients" style="padding: 10px 20px;">Usuarios</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/clients">Listar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/clients/create">Nuevo +</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Cliente">Actualizar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Cliente">Mostrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/reservations">Reservaciones</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/reservations">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/reservations/create">Nueva +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Reservacion">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Reservacion">Mostrar</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/hotels" style="padding: 10px 20px;">Hoteles</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotels">Listar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotels/create">Nuevo +</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Hotel">Actualizar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Hotel">Mostrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotel-pictures">Imagenes</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotel-pictures">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotel-pictures/create">Nuevo +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_FHotel">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_FHotel">Mostrar</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/bedrooms" style="padding: 10px 20px;">Habitaciones</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedrooms">Listar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedrooms/create">Nuevo +</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Habitacion">Actualizar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Habitacion">Mostrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedroom-pictures">Imagenes</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedroom-pictures">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedroom-pictures/create">Nuevo +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_FHabitacion">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_FHabitacion">Mostrar</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/profile_employee/{{$user->id}}" style="padding: 10px 20px;">Perfil</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/profile_employee/{{$user->id}}/edit">Administrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ route('signout') }}">Salir</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- Administrador -->
                    @elseif($user->type == 'Admin')
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Casa</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/admin_account" style="padding: 10px 20px;">Usuarios</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/admin_account">Listar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/admin_account/create">Nuevo +</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Usuario">Actualizar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Usuario">Mostrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/employees">Empleados</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/employees">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/employees/create">Nuevo +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Empleado">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Empleado">Mostrar</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/clients">Clientes</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/clients">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/clients/create">Nuevo +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Cliente">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Cliente">Mostrar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/reservations">Reservaciones</a>
                                                <div class="u-nav-popup">
                                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/reservations">Listar</a></li>
                                                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/reservations/create">Nueva +</a></li>
                                                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Reservacion">Actualizar</a></li>
                                                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Reservacion">Mostrar</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/hotels" style="padding: 10px 20px;">Hoteles</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotels">Listar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotels/create">Nuevo +</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Hotel">Actualizar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Hotel">Mostrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotel-pictures">Imagenes</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotel-pictures">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/hotel-pictures/create">Nuevo +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_FHotel">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_FHotel">Mostrar</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/bedrooms" style="padding: 10px 20px;">Habitaciones</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedrooms">Listar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedrooms/create">Nuevo +</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_Habitacion">Actualizar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_Habitacion">Mostrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedroom-pictures">Imagenes</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedroom-pictures">Listar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/bedroom-pictures/create">Nuevo +</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Buscar_FHabitacion">Actualizar</a></li>
                                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/Mostrar_FHabitacion">Mostrar</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/profile_admin/{{$user->id}}" style="padding: 10px 20px;">Perfil</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="/profile_admin/{{$user->id}}/edit">Administrar</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="{{ route('signout') }}">Salir</a></li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    @endguest
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <!-- Usuario -->
                            @guest
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/Casa')}}" style="padding: 10px 20px;">Casa</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/account/create')}}" style="padding: 10px 20px;">Crear Cuenta</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/Login')}}" style="padding: 10px 20px;">Iniciar Sesión</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/Contacto')}}" style="padding: 10px 20px;">Contáctanos</a></li>
                            @else
                            <!-- Cliente -->
                            @if($user->type == 'Client')
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Casa</a></li>
				            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Mis Reservaciones</a></li>
				            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Contáctanos</a></li>
				            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Perfil</a>
					            <div class="u-nav-popup">
						            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
							            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Administrar</a></li>
							            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Salir</a></li>
						            </ul>
					            </div>
				            </li>
                            <!-- Empleado -->
                            @elseif($user->type == 'Employee')
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Casa</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Usuarios</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-7">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Nuevo +</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Hoteles</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Nuevo +</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Imagenes</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Habitaciones</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-9">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Nuevo +</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Imagenes</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Perfil</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Administrar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Salir</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- Administrador -->
                            @elseif($user->type == 'Admin')
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Casa</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Usuarios</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-9">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Empleados</a>
                                            <div class="u-nav-popup">
                                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-10">
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link">Nuevo +</a></li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Clientes</a>
                                            <div class="u-nav-popup">
                                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-11">
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Nuevo +</a></li>
                                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Hoteles</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-12">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Nuevo +</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Imagenes</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Habitaciones</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-13">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Listar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Nuevo +</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Actualizar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Imagenes</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa" style="padding: 10px 20px;">Perfil</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-14">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Administrar</a></li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://hotelweb.test/Casa">Salir</a></li>
                                    </ul>
                                </div>
                            </li>
                            @endif
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        <h4 class="u-custom-font u-hidden-sm u-hidden-xs u-text u-text-font u-text-1">Hoteleria y Reservaciones</h4>
    </div>
</header>