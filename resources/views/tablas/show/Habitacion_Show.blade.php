<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Tabla de las Cuentas</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Planilla.css" media="screen">
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

    <meta property="og:title" content="Planilla">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../assets/css/style_tbl.css">

  </head>
  
  <!-- Header -->
  @includeIf('secciones.header')

  <!-- bar -->
  @include('secciones.bar')

  <body>
    
    <section class="ftco-section">
      <div class="container">
      @if(Session::has('notice'))
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">
                <p> <strong> {{ Session::get('notice') }} </strong> </p>
            </h2>
          </div>
        </div>
        @endif
        @if($habitaciones != null)
        <div class="row">
          <div class="col-md-12">
          <div>
          <h4 style="color: #57ACF9 ; text-align:center;">INFORMACIÓN DE LA HABITACIÓN</h4>
            <h4 style="color: #2DA9D3 ; text-align:center;">{{ $habitaciones->type }}</h4>
              <table class="table table-responsive-xl">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th> <a href="/bedrooms/create">Nueva Habitación<br></a> </th>
                    <th> <a href="/Buscar_Habitacion">Editar Habitación</a> </th>
                    <th> <a href="/Mostrar_Habitacion">Mostrar Habitación</a> </th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="table-wrap">
              <table class="table table-responsive-xl">
                <thead>
                  <tr>
                    <th> ID </th>
                    <th> ID del Hotel </th>
                    <th> Tipo </th> 
                    <th> Descripcion </th>
                    <th> Adicionales </th>
                    <th> Capacidad </th>
                    <th> Precio </th>
                    <th> Disponibles </th>
                    <th> Estatus </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="alert" role="alert">
                    <td> {{ $habitaciones->id }} </td>
                    <td> {{ $habitaciones->hotel_id }} </td>
                    <td> {{ $habitaciones->type }} </td>
                    <td> {{ $habitaciones->description }} </td>
                    <td> {{ $habitaciones->additional }} </td>
                    <td> {{ $habitaciones->capacity }} </td>
                    <td> {{ $habitaciones->price }} </td>
                    <td> {{ $habitaciones->available }} </td>
                    <td> {{ $habitaciones->status }} </td>
                  </tr>
                </tbody>
              </table>
              @else
                <p> No se ha encontrado la habitación </p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>

  </body>
    
  <!-- Footer -->
  @include('secciones.footer')
    
</html>