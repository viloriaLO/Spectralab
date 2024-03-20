<?php

$servidor = "localhost";
$nombreusuario = "spectral_root";
$password = "zavala12";
$database = "spectral_inicio";
$charset = "utf8";
$conexion = new mysqli($servidor, $nombreusuario, $password, $database);
if ($conexion->connect_error) {
  die("Conexion fallida: " . $conexion->connect_error);
}
if (isset($_POST['nombre']) & isset($_POST['apellidos']) & isset($_POST['empresa']) & isset($_POST['area']) & isset($_POST['puesto']) & isset($_POST['email']) & isset($_POST['telefono']) & isset($_POST['mensaje'])){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $empresa = $_POST['empresa'];
  $area = $_POST['area'];
  $puesto = $_POST['puesto'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];
  $sql = "INSERT INTO usuarios (nombre, apellidos, empresa, area, puesto, email, telefono, mensaje) VALUES('$nombre', '$apellidos', '$empresa', '$area', '$puesto', '$email', '$telefono', '$mensaje')";
  if ($conexion->query($sql) === true) {
    echo("Se agrego contacto en caso de aceptar los terminos de privacidad o se denego el registro si no acepto los terminos");
  }
  else {
    die("Error al registrarse" . $conexion->error);
  }
}



 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Spectralab</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="images/spec.ico">
        <meta name="keywords" content="Disoluciones, Equipo de Distek,2500 distek,2500 Select Distek">
        <meta name="author" content="Spectralab">
    
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Courgette|EB+Garamond|Lobster|Manjari|Oleo+Script&display=swap" rel="stylesheet">
    
    
    
        
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
        <link rel="stylesheet" href="css/font-awesome.min.css">
    
        <link rel="stylesheet" href="css/aos.css">
    
        <link rel="stylesheet" href="css/style.css">
        
      </head>
<body style="background: url(images/fondo_log.png) ;">
    <div class="ss">
        <button><a href="index.html"> <h2><strong><i class="fa fa-home fa-3x"></i>  El procedimiento se hizo correctamenten toca el boton para regresar al inicio</a> </strong></h2></button>
    </div>
</body>
</html>
