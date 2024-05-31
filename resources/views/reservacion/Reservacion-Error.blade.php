<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelWeb - Error!</title>
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

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

  </head>
  
  @php($user = Auth::user())

  <!-- Header -->
  @includeIf('secciones.header')
  
  <!-- bar -->
  @include('secciones.bar')
  
  @php($modo = Session::get('modo'));

  <body>
    <!-- Panel de Acción -->
    <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="/misReservaciones/{{$user->id}}" method="GET" class="well form-horizontal">
                   @csrf
                      <fieldset>
                        </br>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                          @if($modo == 'exito')
                            @if(Session::has('notice'))
                              <h3 style="text-align:center;"><b>OPERACIÓN EXITOSA</b></h3>
                              <p style="color:blue;"> <strong> {{ Session::get('notice') }} </strong> </p>
                            @endif
                          @elseif($modo == 'cancel')
                            @if(Session::has('notice'))
                              <h3 style="text-align:center;"><b>CANCELACIÓN EXITOSA</b></h3>
                              <p style="color:blue;"> <strong> {{ Session::get('notice') }} </strong> </p>
                            @endif
                          @else
                            @if(Session::has('notice'))
                              <h3 style="text-align:center;"><b>AL PARECER EXISTE ALGÚN ERROR</b></h3>
                              <p style="color:red;"> <strong> {{ Session::get('notice') }} </strong> </p>
                              <p> <strong> REVISE NUEVAMENTE SUS RESERVACIONES Y ELIGA ALGUNA VÁLIDA </strong> </p>
                            @endif
                          @endif
                        </div>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                          <h6>ASEGURESE DE EDITAR SOLO AQUELLAS RESERVACIONES QUE SIGUEN EN PROCESO</h6>
                          <h6>SÓLO PUEDEN CANCELARSE AQUELLAS RESERVACIONES QUE SIGUEN EN PROSESO</h6>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                          <button class="u-btn u-btn-submit u-button-style" style="background-color: black;" type="submit" >REGRESAR<br></button>
                        </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>

  </body>
    
    <!-- Footer -->
    @include('secciones.footer')
    
  </body>
</html>