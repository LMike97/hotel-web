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
        @if($cuenta != null)
        <div class="row">
          <div class="col-md-12">
          <div>
            <h4 style="color: #57ACF9 ; text-align:center;">INFORMACIÓN DEL USUARIO</h4>
            <h4 style="color: #2DA9D3 ; text-align:center;">{{ $cuenta->user_name}}</h4>
              <table class="table table-responsive-xl">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th> <a href="/admin_account/create">Nuevo Usuario<br></a> </th>
                    <th> <a href="/Buscar_Usuario">Editar Usuario</a> </th>
                    <th> <a href="/admin_account">Listar Usuarios</a> </th>
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
                    <th> Nombre Usuario </th>
                    <th> Email </th> 
                    <th> Contraseña (Encriptada) </th>
                    <th> Teléfono </th>
                    <th> Imagen (Nombre) </th>
                    <th> Tipo </th>
                    <th> Nombre </th>
                    <th> Apellido </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="alert" role="alert">
                    <td class="align-items-center">
                      <div class="img" style="background-image: url(../../img/usuarios/{{ $cuenta->user_image }});"></div>
                    </td>
                    <td> {{ $cuenta->id }} </td>
                    <td> {{ $cuenta->user_name }} </td>
                    <td> {{ $cuenta->email }} </td>
                    <td> {{ $cuenta->password }} </td>
                    <td> {{ $cuenta->telephone }} </td>
                    <td> {{ $cuenta->user_image }} </td>
                    <td> {{ $cuenta->type }} </td>
                    <td> {{ $cuenta->name }} </td>
                    <td> {{ $cuenta->lastname }} </td>
                  </tr>
                </tbody>
              </table>
              @else
                <p> No se han encontrado usuarios </p>
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