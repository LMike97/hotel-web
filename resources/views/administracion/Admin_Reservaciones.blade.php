<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Admin_Reservaciones</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Admin_Reservaciones.css" media="screen">
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

    <meta property="og:title" content="Admin_Reservaciones">
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

    @php($reservation = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($reservation = Session::get('reservacion'))
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
                  <a href="/reservations/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">almacenar<br></a>
                  <a href="/reservations" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Buscar_Reservacion" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/Mostrar_Reservacion" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">Mostrar</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3>FORMULARIO PARA RESERVACIONES</h3>
                    <!-- Formulario -->
                    <form action="/reservations{{($reservation == null) ?'': "/$reservation->id"}}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR CLIENTE</p>
                        @if($reservation == null)
                        <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name u-form-group-1">
                        <!-- ID -->
                        <label for="name-6797" class="u-label u-text-grey-70">ID</label>
                        <input type="text" placeholder="ID" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($reservation == null) ?'': $reservation->id}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-2">
                        <!-- ID_Habitación -->
                        <label for="text-0547" class="u-label u-text-grey-70">ID Habitación</label>
                        <input type="text" placeholder="ID_Habitación" id="text-0547" name="bedroom_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($reservation == null) ?'': $reservation->bedroom_id}}" required="">
                      </div>
                      </br>
                      <div class="u-form-email u-form-group u-form-group-3">
                        <!-- ID_Usuario -->
                        <label for="text-6797" class="u-label u-text-grey-70">ID Usuario</label>
                        <input type="text" placeholder="ID_Usuario" id="text-6797" name="client_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($reservation == null) ?'': $reservation->client_id}}">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-4">
                        <!-- Nombre del Huesped-->
                        <label for="text-233b" class="u-label u-text-grey-70">Huesped</label>
                        <input type="text" placeholder="Nombre del Huesped" id="text-233b" name="guest_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" minlength="8" maxlength="45" value = "{{($reservation == null) ?'': $reservation->guest_name}}" required="">
                      </div>
                      </br>
                      <div class="u-form-date u-form-group u-form-group-6">
                        <!-- Fecha Inicial -->
                        <label for="date-ed7e" class="u-label u-text-grey-70">Fecha Inicial de Reservación</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-ed7e" name="initial_date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($reservation == null) ?'': $reservation->initial_date}}" required="">
                      </div>
                      </br>
                      <div class="u-form-date u-form-group u-form-group-7">
                        <!-- Fecha Final -->
                        <label for="date-298d" class="u-label u-text-grey-70">Fecha Final de Reservación</label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-298d" name="final_date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($reservation == null) ?'': $reservation->final_date}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-5">
                        <!-- No_Reservaciones -->
                        <label for="text-19e0" class="u-label u-text-grey-70">Reservaciones (Habitaciones)</label>
                        <input type="text" placeholder="Número de Habitaciones Reservadas" id="text-19e0" name="number_bedrooms" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]+" value = "{{($reservation == null) ?'': $reservation->number_bedrooms}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-9">
                        <!-- Teléfono -->
                        <label for="text-368c" class="u-label u-text-grey-70">Teléfono</label>
                        <input type="tel" placeholder="Teléfono del Cliente (e.j. 33-3540-3020)" id="telephone-368c" name="telephone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" value = "{{($reservation == null) ?'': $reservation->telephone}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-9">
                        <!-- Email -->
                        <label for="text-368c" class="u-label u-text-grey-70">Email</label>
                        <input type="email" placeholder="Correo Electrónico del Cliente" id="email-368c" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($reservation == null) ?'': $reservation->email}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-8">
                        <!-- Peticiones -->
                        <label for="textarea-e823" class="u-label u-text-grey-70">Peticiones del Cliente</label>
                        <textarea placeholder="Peticiones Especiales" rows="4" cols="50" id="textarea-e823" name="special_petition" class="u-border-1 u-border-grey-30 u-input u-input-rectangle">{{($reservation == null) ?'': $reservation->special_petition}}</textarea>
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-9">
                        <!-- Costo -->
                        <label for="text-368c" class="u-label u-text-grey-70">Precio</label>
                        <input type="text" placeholder="Precio Total de la Reservación" id="text-368c" name="total_price" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]+[.]?[0-9]*" value = "{{($reservation == null) ?'': $reservation->total_price}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-10">
                        <!-- Estatus -->
                        <label for="text-2820" class="u-label u-text-grey-70">Estatus</label>
                        <input type="text" placeholder="Estatus de la Reservación" id="text-2820" name="status" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[a-zA-Z]+" maxlength="10" value = "{{($reservation == null) ?'': $reservation->status}}" required="">
                      </div>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-11">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Guardar<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"></div>
                      <div class="u-form-send-error u-form-send-message">Revise Los Erroes</div>
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