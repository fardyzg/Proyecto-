<?php
	
session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';

if (!isset($_SESSION["id_usuario"])) {
  header("Location: ");
}

$idUsuario = $_SESSION["id_usuario"];

$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
$result = $mysqli->query($sql);

$row = $result->fetch_assoc();
?>


<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bienvenido</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		<style>
			body {
			padding-top: 20px;
			padding-bottom: 20px;
			}
		</style>
	</head>
	<body class="main-layout">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="welcome.php"><img src="images/logo-sc.jpg" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class='active'><a href='welcome.php'>Inicio</a></li>	
                      <li> <a href="#about">Nosotros</a> </li>
                      <li> <a href="#courses">Cursos</a> </li>
                      <li> <a href="matricula.php">Matriculate</a> </li>
                      <li><a href="logout.php">Cerrar Sesi&oacute;n</a></li>
                      
                     </ul>
                   </nav>
                 </div>
               </div> 
               <div class="mean-last">
                       <h3 class="wii"><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h3></div>              
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
     <section class="slider_section">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">
                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>30 AÑOS POTENCIANDO EL TALENTO E INSPIRANDO VIDAS</h1>
                      <!--<p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>-->
                      <a href="#about">Leer más</a> <a href="#contact">Matriculate</a>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <figure><img src="images/Imagen princicpal.jpeg"></figure>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">

            <div class="container-fluid padding_dd">
              <div class="carousel-caption">

                <div class="row">
                  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                    <div class="text-bg">
                      <h1>MENSAJE DE BIENVENIDA EN LENGUJAE DE SEÑAS</h1>
                      <!--<p>TOP NOTCH COURSES FROM TRAINED PROFESSIONALS</p>-->
                      <a href="#">Leer más</a> <a href="#">Matriculate</a>
                    </div>
                  </div>

                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                    <div class="images_box">
                      <video controls src="videos/bienvenida.mp4"></video>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</section>
</div>
</header>



<!-- about  -->
<div id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <h2>Propuesta educativa</h2>
          <h2><strong class="yellow">Sistema Helicoidal</strong></h2>
          <p>En Salesian College potenciamos las competencias de los estudiantes con nuestro Sistema Helicoidal, formando líderes con valores y visión de futuro preparados para enfrentar un mundo en constante cambio. Nuestro innovador sistema propone un enfoque educativo cíclico y gradual, mediante técnicas y procesos de mejora continua, sobre la base de una educación integral de alto rendimiento.</p>
          <!-- <a href="Javascript:void(0)">Read more</a>  -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="about-box">
          <figure><img src="images/imagen de nosotros.jpg" alt="#" /></figure>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="important" class="important">
  
  <div class="important_bg">
    <div class="container">
      <div class="row">

        <div class="col col-xs-12">
          <div class="important_box">
            <h3>Somos la única institución educativa</h3>
            <span>que representa con éxito al Perú con 7 disciplinas académicas y deportivas.</span>
          </div>
        </div>
    
      </div>
    </div>
  </div>
</div>
</div>

<!-- end our -->
<!-- Courses -->
<div id="courses" class="Courses">
  <div class="container-fluid padding_left3">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="box_bg">
          <div class="box_bg_img">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/fisica.jpg"></figure>
                  <div class="overlay">
                    <h3>FISICA</h3>
                    <p>Curso a cargo del docente Alberto Einstein.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/filosofia.jpg"></figure>
                  <div class="overlay">
                    <h3>FILOSOFIA</h3>
                    <p>Curso a cargo del docente Iván Sócrates.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/matematica.jpg"></figure>
                  <div class="overlay">
                    <h3>MATEMATICA</h3>
                    <p>Curso a cargo del docente Leonardo Euler.</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="box_my">
                  <figure><img src="images/comunicacion y lenguaje.png"></figure>
                  <div class="overlay">
                    <h3>LENGUAJE</h3>
                    <p>Curso a cargo de la docente Martha Hildebrandt.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 border_right">
        <div class="box_text">
          <div class="titlepage">
            <h2>Nuestros <strong class="yellow">cursos</strong></h2>
          </div>
          <p>Contamos con docentes sumamente preparados para dar una buena enseñanza de alto nivel, muy estructurada, para formar personas de valores y buenos para el mundo. Buscamos siempre superarnos, promoviendo la innovación en la enseñanza y en la gestión sobre la base de nuestro sistema Helicoidal, que nos permite brindar a nuestros estudiantes una educación integral de calidad.</p>
          <!--<a href="Javascript:void(0)">Read more</a>-->
        </div>
      </div> 
    </div>
  </div>
</div>

<div id="contact" class="contact">
  <div class="container-fluid padding_left2">
    <div class="white_color">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div id="map">
          </div>

        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

          <form class="contact_bg">
            <div class="row">
              <div class="col-md-12">
                <div class="titlepage">
                  <h2><strong class="yellow">CONTACTO</strong></h2>
                
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Nombre completo" type="text" name="Nombre completo">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Correo electrónico" type="text" name="Correo electrónico">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="Teléfono/Celular" type="text" name="Teléfono/Celular">
                </div>
                <div class="col-md-12">
                  <input class="contactus" placeholder="DNI" type="text" name="DNI">
                  <!--textarea class="contactus" placeholder="Message" type="text" name="Message"></textarea-->
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <button class="send">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- end contact -->

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

            <!--<div class="col-md-12">
              <form class="news">
                <input class="newslatter" placeholder="Email" type="text" name=" Email">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-md-12">
              <h2>Newsletter</h2>
              <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in  </span>
            </div>-->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Contactanos</h3>
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Av. Angamos Este 1166,<br> Surquillo 15047</li>
                        <li>
                          <a href="#"><img src="icon/email.png" alt="#" /></a>contactanos@salesian<br>college.edu.pe</li>
                          <li>
                            <a href="#"><img src="icon/call.png" alt="#" /></a>997594975 - (01) 6805300</li>
                          </ul>
                          <ul class="social_link">
                            <li><a href="#"><img src="icon/fb.png"></a></li>
                            <li><a href="#"><img src="icon/tw.png"></a></li>
                            <li><a href="#"><img src="icon/lin(2).png"></a></li>
                            <li><a href="#"><img src="icon/instagram.png"></a></li>
                          </ul>

                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Nosotros</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="quienes-somos.html">¿Quiénes somos?</a> </li>
                            <li><a href="premios-distinciones.html">Premios y distinciones</a> </li>
                            <li><a href="#">Trabaja con nosotros</a> </li>
                            <li><a href="#">Admisión</a> </li>
                            <li><a href="#">Niveles</a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Información</h3>
                          <ul class="Links_footer">
                            <li class="active"><a href="#">¿Por qué elegirnos?</a> </li>
                            <li><a href="#">Vida de estudiante</a> </li>
                            <li><a href="#">Ciclos virtuales</a> </li>
                            <!--li><a href="#">Admisión</a> </li>
                            <li><a href="#">Liderazgo</a> </li-->
                          </ul>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="address">
                          <a href="index.html"> <img src="images/logo-sc.jpg" alt="logo"></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                  <p>© Copyright 2022 <a href="index.html">Institucion Educativa Salesian College </a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: {
      lat: -8.0700,
      lng: -77.0400
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



</body>
	<!--<body>



		<div class="container">
			
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
							<span class='sr-only'>Men&uacute;</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					</div>
					
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='welcome.php'>Inicio</a></li>			
						</ul>
						
						<?php if($_SESSION['tipo_usuario']==1) { ?>
							<ul class='nav navbar-nav'>
								<li><a href='#'>Administrar Usuarios</a></li>
							</ul>
						<?php } ?>
						
						<ul class='nav navbar-nav navbar-right'>
							<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
						</ul>
					</div>
				</div>
			</nav>	
			
			<div class="jumbotron">
				<h2><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h1>
				<br />
			</div>
		</div>
	</body>-->
</html>		