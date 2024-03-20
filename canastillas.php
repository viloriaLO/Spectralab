<!DOCTYPE html>
<html lang="en">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="jspdf.min.js"></script>
    <script type="text/javascript" src="html2canvas.js"></script>
    <script type="text/javascript" >
    function genPDF(){
      html2canvas(document.getElementById("about-section"),{
        
        onrendered: function (canvas){

          var img = canvas.toDataURL("image/png");
          if(screen.width == 1920)
            var doc = new jsPDF( 'p','mm', [1500,1320]);
          else
            if(screen.width < 1282)
              var doc = new jsPDF( 'p','mm', [1300,1000]);
            else
              var doc = new jsPDF( 'p','mm', [1300,1000]);
          doc.addImage(img, "JPEG",0,0);
          doc.save('canastillas.pdf');
        }
      });
    }
    function genPDF2(){
      html2canvas(document.getElementById("about-section2"),{
        
        onrendered: function (canvas){

          var img = canvas.toDataURL("image/png");
          if(screen.width == 1920)
            var doc = new jsPDF( 'p','mm', [1500,1320]);
          else
            if(screen.width < 1282)
              var doc = new jsPDF( 'p','mm', [1300,1000]);
            else
              var doc = new jsPDF( 'p','mm', [1300,1000]);
          doc.addImage(img, "JPEG",0,0);
          doc.save('paletas.pdf');
        }
      });
    }
    </script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-4 col-xl-2">
            <a class="navbar-brand" href="#home-section">
                <div class="imagen">
    <img src="images/logo-trans.png" width="340" height="80">
    </div>
  </a>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html#home-section" class="nav-link">Inicio</a></li>
                <li><a href="index.html#about-section" class="nav-link">Conocenos</a></li>
                <li><a href="index.html#team-section" class="nav-link">Equipos</a></li>
                <li><a href="index.html#services-section" class="nav-link">Servicios</a></li>
                <li><a href="index.html#contact-section" class="nav-link">Contacto</a></li>
                <li><a href="index.html#cursos" class="nav-link">Cursos</a></li>
                <li><a href="catalogo.html" class="nav-link">Catalogo</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <div class="espacio" style="height: 150px; background: #0f0b4d;"></div>

    <?php

$servidor = 'localhost';
$nombreusuario = 'spectral_root';
$password = 'zavala12';
$database = 'spectral_inicio';
$charset = 'utf8';
$conexion = new mysqli($servidor, $nombreusuario, $password, $database);
if ($conexion->connect_error) {
  die("Conexion fallida: " . $conexion->connect_error);
}

if (isset($_POST['empresa']) & isset($_POST['numero_serie']) & isset($_POST['id_dis']) & isset($_POST['area']) & isset($_POST['canastilla1']) & isset($_POST['canastilla2']) & isset($_POST['canastilla3']) & isset($_POST['canastilla4']) & isset($_POST['canastilla5']) & isset($_POST['canastilla6']) & isset($_POST['std_pa']) & isset($_POST['std_ca']) & isset($_POST['peso']) & isset($_POST['paleta1']) & isset($_POST['paleta2']) & isset($_POST['paleta3']) & isset($_POST['paleta4']) & isset($_POST['paleta5']) & isset($_POST['paleta6'])){
  $canastilla1 = $_POST['canastilla1'];
  $canastilla2 = $_POST['canastilla2'];
  $canastilla3 = $_POST['canastilla3'];
  $canastilla4 = $_POST['canastilla4'];
  $canastilla5 = $_POST['canastilla5'];
  $canastilla6 = $_POST['canastilla6'];
  $paleta1 = $_POST['paleta1'];
  $paleta2 = $_POST['paleta2'];
  $paleta3 = $_POST['paleta3'];
  $paleta4 = $_POST['paleta4'];
  $paleta5 = $_POST['paleta5'];
  $paleta6 = $_POST['paleta6'];
  $std_pa = $_POST['std_pa'];
  $std_ca = $_POST['std_ca'];
  $empresa = $_POST['empresa'];
  $numero_serie = $_POST['numero_serie'];
  $id_dis = $_POST['id_dis'];
  $area = $_POST['area'];
  $peso = $_POST['peso'];
 
  // Promedio de los estandares de canastillas
  
  // % DIS
  // Vaso 1
  $vc1= round(($canastilla1/$std_ca)*$peso*4.98);
  // Vaso 2
  $vc2= round(($canastilla2/$std_ca)*$peso*4.98);
  // Vaso 3
  $vc3= round(($canastilla3/$std_ca)*$peso*4.98);
  // Vaso 4
  $vc4= round(($canastilla4/$std_ca)*$peso*4.98);
  // Vaso 5
  $vc5= round(($canastilla5/$std_ca)*$peso*4.98);
  // Vaso 6
  $vc6= round(($canastilla6/$std_ca)*$peso*4.98);
  //El valor maximo de los vasos
  $num_max_ca= max ($vc1,$vc2,$vc3,$vc4,$vc5,$vc6);
  // Media geometrica 
  $media_geo_ca =round(pow($vc1*$vc2*$vc3*$vc4*$vc5*$vc6,1/6));
  // LN de % DIS vaso
  $lnvc1= round(log($vc1),4);
  $lnvc2= round(log($vc2),4);
  $lnvc3= round(log($vc3),4);
  $lnvc4= round(log($vc4),4);
  $lnvc5= round(log($vc5),4);
  $lnvc6= round(log($vc6),4);
  

  // Suma de los logaritmos
  $prom_ln_ca= ($lnvc1+$lnvc2+$lnvc3+$lnvc4+$lnvc5+$lnvc6)/6;
  $varianza_ca = (pow(($lnvc1-$prom_ln_ca), 2)+pow(($lnvc2-$prom_ln_ca), 2)+pow(($lnvc3-$prom_ln_ca), 2)+pow(($lnvc4-$prom_ln_ca), 2)+pow(($lnvc5-$prom_ln_ca), 2)+pow(($lnvc6-$prom_ln_ca), 2))/6;
  // Exp
  $exp_ca = exp($varianza_ca);
  // la raiz
  $sqrt_ca= sqrt(($exp_ca)-1);
  // Resulado
  $R_ca= round(100*$sqrt_ca,1);

   // % DIS paletas
  // Vaso 1
  $vp1= round(($paleta1/$std_pa)*$peso*2.49);
  // Vaso 2
  $vp2= round(($paleta2/$std_pa)*$peso*2.49);
  // Vaso 3
  $vp3= round(($paleta3/$std_pa)*$peso*2.49);
  // Vaso 4
  $vp4= round(($paleta4/$std_pa)*$peso*2.49);
  // Vaso 5
  $vp5= round(($paleta5/$std_pa)*$peso*2.49);
  // Vaso 6
  $vp6= round(($paleta6/$std_pa)*$peso*2.49);
  //El valor maximo de los vasos
  $num_max_pa= max ($vp1,$vp2,$vp3,$vp4,$vp5,$vp6);
  // Media geometrica 
  $media_geo_pa =round(pow($vp1*$vp2*$vp3*$vp4*$vp5*$vp6,1/6));
  // LN de % DIS vaso
  $lnvp1= round(log($vp1),4);
  $lnvp2= round(log($vp2),4);
  $lnvp3= round(log($vp3),4);
  $lnvp4= round(log($vp4),4);
  $lnvp5= round(log($vp5),4);
  $lnvp6= round(log($vp6),4);

  // Suma de los logaritmos
  $prom_ln_pa= ($lnvp1+$lnvp2+$lnvp3+$lnvp4+$lnvp5+$lnvp6)/6;
  $varianza_pa = (pow(($lnvp1-$prom_ln_pa), 2)+pow(($lnvp2-$prom_ln_pa), 2)+pow(($lnvp3-$prom_ln_pa), 2)+pow(($lnvp4-$prom_ln_pa), 2)+pow(($lnvp5-$prom_ln_pa), 2)+pow(($lnvp6-$prom_ln_pa), 2))/6;
  // Exp
  $exp_pa = exp($varianza_pa);
  // la raiz
  $sqrt_pa= sqrt(($exp_pa)-1);
  // Resulado
  $R_pa= round(100*$sqrt_pa,1);


  $sql = "INSERT INTO ca_pa(empresa, numero_serie, id_dis, area, std_pa, std_ca, paleta1, paleta2, paleta3, paleta4, paleta5, paleta6,canastilla1, canastilla2, canastilla3, canastilla4, canastilla5, canastilla6, peso) VALUES('$empresa', '$numero_serie', '$id_dis', '$area', '$std_pa','$std_ca', '$paleta1', '$paleta2', '$paleta3', '$paleta4', '$paleta5', '$paleta6','$canastilla1', '$canastilla2', '$canastilla3', '$canastilla4', '$canastilla5', '$canastilla6', '$peso')";
  
  if ($conexion->query($sql) === true) {
    
  }
  else {
    die("Error al registrarse" . $conexion->error);
  }
}



 ?>


<br><br><br>
<center>

    <section class="collection py-lg-4 py-md-3 py-sm-3 py-3" id="about-section">
            <div class="titulo-pvt" >
              
                <h2 style="color: #e81050; font-weight: bold;"><font face="Century Gothic, Arial">Resultado de su prueba de canastillas</font></h2>
              
            </div>
            <br>
          

          <!-- row -->
          <font face="Century Gothic, Arial">
          <center>
          <div class="tabla-pvt" style="display: inline-block;">
          <div class="tabla1" style="display: inline-block;" style="width: 900px;">

          <h3>Empresa: <?php echo($empresa) ?></h3>
          <h3>Numero de Serie de Disolutor: <?php echo($numero_serie) ?></h3>
          <h3>Numero de Identificación; <?php echo($id_dis) ?></h3>
          <h3>Area: <?php echo($area) ?> </h3>
          
          <table class="table" style="border-radius: 30px;" data-aos="fade-up-right" data-aos-delay="500" >
              <thead style="background: #0f0b4d; color:white; border-radius: 20px;">
              <tr style="font-size: 25px;">
                  <th scope="col">#</th>
                  <th scope="col">STD canastillas</th>
                  <th scope="col">Absorbancias</th>
                  <th scope="col">% DIS VASO</th>
                </tr>
              </thead>
              <tbody>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">1</th>
                  <td><?php echo($std_ca) ?></td>
                  <td><?php echo($canastilla1) ?></td>
                  <td><?php echo($vc1) ?></td>
                  
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">2</th>
                  <td><?php echo($std_ca) ?></td>
                  <td><?php echo($canastilla2) ?></td>
                  <td><?php echo($vc2) ?></td>
                  
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">3</th>
                  <td><?php echo($std_ca) ?></td>
                  <td><?php echo($canastilla3) ?></td>
                  <td><?php echo($vc3) ?></td>
                  
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">4</th>
                  <td><?php echo($std_ca) ?></td>
                  <td><?php echo($canastilla4) ?></td>
                  <td><?php echo($vc4) ?></td>
                  
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">5</th>
                  <td><?php echo($std_ca) ?></td>
                  <td><?php echo($canastilla5) ?></td>
                  <td><?php echo($vc5) ?></td>
                  
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">6</th>
                  <td><?php echo($std_ca) ?></td>
                  <td><?php echo($canastilla6) ?></td>
                  <td><?php echo($vc6) ?></td>
                  
                </tr>
              </tbody>
            </table>
            </div>
            
            <br>
           
            <div class="tabla2" style="display: inline-block;">
            <table  class="table">
              <thead  style="background: #0f0b4d; color:white; border-radius: 20px;">
              <tr style="font-size: 25px;">
                  <th scope="col" >Media Geometrica</th>
                  <th scope="col" >% Coeficiente de Variación</th>
                  <th scope="col" >Peso Estandar</th>
                </tr>
              </thead>
              <tbody>
                <tr style="color:black; font-size: 20px;">
                  <td scope="row"><?php echo($media_geo_ca) ?></td>
                  <td><?php echo($R_ca) ?></td>
                  <td><?php echo($peso) ?></td>
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">
                    <?php if($media_geo_ca<=82): ?>
                      <p style="color: green;">CUMPLE</p>
                    <?php elseif($media_geo_ca>=82): ?>
                      <p style="color: red;">NO CUMPLE</p>
                    <?php endif; ?>
                  </th>
                  <th scope="row">
                    <?php if($R_ca<=8.5): ?>
                      <p style="color: green;">CUMPLE</p>
                    <?php elseif($R_ca>=8.5): ?>
                      <p style="color: red;">NO CUMPLE</p>
                    <?php endif; ?>
                  </th>
                  <th scope="row">
                    Unidad en mg
                  </th>
                </tr> 
          </tbody>
              
        </table>

        </div>
        
        </div>

        </center>

        
        <br>
        
        <center>
        <div style="width: 70%;">
          <canvas id="grafica" width: 100; height: 100px;></canvas>
        </div>                    
        <br>
        <br>
        <br>
        <br>
  
        
        <br>
        <div  style="letter-spacing: 8px; text-align: center
    color: black; display: inline-block; font-size: 22px;"> Hecho por Spectralabmx.com Folio:<?php echo(mysqli_insert_id($conexion)) ?> </div>
    </center>
    </font>
        <center>
          <br>
        <img src="images/spec.png" style="width: 20; height: 100px;">
        <img src="images/gamp5.png" style="width: 30; height: 100px;">
                    </center>
 
      </section>
                     
        <center>
      <a href="javascript:genPDF()"><button type="button" class="btn btn-lg btn-outline-danger"><span class="text-primary icon-lab"></span> Generar PDF</button></a>
                    </center>
                    <br><br>
</center>



<center>

    <section class="collection py-lg-4 py-md-3 py-sm-3 py-3" id="about-section2">
            <div class="titulo-pvt" >
              
                <h2 style="color: #e81050; font-weight: bold;"><font face="Century Gothic, Arial">Resultado de su prueba de Paletas</font></h2>
              
            </div>
            <br>
          

          <!-- row -->
          <font face="Century Gothic, Arial">
          <center>
          <div class="tabla-pvt" style="display: inline-block;">
          <div class="tabla1" style="display: inline-block;" style="width: 900px;">
          <table class="table" style="border-radius: 30px;" data-aos="fade-up-right" data-aos-delay="500" >
              <thead style="background: #0f0b4d; color:white; border-radius: 20px;">
              <tr style="font-size: 25px;">
                  <th scope="col">#</th>
                  <th scope="col">STD Paletas</th>
                  <th scope="col">Absorbancias</th>
                  <th scope="col">% DIS VASO</th>
                </tr>
              </thead>
              <tbody>
                <tr style="color:black; font-size: 20px;">
                <th scope="row">1</th>
                  <td><?php echo($std_pa) ?></td>
                  <td><?php echo($paleta1) ?></td>
                  <td><?php echo($vp1) ?></td>
                  
                </tr>
                <tr style="color:black;">
                  <th scope="row">2</th>
                  <td><?php echo($std_pa) ?></td>
                  <td><?php echo($paleta2) ?></td>
                  <td><?php echo($vp2) ?></td>
                  
                </tr>
                <tr style="color:black;">
                  <th scope="row">3</th>
                  <td><?php echo($std_pa) ?></td>
                  <td><?php echo($paleta3) ?></td>
                  <td><?php echo($vp3) ?></td>
                  
                </tr>
                <tr style="color:black;">
                  <th scope="row">4</th>
                  <td><?php echo($std_pa) ?></td>
                  <td><?php echo($paleta4) ?></td>
                  <td><?php echo($vp4) ?></td>
                  
                </tr>
                <tr style="color:black;">
                  <th scope="row">5</th>
                  <td><?php echo($std_pa) ?></td>
                  <td><?php echo($paleta5) ?></td>
                  <td><?php echo($vp5) ?></td>
                  
                </tr>
                <tr style="color:black;">
                  <th scope="row">6</th>
                  <td><?php echo($std_pa) ?></td>
                  <td><?php echo($paleta6) ?></td>
                  <td><?php echo($vp6) ?></td>
                  
                </tr>
              </tbody>
            </table>
            </div>
            
            <br>
           
            <div class="tabla2" style="display: inline-block;">
            <table  class="table">
              <thead  style="background: #0f0b4d; color:white; border-radius: 20px;">
              <tr style="font-size: 25px;">
                  <th scope="col" >Media Geometrica</th>
                  <th scope="col" >% Coeficiente de Variación</th>
                  <th scope="col" >Peso Estandar</th>
                </tr>
              </thead>
              <tbody>
                <tr style="color:black; font-size: 20px;">
                <td scope="row"><?php echo($media_geo_pa) ?></td>
                  <td><?php echo($R_pa) ?></td>
                  <td>16.00</td>
                </tr>
                <tr style="color:black; font-size: 20px;">
                  <th scope="row">
                  <?php if($media_geo_pa<=82): ?>
                      <p style="color: green;">CUMPLE</p>
                    <?php elseif($media_geo_pa>=82): ?>
                      <p style="color: red;">NO CUMPLE</p>
                    <?php endif; ?>
                  </th>
                  <th scope="row">
                  <?php if($R_pa<=8.5): ?>
                      <p style="color: green;">CUMPLE</p>
                    <?php elseif($R_pa>=8.5): ?>
                      <p style="color: red;">NO CUMPLE</p>
                    <?php endif; ?>
                  </th>
                  <th scope="row">
                    Unidad en mg
                  </th>
                </tr> 
          </tbody>
              
        </table>

        </div>
        
        </div>

        </center>

        
        <br>
        
        <center>
        <div style="width: 70%;">
          <canvas id="grafica2" width: 100; height: 100px;></canvas>
        </div>
                    
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class = "main" style="display: inline-block;"> 
            <p style="display: inline-block; margin-left:10px;  border-top: 2px solid black; font-size: 25px; color: black; letter-spacing: 3px;"><font face="Century Gothic, Arial"> Elaboro </font></p> 
            <p style="display: inline-block; margin-left: 250px; border-top: 2px solid black; font-size: 25px; color: black; letter-spacing: 3px;"> Fecha</p> 
            <p style="display: inline-block; margin-left: 250px; border-top: 2px solid black; font-size: 25px; color: black; letter-spacing: 3px;">Firma </p> 
        </div> 
        <br>
        <div  style="letter-spacing: 8px; text-align: center
    color: black; display: inline-block; font-size: 22px;"> Hecho por Spectralabmx.com Folio:<?php echo(mysqli_insert_id($conexion)) ?> </div>
    </center>
    </font>
        <center>
          <br>
        <img src="images/spec.png" style="width: 20; height: 100px;">
        <img src="images/gamp5.png" style="width: 30; height: 100px;">
                    </center>
 
      </section>
                     
        <center>
      <a href="javascript:genPDF2()"><button type="button" class="btn btn-lg btn-outline-danger"><span class="text-primary icon-lab"></span> Generar PDF</button></a>
                    </center>
                    <br><br>
</center>







    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-5">
                  <h2 class="footer-heading mb-4">Política de Calidad</h2>
                  <p>Mantener e incrementar el nivel de puntualidad, disponibilidad, confiabilidad y buenas prácticas en las calibraciones, servicio de mantenimiento preventivo, correctivo y la capacitación.</p>
                </div>
                <div class="col-md-3 ml-auto">
                  <h2 class="footer-heading mb-4">Redirección Rapida</h2>
                  <ul class="list-unstyled">
                    <li><a href="#about-section"><span class="text-primary icon-users"></span>&nbsp;&nbsp;Conocenos</a></li>
                    <li><a href="#team-section"><span class="text-primary icon-lab"></span>&nbsp;&nbsp;Equipos</a></li>
                    <li><a href="#services-section"><span class="text-primary icon-wrench"></span>&nbsp;&nbsp;Servicios</a></li>
                    
                  </ul>
                </div>
                
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-4">
                <h2 class="footer-heading mb-4">Subscribete </h2>
              <form action="#" method="post" class="footer-subscribe">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Ingresa tu correo" aria-label="Ingresa tu correo" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-black" type="button" id="button-addon2">Enviar</button>
                  </div>
                </div>
              </form>  
              </div>
              
              <div class="">
                <h2 class="footer-heading mb-4">Siguenos</h2>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>
  
  
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
              <p>
          
         Spectralab Instrumentación Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | 
         
        </p>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
  
    </div> <!-- .site-wrap -->
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
  
    
    <script src="js/main.js"></script>
      
    </body>
    <script>
		var ctx = document.getElementById("grafica").getContext("2d");
    var ctx2 = document.getElementById("grafica2").getContext("2d");
    
		var grafica = new Chart(ctx,{
			type:"line",
			data:{
				labels:["Vaso 1","Vaso 2","Vaso 3","Vaso 4","Vaso 5","Vaso 6"],
				datasets:[{
					label: 'Porcentaje de disolución',
					fill: false,
					data:[<?php echo($vc1)?>,<?php echo($vc2)?>,<?php echo($vc3)?>,<?php echo($vc4)?>,<?php echo($vc5)?>,<?php echo($vc6)?>],
					borderWidth:7,
					backgroundColor: "blue",
					borderColor: "blue"
				}, {
					label: 'Limite Superior',
					fill: false,
					data:[88,88,88,88,88,88],
					backgroundColor: "white",
					borderColor: "red"
				}, {
					label: 'Limite Inferior',
					fill: false,
					data:[60,60,60,60,60,60],
					backgroundColor: "white",
					borderColor: "#61AEF7"
				
				
				
				}]
				
			},
	
			options:{
				scales:{
					yAxes:[{
						ticks:{
							min: 0,
							max: <?php echo($num_max_ca+20)?>,
							stepSize: 5
						}
					}]
				}
			}
		});

    var grafica2 = new Chart(ctx2,{
			type:"line",
			data:{
				labels:["Vaso 1","Vaso 2","Vaso 3","Vaso 4","Vaso 5","Vaso 6"],
				datasets:[{
					label: 'Porcentaje de disolución',
					fill: false,
					data:[<?php echo($vp1)?>,<?php echo($vp2)?>,<?php echo($vp3)?>,<?php echo($vp4)?>,<?php echo($vp5)?>,<?php echo($vp6)?>],
					borderWidth:7,
					backgroundColor: "blue",
					borderColor: "blue"
				}, {
					label: 'Limite Superior',
					fill: false,
					data:[39,39,39,39,39,39],
					backgroundColor: "white",
					borderColor: "red"
				}, {
					label: 'Limite Inferior',
					fill: false,
					data:[27,27,27,27,27,27],
					backgroundColor: "white",
					borderColor: "#61AEF7"
				
				
				
				}]
				
			},
	
			options:{
				scales:{
					yAxes:[{
						ticks:{
							min: 0,
							max: <?php echo($num_max_pa+10)?>,
							stepSize: 5
						}
					}]
				}
			}
		});
	</script>

  </html>