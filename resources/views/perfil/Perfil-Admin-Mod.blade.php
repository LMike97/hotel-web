<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-MX">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Modificar admin</title>
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

  @php($user = Auth::user())

  @php($admin = null)
  @if($modo = Session::get('modo'))
      @if($modo == 'editar')
        @if($admin = Session::get('admin'))
        @endif
      @endif
    @endif

  @if($admin != null)
  <div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-3"><!--left col-->
      <form class="form" action="/profile_admin{{($admin == null) ?'': "/$admin->id"}}" method="POST" enctype="multipart/form-data" id="registrationForm">
        @csrf
        @if($modo == 'editar')
          @method('PUT')
        @endif
        <div class="text-center">
          </br>
          <div class="col-sm-10"><h4>{{($admin == null) ?'': $admin->user_name}}</h4></div>
          <img id='picture' src="../../img/usuarios/{{($admin == null) ?'': $admin->user_image}}" class="avatar img-circle img-thumbnail" alt="avatar">
          <div class="custom-file">
            <input type="file" id='file' name="file" class="custom-file-input" lang="es" accept="image/png, .jpeg, .jpg, image/gif, svg, webp">
            <label class="custom-file-label" for="customFileLang" Style="text-align:left; padding-left: 50px;">Seleccionar</label>
          </div>
        </div></hr><br>
        
      </div><!--/col-3-->
      <div class="col-sm-9">
        <div class="tab-content">
          <div class="tab-pane active" id="home">
          <label for="user_name"><h4>Menú de Edición</h4></label>
            <hr>
            <div class="form-group">
                <div class="col-xs-6">
                  <label for="user_name"><h4>Nombre de Usuario</h4></label>
                  <input type="text" class="form-control" name="user_name" id="uName" placeholder="Ingrese un nombre de usuario" pattern="^[A-ZÁÉÍÓÚ]{1}[a-zA-ZÁÉÍÓÚñáéíóú0-9_'-.@#$|]+( [a-zA-ZÁÉÍÓÚñáéíóú0-9_'-.@#$|]+)*$" minlength="4" maxlength="50" value = "{{($admin == null) ?'': $admin->user_name}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="telephone"><h4>Número de Teléfono</h4></label>
                  <input type="tel" class="form-control" name="telephone" id="phone" placeholder="Ingrese su número de teléfono (e.j. 33-3540-3020)" pattern="[0-9]{2}-?[0-9]{4}-?[0-9]{4}" value = "{{($admin == null) ?'': $admin->telephone}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="name"><h4>Nombre</h4></label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su primer nombre" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($admin == null) ?'': $admin->name}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="lastname"><h4>Apellido</h4></label>
                  <input type="text" class="form-control" name="lastname" id="lName" placeholder="Ingrese su segundo nombre (si posee uno)" pattern="[A-ZÁÉÍÓÚ]{1}[a-zñáéíóú][^0-9_!¡?÷?¿/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}" maxlength="25" value = "{{($admin == null) ?'': $admin->lastname}}" required="">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-12">
                  <br>
                  <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Guardar</button>
                  <button class="btn btn-lg" href="/profile_admin/{{$admin->id}}"><i class="glyphicon glyphicon-repeat"></i>Cancelar</button>
                </div>
              </div>
          	</form>
          </div>
        </div><!--/tab-content-->
      </div><!--/col-9-->
    </div><!--/row-->
    @else
    <meta http-equiv="refresh" content="0; url=/profile_admin/{{$user->id}}/edit">
    @endif
    <script src="../../assets/js/images.js"></script>
  </div>

    <!-- Footer -->
    @include('secciones.footer')

</html>