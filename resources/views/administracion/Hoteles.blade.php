<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelAdmin - Formulario Hotel</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Hoteles.css" media="screen">
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

    <meta property="og:title" content="Hoteles">
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

    @php($hotel = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($hotel = Session::get('hotel'))
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
                  <a href="/hotels/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">Almacenar<br></a>
                  <a href="/hotels" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Buscar_Hotel" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/Mostrar_Hotel" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">mostrar</a>
                  <a href="/hotel-pictures" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-4">Fotos</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3>FORMULARIO PARA HOTELES</h3>
                    <!-- FORMULARIO -->
                    <form action="/hotels{{($hotel == null) ?'': "/$hotel->id"}}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR HOTEL</p>
                        @if($hotel == null)
                          <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name u-form-group-1">
                        <!-- ID -->
                        <label for="name-6797" class="u-label u-text-grey-70">ID</label>
                        <input type="text" placeholder="ID del Hotel" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($hotel == null) ?'': $hotel->id}}" >
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-2">
                        <!-- Nombre -->
                        <label for="text-0547" class="u-label u-text-grey-70">Nombre</label>
                        <input type="text" placeholder="Nombre del Hotel" id="text-0547" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="30" value = "{{($hotel == null) ?'': $hotel->name}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-3">
                        <!-- Descripción -->
                        <label for="textarea-a44f" class="u-label u-text-grey-70">Descripción</label>
                        <textarea placeholder="Descripción del Hotel" rows="4" cols="50" id="textarea-a44f" name="description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">{{($hotel == null) ?'': $hotel->description}}</textarea>
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-4">
                        <!-- Adicionales -->
                        <label for="textarea-5b6a" class="u-label u-text-grey-70">Adicionales</label>
                        <textarea placeholder="Elementos Adicionales" rows="4" cols="50" id="textarea-5b6a" name="additional" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">{{($hotel == null) ?'': $hotel->additional}}</textarea>
                      </div>
                      </br>
                      <div class="u-form-email u-form-group u-form-group-5">
                        <!-- Dirección -->
                        <label for="text-6797" class="u-label u-text-grey-70">Dirección</label>
                        <input type="text" placeholder="Dirección del Hotel" id="text-6797" name="direction" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($hotel == null) ?'': $hotel->direction}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-6">
                        <!-- Teléfono -->
                        <label for="text-6367" class="u-label u-text-grey-70">Teléfono</label>
                        <input type="text" placeholder="Número Telefónico (e.j. 33-3540-3020)" id="text-6367" name="no_telephone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" value = "{{($hotel == null) ?'': $hotel->no_telephone}}" required="">
                      </div>
                      </br>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-7">
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