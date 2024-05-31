<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Habitaciones</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Habitaciones.css" media="screen">
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

    <meta property="og:title" content="Habitaciones">
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

    @php($bedroom = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($bedroom = Session::get('habitacion'))
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
                  <!-- MENÚ-->
                  <h2 class="u-align-center u-text u-text-1">MENÚ</h2>
                  <a href="/bedrooms/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">almacenar<br></a>
                  <a href="/bedrooms" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Buscar_Habitacion" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/Mostrar_Habitacion" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">Mostrar</a>
                  <a href="/bedroom-pictures" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-4">fotos</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3>FORMULARIO PARA HABITACIONES</h3>
                    <!-- FORMULARIO -->
                    <form action="/bedrooms{{($bedroom == null) ?'': "/$bedroom->id"}}" method="POST" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR HABITACIÓN</p>
                        @if($client == null)
                        <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name u-form-group-1">
                        <!-- ID -->
                        <label for="name-6797" class="u-label u-text-grey-70">ID</label>
                        <input type="text" placeholder="ID de la Habitación" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($bedroom == null) ?'': $bedroom->id}}" pattern="[1-9]{1}[0-9]*">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-2">
                        <!-- ID Hotel -->
                        <label for="text-0547" class="u-label u-text-grey-70">ID Hotel</label>
                        <input type="text" placeholder="ID del Hotel Asociado a la Habitación" id="text-0547" name="hotel_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($bedroom == null) ?'': $bedroom->hotel_id}}" pattern="[1-9]{1}[0-9]*" required="">
                      </div>
                      </br>
                      <div class="u-form-email u-form-group u-form-group-3">
                        <!-- Tipo -->
                        <label for="text-6797" class="u-label u-text-grey-70">Tipo</label>
                        <input type="text" placeholder="Tipo de Habitación (Nombre de Ésta)" id="text-6797" name="type" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" maxlength="40" value = "{{($bedroom == null) ?'': $bedroom->type}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-4">
                        <!-- Descripción -->
                        <label for="textarea-efe4" class="u-label u-text-grey-70">Descripción</label>
                        <textarea placeholder="Descripción de la Habitación" rows="4" cols="50" id="textarea-efe4" name="description" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">{{($bedroom == null) ?'': $bedroom->description}}</textarea>
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-5">
                        <!-- Adicionales -->
                        <label for="textarea-2b0b" class="u-label u-text-grey-70">Adicionales</label>
                        <textarea placeholder="Elementos Adicionales" rows="4" cols="50" id="textarea-2b0b" name="aditionals" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">{{($bedroom == null) ?'': $bedroom->additional}}</textarea>
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-6">
                        <!-- Capacidad -->
                        <label for="text-233b" class="u-label u-text-grey-70">Capacidad</label>
                        <input type="text" placeholder="Capacidad Máxima de Huespedes por Habitación" id="text-233b" name="capacity" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($bedroom == null) ?'': $bedroom->capacity}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-6">
                        <!-- Precio -->
                        <label for="text-233b" class="u-label u-text-grey-70">Precio</label>
                        <input type="text" placeholder="Precio de la Habitación por Día" id="text-233b" name="price" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]+[.]?[0-9]*" value = "{{($bedroom == null) ?'': $bedroom->price}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-7">
                        <!-- Disponibles -->
                        <label for="text-19e0" class="u-label u-text-grey-70">Disponibles</label>
                        <input type="text" placeholder="Número de Habitaciones Totales o Disponibles" id="text-19e0" name="available" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[0-9]+" value = "{{($bedroom == null) ?'': $bedroom->available}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-8">
                        <!-- Estatus -->
                        <label for="text-f800" class="u-label u-text-grey-70">Estatus</label>
                        <input type="text" placeholder="Estatus de las Habitaciones" id="text-f800" name="status" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[a-zA-Z]+" maxlength="10" value = "{{($bedroom == null) ?'': $bedroom->status}}" required="">
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