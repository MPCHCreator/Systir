<?php
session_start();

if(isset($_GET["registro"])){
    if($_GET["registro"]){
    echo'<script type="text/javascript">
    alert("¡REGISTRO EXITOSO!");
    window.location.href="index.php";
    </script>';
 }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienvenido</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Bethany
    Theme URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--header-->
  <header class="main-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.html" class="navbar-brand">Systir</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#header">Inicio</a></li>
                <li><a href="#feature">¿Quienes somos?</a></li>
                <li><a href="#portfolio">Nosotros</a></li>
                <li><a href="#contact">Contactanos</a></li>
                <?php 
                if (isset($_SESSION['usuario'])) : echo '<li><a href="contratarServicio.php">Contratar Servicio</a></li>'; endif;
                if (isset($_SESSION['usuario'])) : echo '<li><a href="eliminar_session.php">Cerrar sesion</a></li>';
                else :
                echo '<li><a href="iniciar_sesion.php">Iniciar Sesión</a></li>';
                endif;         
                ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Programas y proyectos</h2>
          <h3 class="title">Systir</h3>
          <h4 class="sub-title">Nosotros una empresa elegante y trabajadora</h4>
        </div>
      </div>
    </div>
  </header>
  <!--/ header-->
  <!---->
  <section id="cta-1">
    <div class="container">
      <div class="row">
        <div class="cta-info text-center">
          <h3><span class="dec-tec">“</span>Conose nuestra paginá.<span class="dec-tec">”</span></h3>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 wow fadeInLeft delay-05s">
          <div class="section-title">
            <h2 class="head-title">¿Quienes somos?</h2>
            <hr class="botm-line">
            <p class="sec-para">Una empresa dedicada al mantenimiento de red y mantenimiento de pc's</p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-paint-brush"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Diseño de topologias de red</h3>
              <p class="txt-para">Se generan topologias de red como una herramienta para un mejor mantenimiento en la redes.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-02s">
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Seguridad de puertos.</h3>
              <p class="txt-para">Se le da una seguridad a los puertos de los router y de los switch para a segurar que nadie mas pueda acceder cuando no esta autorisado.</p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-mobile"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Contacto directo o via telefonica.</h3>
              <p class="txt-para">Para una mejor atencion nuestra empresa puede hablar directamentecon usted o puede utilizar via telefonica para su comodidad. </p>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight delay-04s">
            <div class="icon">
              <i class="fa fa-desktop"></i>
            </div>
            <div class="icon-text">
              <h3 class="txt-tl">Mantenimiento a pc´s</h3>
              <p class="txt-para">Se le da mantenimiento a pc´s tanto en hatdware como software. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <section class="section-padding parallax bg-image-2 section wow fadeIn delay-08s" id="cta-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="cta-txt">
            <h3>Systir</h3>
            <p>La unica empresa con puntualidad y buen servicio.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section class="section-padding wow fadeInUp delay-02s" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="section-title">
            <h2 class="head-title">Nosotros</h2>
            <hr class="botm-line">
            <p class="sec-para">Contamos con un equipo amplio para el manejo de los proyectos de nuestros clientes, contamos con diferentes personas especialisadas en diferentes areas.</p>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port01.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port02.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port03.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port04.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port05.jpg" alt="" class="img-responsive">
            </div>
          </div>
          <div class="col-md-4 col-sm-6 padding-right-zero">
            <div class="portfolio-box design">
              <img src="img/port06.jpg" alt="" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contactanos</h2>
            <hr class="botm-line">
            <p class="sec-para black">En este apartado podran ver nuestras redes sociales y el numero telefonico de la empresa para contactarnos para empezar a trabajar .</p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Email</h3>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="contact-info">
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-send">Send</button>
              </form>
            </div>

          </div>
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title"></h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Huejotzingo, puebla </p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Telefono: +52 227 103 5631</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">Systir_23@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Bethany Theme - All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->
  <!--contact ends-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
