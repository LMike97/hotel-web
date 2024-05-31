<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelWeb - Mis Reservaciones</title>
    <link rel="stylesheet" href="../assets/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../assets/css/Planilla.css" media="screen">
    <link rel="stylesheet" href="../assets/css/style.css">
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

    <!--[if !IE]><!-->
    <style>
    
    /* 
    Max width before this PARTICULAR table gets nasty
    This query will take effect for any screen smaller than 760px
    and also iPads specifically.
    */
    @media 
    only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px)  {
    
      /* Force table to not be like tables anymore */
      table, thead, tbody, th, td, tr { 
        display: block; 
      }
      
      /* Hide table headers (but not display: none;, for accessibility) */
      thead tr { 
        position: absolute;
        top: -9999px;
        left: -9999px;
      }
      
      tr { border: 1px solid #ccc; }
      
      td { 
        /* Behave  like a "row" */
        border: none;
        border-bottom: 1px solid #eee; 
        position: relative;
        padding-left: 50%; 
      }
      
      td:before { 
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 6px;
        left: 6px;
        width: 45%; 
        padding-right: 10px; 
        white-space: nowrap;
      }
    }
    
    /* Smartphones (portrait and landscape) ----------- */
    @media only screen
    and (min-device-width : 320px)
    and (max-device-width : 480px) {
      body { 
        padding: 0; 
        margin: 0; 
        width: 320px; }
      }
    
    /* iPads (portrait and landscape) ----------- */
    @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
      body { 
        width: 495px; 
      }
    }
    
    </style>
    <!--<![endif]-->

  </head>
  
  <!-- Header -->
  @includeIf('secciones.header')
  
  <!-- bar -->
  @include('secciones.bar')


  <body>

    @if($reservaciones != null)
    <div id="page-wrap">

      <table>
        <thead>
        <tr>
          <th style="text-align:center;">Reservacion</th>
          <th style="text-align:center;">Nombre Huesped</th>
          <th style="text-align:center;">Fecha Inicial</th>
          <th style="text-align:center;">Fecha Final</th>
          <th style="text-align:center;">Habitaciones</th>
          <th style="text-align:center;">Teléfono</th>
          <th style="text-align:center;">Email</th>
          <th style="text-align:center;">Costo</th>
          <th style="text-align:center;">Petición Especial</th>
          <th style="text-align:center;">Estatus</th>
        </tr>
        </thead>
        @foreach($reservaciones as $item)
        <tbody>
        <tr>
          <td style="text-align:center;">{{ $item->id }}</td>
          <td style="text-align:center;">{{ $item->guest_name }}</td>
          <td style="text-align:center;">{{ $item->initial_date }}</td>
          <td style="text-align:center;">{{ $item->final_date }}</td>
          <td style="text-align:center;">{{ $item->number_bedrooms }}</td>
          <td style="text-align:center;">{{ $item->telephone }}</td>
          <td style="text-align:center;">{{ $item->email }}</td>
          <td style="text-align:center;">{{ $item->total_price }}</td>
          <td style="text-align:center;">{{ $item->special_petition }}</td>
          @if($item->status == 'Process')
          <td style="text-align:center; color: green;">{{ $item->status }}</td>
          @elseif($item->status == 'Cancel')
          <td style="text-align:center; color: red;">{{ $item->status }}</td>
          @elseif($item->status == 'Paid')
          <td style="text-align:center; color: blue;">{{ $item->status }}</td>
          @endif
        </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <!-- Panel de Acción -->
    <div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="/edit-reservation" method="GET" class="well form-horizontal">
                   @csrf
                      <fieldset>
                        <h3 style="text-align:center;"><b>Editar</b></h3>
                        </br>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Editar Reservación</label>
                            <div class="col-md-8 inputGroupContainer">
                               <input id="ID_Reserve" name="ID" placeholder="Ingrese el número de reservación" class="form-control" pattern="[1-9]{1}[0-9]*" required="true" value="" type="text">
                            </div>
                         </div>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                          <h6>ASEGURESE DE EDITAR SOLO AQUELLAS RESERVACIONES QUE SIGUEN EN PROCESO</h6>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                          <button class="u-btn u-btn-submit u-button-style" style="background-color: green;" type="submit">EDITAR<br></button>
                          <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                      </fieldset>
                   </form>
                </td>
                <td colspan="1">
                   <form action="/cancel-reservation" method="GET" class="well form-horizontal">
                   @csrf
                      <fieldset>
                      <h3 style="text-align:center;"><b>Cancelar</b></h3>
                        </br>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Cancelar Reservación</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon" style="max-width: 100%;"></span><input id="ID_Reserve" name="ID" placeholder="Ingrese el número de reservación" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                        <h6>SÓLO PUEDEN CANCELARSE AQUELLAS RESERVACIONES QUE SIGUEN EN PROSESO</h6>
                      </div>
                      <div class="u-align-center u-form-group u-form-submit u-form-group-9">
                        <button class="u-btn u-btn-submit u-button-style" style="color:white; background-color:red;" type="submit">CACELAR<br></button>
                      </div>
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>

    @endif

  </body>
  
  
  <!-- Footer -->
  @include('secciones.footer')
  
</html>