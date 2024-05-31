<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>HotelWeb - Editar Reservación</title>
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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  </head>

  <!-- Header -->
  @includeIf('secciones.header')

  <!-- bar -->
  @include('secciones.bar')

  @php($reservacion = null)
    @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($reservacion = Session::get('reservacion'))
        @endif
      @endif
    @endif
  
  @if($reservacion != null)
  <div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-3"><!--left col-->
     </br>
      <h5 style="color:red;">Aviso:</h5>
      <p>Para adquirir más habitaciones, debe cancelar esta reservación y crear una nueva o crear una nueva añadiendo quellas habitaciones
        restantes. Los cambios que realice en esta reservación estarán sujetos a disposición, para más invormación comuniquese a nuestras líneas de contactos
        en la página "Contactános".
      </p>
      </div><!--/col-3-->
      <div class="col-sm-9">
        <div class="tab-content">
          <div class="tab-pane active" id="home">
          <label for="user_name"><h4>Menú de Edición</h4></label>
            <hr>
              <form class="form" action="/client_reservations/{{$reservacion->id}}" method="POST" id="registrationForm">
              @csrf
              @if($modo == 'editar')
                @method('PUT')
              @endif
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="guest_name"><h4>Nombre Completo del Huesped</h4></label>
                  <input type="text" class="form-control" name="guest_name" id="gName" placeholder="Ingrese el nombre completo del huesped" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" minlength="8" maxlength="45" value = "{{($reservacion == null) ?'': $reservacion->guest_name}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="initial_date"><h4>Fecha Inicial</h4></label>
                  <input type="date" placeholder="MM/DD/YYYY" id="iDAte" name="initial_date" class="form-control" value = "{{($reservacion == null) ?'': $reservacion->initial_date}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="final_date"><h4>Fecha Final</h4></label>
                  <input type="date" placeholder="MM/DD/YYYY" id="fDate" name="final_date" class="form-control" value = "{{($reservacion == null) ?'': $reservacion->final_date}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="telephone"><h4>Número Telefónico</h4></label>
                  <input type="tel" placeholder="Teléfono del huesped (e.j. 33-3540-3020)" id="phone" name="telephone" class="form-control" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" value = "{{($reservacion == null) ?'': $reservacion->telephone}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="email"><h4>Correo Electrónico</h4></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico del Cliente" value = "{{($reservacion == null) ?'': $reservacion->email}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="special_petition"><h4>Peticiones Especiales del Huesped</h4></label>
                  <textarea placeholder="Peticiones Especiales (opcional)" rows="4" cols="50" id="sPetition" name="special_petition" class="form-control">{{($reservacion == null) ?'': $reservacion->special_petition}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <br>
                  <button class="btn btn-lg btn-success" type="submit">Guardar</button>
                  <button class="btn btn-lg" href="/profile_client/{{$reservacion->id}}"><i class="glyphicon glyphicon-repeat"></i>Cancelar</button>
                </div>
              </div>
          	</form>
          </div>
        </div><!--/tab-content-->
      </div><!--/col-9-->
    </div><!--/row-->
    @else
    <p>No se ha encontrado ninguna reservación</p>
    @endif
  </div>
  
  <!-- Footer -->
  @include('secciones.footer')
    
</html>