<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Iniciar-Sesión.css" media="screen">
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

    <meta property="og:title" content="Iniciar Sesión">
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

    <section class="u-clearfix u-section-2" id="sec-887d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form method="POST" action="{{ route('login.custom') }}" class="u-clearfix u-form-spacing-10 u-inner-form" style="padding: 10px" source="custom" name="form">
            @csrf
            <pre>{{ Auth::user() }}</pre>
            <div class="u-form-group u-form-name">
              <label for="name-0497" class="u-label">Dirección de correo electrónico</label>
              <input type="email" id="name-0497" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="true">
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            </br>
            <div class="u-form-checkbox u-form-group u-form-group-2">
              <input type="checkbox" id="checkbox-d38d" name="checkbox" value="On">
              <label for="checkbox-d38d" class="u-label">Iniciar sesión automáticamente</label>
            </div>
            </br>
            <div class="u-form-email u-form-group">
              <label for="email-0497" class="u-label">Contraseña</label>
              <input type="password" id="email-0497" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="true">
              @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
            </br>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="{{url('/Casa')}}" class="u-btn u-btn-submit u-button-style u-btn-1">Iniciar Sesión<br>
              </a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Login con Éxito! </div>
            <div class="u-form-send-error u-form-send-message"> ERROR. Revise si introdujo correctamente su correo y contraseña. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <p class="u-text u-text-default u-text-1">¿Aun no tienes cuenta?</p>
        <p class="u-text u-text-default u-text-2">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="{{url('/Cuenta')}}" data-page-id="57541060">Suscribete ya<br>
          </a>
        </p>
      </div>
    </section>
    
    <!-- Footer -->
    @include('secciones.footer')

  </body>
</html>