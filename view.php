<?php
session_start();
require_once("class/autoload.php");// BUSCA LA CLASE NECESARIA

// VALIDA LA SESSION QUE SE CREO EN EL LOGIN
if (!empty($_SESSION['id']))
{
	//$opl=$_SESSION['opl'];
?>
<!DOCTYPE html>
<html>
<head>
	
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="Mime-Type; charset=UTF-8"/>
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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	
	<!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	
	<script src="calendar/src/js/jscal2.js"></script>
<script src="calendar/src/js/lang/en.js"></script>
    <link rel="stylesheet" type="text/css" href="calendar/src/css/jscal2.css" />
    <link rel="stylesheet" type="text/css" href="calendar/src/css/border-radius.css" />
    <link rel="stylesheet" type="text/css" href="calendar/src/css/steel/steel.css" />   
	
	<!-- Our CSS stylesheet file -->
<script type="text/javascript" src="dist/js/jquery-latest.min.js"></script>

</head>
<body class="hold-transition skin-purple sidebar-mini">

	  
<div class="wrapper"> 

  <header class="main-header"> 
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>CO</b></span>
      <!-- logo for regular state and mobile devices -->
    <!--  <span class="logo-lg"><b>PSG</b>System</span>-->
		<span class="logo-lg">Cursos Online</span>
  </a> 
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> 
        <span class="sr-only">Toggle navigation</span>
      </a>
		<form action="vista_busca.php" method="post">
		

		</form>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
			
			
          <li class="dropdown user user-menu">
            
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
             
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
                </div>
                <div class="pull-right">
                  
                </div>
              </li>
            </ul>
          </li>
       
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
      
        </div>
        
      </div>
   
		
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU OPCIONES</li>
        
		 <li class="active treeview">
          
            <i class="fa fa-folder"></i> <span>Cursos Online</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          
           <ul class="treeview-menu">
            <li  class="active"><a href="dashboard.php"><i class="fa fa-circle-o"></i>Administrar Cursos</a></li>
			 <li   ><a href="creation.php"><i class="fa fa-circle-o"></i>Crear Cursos</a></li>
			 
	 	
          </ul>
        </li>
        <li class="active treeview">
          
            <i class="fa fa-folder"></i> <span>Cerrar sesion</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
         
           <ul class="treeview-menu">
            <li class="active" ><a href="course/logout.php" onClick="return confirm('Desea cerrar Sesion?');"><i class="fa fa-circle-o"></i>Salir</a></li>
             
    
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

		
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
	<div class="box box-default">
        <div class="box-header with-border">

<h2 style="margin-top:9px;  font-weight:bold; " align="left">VISTA DETALLE </h2>
		
		 


</div>

</div>
	  
   
           <!-- Main content -->
    
    <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
            <th style="background-color:#666666; color:#FFFFFF" >Titulo</th>
            <th style="background-color:#666666; color:#FFFFFF">Descripcion</th>
            <th style="background-color:#666666; color:#FFFFFF">disponibilidad</th>
            <th style="background-color:#666666; color:#FFFFFF">Creador</th>
              
     </tr>
         
  <tr>

       <?php
//ESTA ES LA VISTA DETALLADA DEL CURSO SELECCIONADO , OBTIENE EL CURSO A TRAVES DEL GET Y ENTREGA LA INFORMACION EN ESPERA DE UNA ACCION
  $titulo=$_GET['var1'];
 //echo $titulo;

 $objCurso = new Cursos();
$sel = $objCurso->getCurso($titulo);

foreach($sel as $reg){
  $tit=$reg['titulo'];
  $crea=$reg['creador'];
  

    ?>
    <td ><?php echo $reg['titulo'];?></td>
      <td ><?php echo $reg['descripcion'];?></td>
      <td ><?php echo $reg['estado'];?></td>
      <td ><?php echo $reg['creador'];?></td>
      
   </tr>
     <?php
    
    }
    ?>
    
   
  
    
              </table>
            </div>
          </br ></br >
    <div class="col-xs-4" align="center" >
          <a href="edit.php?var1=<?php echo $tit ?>" > <button  class="btn btn-warning btn-block btn-flat" >MODIFICAR CURSO</button></a>
          
        </div>
</br ></br >
<div class="col-xs-4" align="center" >
           <a href="course/delete.php?var1=<?php echo $tit ?>" onClick="return confirm('Desea eliminar el curso?');"> <button  class="btn btn-danger btn-block btn-flat"  >BORRAR CURSO</button></a>
          
        </div>
       
         
            <!-- /.box-body -->
         
      </div>
        
    </section>
    <!-- /.content -->

 </div>
  <!-- /.content-wrapper --> 


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>
	<script src="bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.es.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
	

<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


	
</body>
</html>
<?php
}else{
?>
   <script>
		window.location.href="index.php";
	alert("No autorizado, debe iniciar sesión");
</script> 
<?php }?>	
	
