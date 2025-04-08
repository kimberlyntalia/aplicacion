<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CarlosAbs | Panel de Control</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="app/vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="app/vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="app/vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="app/vistas/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="app/vistas/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="app/vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="app/vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="app/vistas/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <?php 
  
    //  NAVBAR
    include "modulos/navbar.php"; 
    include "modulos/sidebar.php";
   
    if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "personas" ||
         $_GET["ruta"] == "perfiles" ||
         $_GET["ruta"] == "categorias" ||
         $_GET["ruta"] == "productos"    
      ){
        include "modulos/".$_GET["ruta"].".php";
      }else{
        include "modulos/404.php"; 
      }
    }    
    include "modulos/footer.php"; 
  
  ?>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="app/vistas/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="app/vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="app/vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="app/vistas/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="app/vistas/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="app/vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="app/vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="app/vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="app/vistas/plugins/moment/moment.min.js"></script>
<script src="app/vistas/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="app/vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="app/vistas/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="app/vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="app/vistas/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="app/vistas/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="app/vistas/dist/js/pages/dashboard.js"></script>
</body>
</html>
