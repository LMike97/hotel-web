<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cuentas_de_usuario</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Cuentas_de_usuario.css" media="screen">
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

    <meta property="og:title" content="Cuentas_de_usuario">
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

    @php($account = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($account = Session::get('cuenta'))
        @endif
      @endif
    @endif

    <section class="u-align-center u-clearfix u-lightbox u-section-2" id="sec-b083">
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
                  <a href="/admin_account/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">Almacenar<br></a>
                  <a href="/admin_account" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Buscar_Empleado" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/Mostrar_Empleado" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">mostrar</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3>FORMULARIO PARA USUARIOS</h3>
                    <!-- FORMULARIO -->
                    <form action="/admin_account{{($account == null) ?'': "/$account->id"}}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR USUARIO</p>
                        @if($account == null)
                          <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name u-form-group-1">
                        <!-- ID -->
                        <label for="name-6797" class="u-label u-text-grey-70">ID</label>
                        <input type="text" placeholder="ID de la Cuenta" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($account == null) ?'': $account->id}}" pattern="[1-9]{1}[0-9]*">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-2">
                        <!-- Nombre de Usuario -->
                        <label for="text-0547" class="u-label u-text-grey-70">Nombre de Usuario</label>
                        <input type="text" placeholder="Nombre del Usuario de la Cuenta" id="text-0547" name="user_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="^[A-ZÁÉÍÓÚ]{1}[a-zA-ZÁÉÍÓÚñáéíóú0-9_'-.@#$|]+( [a-zA-ZÁÉÍÓÚñáéíóú0-9_'-.@#$|]+)*$" minlength="4" maxlength="50" value = "{{($account == null) ?'': $account->user_name}}" required="">
                      </div>
                      </br>
                      <div class="u-form-email u-form-group u-form-group-3">
                        <!-- Email -->
                        <label for="email-6797" class="u-label u-text-grey-70">Email</label>
                        <input type="email" placeholder="Correo Electrónico Asociado a la Cuenta" id="email-6797" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($account == null) ?'':$account->email}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-4">
                        <!-- Password -->
                        <label for="password-6367" class="u-label u-text-grey-70">Contraseña</label>
                        <input type="password" placeholder="Contraseña de la Cuenta" id="password-6367" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="^(?=.*[0-9])(?=.*[a-z, A-Z])(?=\S+$).{6,}$" minlength="6" maxlength="15" value = "{{($account == null) ?'':$account->password}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-5">
                        <!-- Teléfono -->
                        <label for="tel-2f61" class="u-label u-text-grey-70">Teléfono</label>
                        <input type="tel" placeholder="Teléfono Asociado a la Cuenta (e.j. 33-3540-3020)" id="tel-2f61" name="telephone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" value = "{{($account == null) ?'':$account->telephone}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-6">
                        <!-- Tipo -->
                        <label for="text-cbcb" class="u-label u-text-grey-70">Tipo</label>
                        <input type="text" placeholder="Tipo de Usuario" id="text-cbcb" name="type" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[a-zA-Z]+" maxlength="10" value = "{{($account == null) ?'':$account->type}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-7">
                        <!-- Nombre -->
                        <label for="text-6a72" class="u-label u-text-grey-70">Nombre</label>
                        <input type="text" placeholder="Nombre de la Persona" id="text-6a72" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($account == null) ?'': $account->name}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-8">
                        <!-- Apellido -->
                        <label for="text-8b47" class="u-label u-text-grey-70">Apellido</label>
                        <input type="text" placeholder="Apellido de la Persona" id="text-8b47" name="lastname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($account == null) ?'':$account->lastname}}" required="">
                      </div>
                      </br>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-9">
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