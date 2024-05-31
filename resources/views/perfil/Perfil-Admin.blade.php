<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>admin</title>
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
  
  @if($admin != null)
  <div class="container bootstrap snippet">
    
    <div class="row">
      <div class="col-sm-3"><!--left col-->
      
        <div class="text-center">
          </br>
          <div class="col-sm-10"><h4>{{($admin == null) ?'': $admin->user_name}}</h4></div>
          <img src="../img/usuarios/{{($admin == null) ?'': $admin->user_image}}" class="avatar img-circle img-thumbnail" alt="avatar">
        </div></hr><br>
        
      </div><!--/col-3-->
      <div class="col-sm-9">
        <div class="tab-content">
          <div class="tab-pane active" id="home">
          @if(Session::has('notice'))
            <p> <strong> {{ Session::get('notice') }} </strong> </p>
          @endif
            <hr>
            <form class="form" action="/profile_admin/{{$admin->id}}/edit" method="GET" id="registrationForm">
              @csrf
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="email"><h4>Correo Electrónico</h4></label>
                  <input type="email" class="form-control" name="email" id="email" readonly="readonly" value = "{{($admin == null) ?'': $admin->email}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="telephone"><h4>Número de Teléfono</h4></label>
                  <input type="tel" class="form-control" name="telephone" id="phone" readonly="readonly" value = "{{($admin == null) ?'': $admin->telephone}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="name"><h4>Nombre</h4></label>
                  <input type="text" class="form-control" name="name" id="name" readonly="readonly" value = "{{($admin == null) ?'': $admin->name}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="lastname"><h4>Apellido</h4></label>
                  <input type="text" class="form-control" name="lastname" id="lName" readonly="readonly" value = "{{($admin == null) ?'': $admin->lastname}}">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <br>
                  <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Modificar</button>
                </div>
              </div>
          	</form>
          </div>
        </div><!--/tab-content-->
      </div><!--/col-9-->
    </div><!--/row-->
    @else
    <p> No se han encontrado usuarios </p>
    @endif
  </div>
  
  <!-- Footer -->
  @include('secciones.footer')
    
</html>