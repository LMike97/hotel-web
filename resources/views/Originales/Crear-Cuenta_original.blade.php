<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Crear-Cuenta.css" media="screen">
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

    <meta property="og:title" content="Crear Cuenta">
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
    
    <section class="u-align-left u-clearfix u-image u-shading u-section-2" id="carousel_714f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form action="{{url('/Casa')}}" class="u-clearfix u-form-spacing-30  u-inner-form" style="padding: 10px" source="custom" name="form">
            <div class="u-form-group u-form-name">
              <label for="name-f997" class="u-label u-text-body-color">Nombre</label>
              <input type="text" placeholder="Introduzca su primer nombre" id="name-f997" name="name" class="u-border-1 u-border-black u-input u-input-rectangle u-text-body-color" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" required>
            </div>
            </br>
            <div class="u-form-group">
              <label for="message-f997" class="u-label u-text-body-color">Apellido</label>
              <input type="text" placeholder="Introduzca su primer apellido" id="lastname-f997" name="lastname" class="u-border-1 u-border-black u-input u-input-rectangle u-text-body-color" maxlength="25" required>
            </div>
            </br>
            <div class="u-form-email u-form-group">
              <label for="email-f997" class="u-label u-text-body-color">Correo Electronico</label>
              <input type="email" placeholder="Introduzca una dirección de correo electronico válida" id="email-f997" name="email" class="u-border-1 u-border-black u-input u-input-rectangle u-text-body-color" required>
            </div>
            </br>
            <div class="u-form-group u-form-group-4">
              <label for="password-4467" class="u-label u-text-body-color">Contraseña</label>
              <input type="password" id="password-4467" name="password" class="u-border-1 u-border-black u-input u-input-rectangle u-text-body-color" placeholder="Introduzca su nueva contraseña" pattern="^(?=.*[0-9])(?=.*[a-z, A-Z])(?=\S+$).{6,}$" minlength="6" maxlength="15" required>
              <label class="u-label u-text-body-color">De 6 a 15 caracteres con almenos un número (solo alfanuméricos)</label>
            </div>
            </br>
            <div class="u-form-group u-form-phone u-form-group-5">
              <label for="phone-760e" class="u-label u-text-body-color">Teléfono</label>
              <input type="tel" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" placeholder="Ingrese su teléfono (e.j. 33-3540-3020)" id="phone-760e" name="phone" class="u-border-1 u-border-black u-input u-input-rectangle u-text-body-color" minlength="10" maxlength="12" required>
            </div>
            </br>
            <input type="hidden" id="type" name="type" value="client">
            <div class="u-align-center u-form-group u-form-submit">
              <a href="{{url('/Casa')}}" class="u-border-2 u-border-grey-75 u-border-hover-grey-90 u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-text-hover-white u-text-palette-5-light-3 u-btn-1">Crear Cuenta<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Gracias por registrate! Ahora puedes hacer reservaciones sin limites</div>
            <div class="u-form-send-error u-form-send-message">Algo a fallado! por favor revise sus errores vuelva a intentarlo</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <p class="u-text u-text-body-color u-text-2">¿Ya tienes una cuenta? </p>
        <p class="u-text u-text-body-color u-text-3">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{url('/Login')}}" data-page-id="1610820527">Iniciar Sesión</a>
        </p>
      </div>
    </section>
    
     <!-- Footer -->
     @include('secciones.footer')

  </body>
</html>