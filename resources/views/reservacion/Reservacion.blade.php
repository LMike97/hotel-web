<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Reservacion</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Reservacion.css" media="screen">
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

    <meta property="og:title" content="Reservacion">
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

    <section class="u-align-center u-clearfix u-section-2" id="carousel_9b59">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-custom-font u-text u-text-font u-text-1">*Nombre del Hotel*</h1>
        <h2 class="u-text u-text-2">Haga una reservación</h2>
        <div class="u-form u-form-1">
          <form action="{{url('/Reservacion/Concluida')}}" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 0;" source="custom" name="form">
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-2">
              <label for="name-f2a8" class="u-label u-label-2">Nombre(s)</label>
              <input type="text" placeholder="Ingrese el/los nombre(s) del huesped" id="name-f2a8" name="name" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" minlength="2" maxlength="22"  autofocus="autofocus" required>
            </div>
            <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-3">
              <label for="lastname-ea36" class="u-label u-label-3">Apellidos</label>
              <input type="text" placeholder="Ingrese los apellidos del huesped" id="lastname-ea36" name="Lastname" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" pattern="[A-ZÑÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" minlength="6" maxlength="23" required>
            </div>
            <div class="u-form-date u-form-group u-form-partition-factor-3 u-form-group-4">
              <label for="date-4441" class="u-label u-label-4">Entrada</label>
              <input type="date" placeholder="" id="date-4441" name="date" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" min="<?php echo date("Y-m-d");?>" max="2022-12-31" required>
            </div>
            <div class="u-form-date u-form-group u-form-partition-factor-3 u-form-group-5">
              <label for="date-f24c" class="u-label u-label-5">Salida</label>
              <input type="date" placeholder="" id="date-f24c" name="date-1" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" min="<?php echo date("Y-m-d");?>" max="2022-12-31" required>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-6">
              <label for="select-8e9d" class="u-label u-label-6">No. Habitaciones</label>
              <div class="u-form-select-wrapper">
                <select id="select-8e9d" name="rooms" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="required">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
              <label for="email-f2a8" class="u-label u-label-1">E-mail</label>
              <input type="email" placeholder="Ingrese una dirección de email válida" id="email-f2a8" name="email" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required>
            </div>
            <div class="u-form-group u-form-phone u-form-group-7">
              <label for="phone-447e" class="u-label u-label-7">Teléfono</label>
              <input type="tel" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" placeholder="Ingrese su número telefónico (e.j. 33-3540-3020)" id="phone-447e" name="phone" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" minlength="10" maxlength="12" required>
            </div>
            <div class="u-form-group u-form-message u-form-group-8">
              <label for="message-f2a8" class="u-label u-label-8">Peticiones especiales</label>
              <textarea placeholder="Ingrese su mensaje (opcional)" rows="4" cols="50" id="message-f2a8" name="message" class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" maxlength="200"></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-form-group-9">
              <a href="{{url('/Reservacion/Concluida')}}" class="u-black u-btn u-btn-submit u-button-style u-hover-grey-60 u-btn-1">reservar<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Operacion éxitosa! </div>
            <div class="u-form-send-error u-form-send-message"> No se pudo realizar la reservacion. Revise los posibles errores del formulario. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
    
    <!-- Footer -->
    @include('secciones.footer')

  </body>
</html>