
<!DOCTYPE html>
<html>
<head>
	
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Plataforma Cursos Online</title>
  <!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
	body{
background: url("images/fondo27.jpg") no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
	</style>
</head>
<body  >
<div class="login-box">
  <div class="login-logo">
   <b style="color: #FFFFFF; text-shadow: -2px -2px 1px #000, 2px 2px 1px #000, -2px 2px 1px #000, 2px -2px 1px #000; font-size: 30px">LOGIN CURSOS ONLINE</b>
	  
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa tus datos para iniciar sesion</p>

    <form action="controller.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="usuario" class="form-control" placeholder="Usuario" pattern="[A-Za-z0-9_-$/ ]{1,15}" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Contraseña" pattern="[A-Za-z0-9_-$/ ]{1,15}" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row" align="center">
       
        <!-- /.col -->
        <div class="col-xs-4" align="center" style="float:none">
          <button type="submit" class="btn btn-primary btn-block btn-flat" >INICIAR</button>
        </div>
         </form>
         <div class="col-xs-10" align="center" style="float:none">
         </br>
          No estas registrado? - <a href="register.php" > REGISTRATE ACA </a>
          </div>
        <!-- /.col -->
      </div>
   

   
  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>


<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>
	
