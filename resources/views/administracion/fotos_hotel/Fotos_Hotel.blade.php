<!DOCTYPE html lang="es-ES">
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelAdmin - Fotos Hotel</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Editar-Fotos.css" media="screen">
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

    <meta property="og:title" content="Editar Fotos">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!------ Include the above in your HEAD tag ---------->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

  </head>
  
  <body class="u-body">

    <!-- Header -->
    @includeIf('secciones.header')

    <!-- bar -->
    @include('secciones.bar')

    @php($hphoto = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($hphoto = Session::get('foto-hotel'))
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
              <div class="u-container-style u-grey-80 u-layout-cell u-size-13 u-layout-cell-1">
                <div class="u-border-2 u-border-grey-50 u-container-layout u-container-layout-1">
                  <!-- MENÚ -->
                  <h2 class="u-align-center u-text u-text-1">MENÚ</h2>
                  <a href="/hotel-pictures/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">Almacenar<br></a>
                  <a href="/hotel-pictures" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                  <a href="/Buscar_FHotel" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Editar</a>
                  <a href="/Mostrar_FHotel" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">mostrar</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-47 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-align-center u-form u-form-1">
                    <h3>FORMULARIO PARA FOTOS DE LOS HOTELES</h3>
                    <!-- FORMULARIO -->
                    <form action="/hotel-pictures{{($hphoto == null) ?'': "/$hphoto->id"}}" method="POST" enctype="multipart/form-data" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                      @csrf
                      @if($modo == 'editar')
                        @method('PUT')
                        <p>EDITAR FOTOS DEL HOTEL</p>
                        @if($hphoto == null)
                          <p>SIN RESULTADOS</p>
                        @endif
                      @endif
                      <div class="u-form-group u-form-name">
                        <!-- ID -->
                        <label for="name-6797" class="u-label">ID</label>
                        <input type="text" placeholder="ID" id="name-6797" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($hphoto == null) ?'': $hphoto->id}}">
                      </div>
                      </br>
                      <div class="u-form-email u-form-group">
                        <!-- ID Hotel -->
                        <label for="text-6797" class="u-label">ID Hotel</label>
                        <input type="text" placeholder="ID del Hotel Asociado a la(s) Foto(s)" id="text-6797" name="hotel_id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" value = "{{($hphoto == null) ?'': $hphoto->hotel_id}}" required="">
                      </div>
                      </br>
                      <div class="u-form-group u-form-group-3">
                        <!-- Nombre -->
                        <label for="text-ee8b" class="u-label">Nombre</label>
                        <input type="text" placeholder="Nombre de la Imagen" id="text-ee8b" name="x" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" value = "{{($hphoto == null) ?'': $hphoto->name}}">
                      </div>
                      </br>
                      <!-- Imagen -->
                      <div class="container-fluid">
                        <div class="row mb-3">
                          <div class="col">
                            <div style="position: relative; padding-bottom: 56.25%;">
                              <img id='picture' style="position: absolute; object-fit: cover; width: 100%; height: 100%;" src="{{($hphoto == null) ?'../assets/Images/default_hotel.jpg': "../img/hoteles/$hphoto->name"}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-form-groups">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="custom-file">
                        <input type="file" id='file' name="name" class="custom-file-input" lang="es" accept="image/png, .jpeg, .jpg, image/gif, svg, webp">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                      </div>
                      <p>Solo acepta archivos de imagen</p>
                      <!-- Botón -->
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-btn u-btn-submit u-button-style">Guardar</a>
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
      <script src="../assets/js/images.js"></script>
    </section>

    @section('js')
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @endsection

    <!-- Footer -->
    @include('secciones.footer')

  </body>
</html>