<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelAdmin - Clientes</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Clientes.css" media="screen">
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

    <meta property="og:title" content="Clientes">
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

    @php($client = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($client = Session::get('cliente'))
        @endif
      @endif
    @endif

    <section class="u-align-center u-clearfix u-section-2" id="sec-2eb7">
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
                  <a href="/clients/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">almacenar<br></a>
                  <a href="/Buscar_Cliente" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/clients" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Mostrar_Cliente" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">Mostrar</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3>FORMULARIO PARA CLIENTES</h3>
                    <!-- FORMULARIO -->
                    <form action="/clients{{($client == null) ?'': "/$client->id"}}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR CLIENTE</p>
                        @if($client == null)
                        <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name u-form-group-1">
                        <!-- ID -->
                        <label for="name-6797" class="u-label u-text-grey-70">ID</label>
                        <input type="text" placeholder="ID" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($client == null) ?'': $client->id}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-2">
                        <!-- ID Cuenta -->
                        <label for="text-0547" class="u-label u-text-grey-70">ID Cuenta</label>
                        <input type="text" placeholder="ID de la Cuenta Asociada" id="text-0547" name="user_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($client == null) ?'': $client->user_id}}" required="">
                      </div>
                      </br>
                      <div class="u-form-email u-form-group u-form-group-3">
                        <!-- Primer Nombre -->
                        <label for="name-6797" class="u-label u-text-grey-70">Primer Nombre</label>
                        <input type="text" placeholder="Primer Nombre del Cliente" id="ename-6797" name="first_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($client == null) ?'': $client->first_name}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-4">
                        <!-- Segundo Nombre -->
                        <label for="text-233b" class="u-label u-text-grey-70">Segundo Nombre</label>
                        <input type="text" placeholder="Segundo Nombre del Cliente (si este cuenta con uno)" id="text-233b" name="second_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($client == null) ?'': $client->second_name}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-5">
                        <!-- Primer Apellidosa -->
                        <label for="text-f800" class="u-label u-text-grey-70">Primer Apellido</label>
                        <input type="text" placeholder="Primer Apellido del Cliente" id="text-f800" name="first_lastname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($client == null) ?'': $client->first_lastname}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-6">
                        <!-- Segundo Apellido -->
                        <label for="text-a405" class="u-label u-text-grey-70">Segundo Apellido</label>
                        <input type="text" placeholder="Segundo Apellido del Cliente" id="text-a405" name="second_lastname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($client == null) ?'': $client->second_lastname}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-7">
                        <!-- Reservaciones -->
                        <label for="text-ad8a" class="u-label u-text-grey-70">Reservaciones</label>
                        <input type="text" placeholder="Número de Reservaciones Realizadas por el Cliente" id="text-ad8a" name="no_reservation" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]+" value = "{{($client == null) ?'': $client->no_reservation}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-8">
                        <!-- Descuento -->
                        <label for="text-ab5d" class="u-label u-text-grey-70">Descuento</label>
                        <input type="text" placeholder="% de Descuento del Cliente en Base a sus No. de Reservaciones" id="text-ab5d" name="discount" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]+[.]?[0-9]*" value = "{{($client == null) ?'': $client->discount}}">
                      </div>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Guardar<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"></div>
                      <div class="u-form-send-error u-form-send-message">Revise sus errores</div>
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