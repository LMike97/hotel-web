<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelAdmin - Empleados</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Empleados.css" media="screen">
    <script class="u-script" type="text/javascript" src="../assets/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../assets/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "HotelWeb",
		"url": "index.html",
		"logo": "images/LOGOS_HW1.png"
    }</script>

    <meta property="og:title" content="Empleados">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>

  <body class="u-body">

    <!-- Header -->
    @includeIf('secciones.header')
        
    <!-- bar -->
    @include('secciones.bar')

    @php($employee = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($employee = Session::get('empleado'))
        @endif
      @endif
    @endif

    <section class="u-align-center u-clearfix u-section-2" id="sec-b083">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
        @endif
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-grey-80 u-layout-cell u-size-16 u-layout-cell-1">
                <div class="u-border-2 u-border-grey-50 u-container-layout u-container-layout-1">
                  <!-- MENÚ -->
                  <h2 class="u-align-center u-text u-text-1">MENÚ</h2>
                  <a href="/employees/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">Almacenar<br></a>
                  <a href="/employees" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Buscar_Empleado" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/Mostrar_Empleado" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">mostrar</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3>FORMULARIO PARA EMPLEADOS</h3>
                    <!-- FORMULARIO -->
                    <form action="/employees{{($employee == null) ?'': "/$employee->id"}}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR EMPLEADO</p>
                        @if($employee == null)
                        <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name u-form-group-1">
                        <!-- ID -->
                        <label for="name-6797" class="u-label u-text-grey-70">ID</label>
                        <input type="text" placeholder="ID del Empleado" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($employee == null) ?'': $employee->id}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-2">
                        <!-- ID Cuenta -->
                        <label for="text-0547" class="u-label u-text-grey-70">ID Cuenta</label>
                        <input type="text" placeholder="ID de la Cuenta Asociada al Empleado" id="text-0547" name="user_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($employee == null) ?'': $employee->user_id}}" required="">
                      </div>
                      </br>
                      <div class="u-form-email u-form-group u-form-group-3">
                        <!-- ID Hotel -->
                        <label for="text-6797" class="u-label u-text-grey-70">ID Hotel</label>
                        <input type="text" placeholder="ID del Hotel Donde Labora el Empleado" id="text-6797" name="hotel_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($employee == null) ?'': $employee->hotel_id}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-4">
                        <!-- Primer Nombre -->
                        <label for="text-6367" class="u-label u-text-grey-70">Primer Nombre</label>
                        <input type="text" placeholder="Primer Nombre del Empleado" id="text-6367" name="first_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($employee == null) ?'': $employee->first_name}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-5">
                        <!-- Segundo Nombre -->
                        <label for="text-233b" class="u-label u-text-grey-70">Segundo Nombre</label>
                        <input type="text" placeholder="Segundo Nombre del Empleado (si es que este lo tiene)" id="text-233b" name="second_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($employee == null) ?'': $employee->second_name}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-6">
                        <!-- Primer Apellido -->
                        <label for="text-f800" class="u-label u-text-grey-70">Primer Apellido</label>
                        <input type="text" placeholder="Primer Apellido del Empleado" id="text-f800" name="first_lastname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($employee == null) ?'': $employee->first_lastname}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-7">
                        <!-- Segundo Apellido -->
                        <label for="text-a405" class="u-label u-text-grey-70">Segundo Apellido</label>
                        <input type="text" placeholder="Segundo Apellido del Empleado" id="text-a405" name="second_lastname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($employee == null) ?'': $employee->second_lastname}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-8">
                        <!-- Dirección -->
                        <label for="text-ad8a" class="u-label u-text-grey-70">Dirección</label>
                        <input type="text" placeholder="Dirección del Empleado" id="text-ad8a" name="direction" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($employee == null) ?'': $employee->direction}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-9">
                        <!-- Puesto -->
                        <label for="text-ab5d" class="u-label u-text-grey-70">Puesto</label>
                        <input type="text" placeholder="Puesto Actual del Empleado" id="text-ab5d" name="position" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[a-zA-Z]+" maxlength="10" value = "{{($employee == null) ?'': $employee->position}}" required="">
                      </div>
                      </br>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-10">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Guardar<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"></div>
                      <div class="u-form-send-error u-form-send-message">Revise sus errores.</div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
     <!-- Footer -->
     @include('secciones.footer')

  </body>
</html>