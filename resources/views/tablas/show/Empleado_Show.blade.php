<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelAdmin - Empleado</title>
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
        @if($empleados != null)
        <div class="row">
          <div class="col-md-12">
          <div>
            <h4 style="color: #57ACF9 ; text-align:center;">INFORMACIÓN DEL EMPLEADO</h4>
            <h4 style="color: #2DA9D3 ; text-align:center;">{{ $empleados->first_name}} {{ $empleados->first_lastname}}</h4>
              <table class="table table-responsive-xl">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th> <a href="/employees/create">Nuevo Empleado<br></a> </th>
                    <th> <a href="/Buscar_Empleado">Editar Empleado</a> </th>
                    <th> <a href="/employees">Listar Empleados</a> </th>
                  </tr>
                </thead>
              </table>
            </div>
            <div class="table-wrap">
              <table class="table table-responsive-xl">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th> ID </th>
                    <th> ID Cuenta Usuario </th>
                    <th> ID Hotel </th>
                    <th> Primer Nombre </th>
                    <th> Segundo Nombre </th>
                    <th> Primer Apellido </th>
                    <th> Segundo Apellido </th>
                    <th> Dirección </th>
                    <th> Puesto </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="alert" role="alert">
                    <td class="align-items-center">
                      <div class="img" style="background-image: url(../../img/usuarios/{{ $imagenes->user_image }});"></div>
                    </td>
                    <td> {{ $empleados->id }} </td>
                    <td> {{ $empleados->user_id }} </td>
                    <td> {{ $empleados->hotel_id }} </td>
                    <td> {{ $empleados->first_name }} </td>
                    <td> {{ $empleados->second_name }} </td>
                    <td> {{ $empleados->first_lastname }} </td>
                    <td> {{ $empleados->second_lastname }} </td>
                    <td> {{ $empleados->direction }} </td>
                    <td> {{ $empleados->position }} </td>
                  </tr>
                </tbody>
              </table>
              @else
                <p> No se han encontrado empleados </p>
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