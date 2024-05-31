<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Buscar Habitación</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Planilla_Fotos.css" media="screen">
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

    <meta property="og:title" content="Planilla_Fotos">
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

    <section class="u-align-center u-clearfix u-lightbox u-section-2" id="sec-b083">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-grey-80 u-layout-cell u-size-13 u-layout-cell-1">
                <div class="u-border-2 u-border-grey-50 u-container-layout u-container-layout-1">
                  <!-- MENÚ -->
                  <h2 class="u-align-center u-text u-text-1">MENÚ</h2>
                  <a href="/bedrooms/create" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-1">Almacenar<br></a>
                  <a href="/Mostrar_Habitacion" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-3">Mostrar</a>
                  <a href="/bedrooms" class="u-btn u-button-style u-hover-palette-1-dark-3 u-palette-1-dark-2 u-btn-2">Listar</a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-44 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-form u-form-1">
                    <h3 style="text-align: center; color: #00B8FF;">EDITAR UNA HABITACIÓN</h3>
                    <h4 style="text-align: center; color: #484848;">INGRESE EL ID DE LA HABITACIÓN QUE DESEA BUSCAR</h4>
                    <!-- FORMULARIO -->
                    <form action="/edit-bedroom" method="GET" class="u-clearfix u-form-spacing-15 u-inner-form" style="padding: 15px;" source="custom" name="form">
                        @csrf
                        <div class="u-form-group u-form-name u-form-group-1">
                          <!-- ID -->
                          <label for="name-6797" class="u-label u-text-grey-70">HABITACIÓN ID</label>
                          <input type="text" placeholder="ID de la habitación que desea editar" id="ID" name="ID" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" pattern="[1-9]{1}[0-9]*" required="">
                        </div>
                        </br>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                          <a class="u-btn u-btn-submit u-button-style">Buscar<br></a>
                          <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success"></div>
                        <div class="u-form-send-error u-form-send-message">Revise sus errores</div>
                        <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                    <p style="text-align: center; color: #6D6D6D;">Si desconoce las identificaciones de las habitaciones (ID), puede dirigirse a la sección 'listar' dentro del menú/submenú
                      'Habitaciones'. Dentro de esta sección se despliega la información adecuada para proseguir con la operación.</p>
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