<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/Logo_Siavicol.ico">

    <title>Siavicol</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/pagina_inicio.css" rel="stylesheet">
    

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- boton ir arriba -->
  <a class="ir-arriba page-scroll" href="#page-top"><i class="icons icon-chevron-arrow-up icon_ir_arriba"></i></a>
    <!-- menu de navegacion -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden">
                <a class="page-scroll" href="#page-top"></a>
            </li>
            <li>
                <a class="li" onclick="Iniciar_sesion()"><span class="icons icon-enter2 menu_icons"></span> Iniciar Sesión</a>
            </li>
            <li>
                <a class="" href="Desarrolladores.php" ><span class="icons icon-code2 menu_icons"></span> Desarrolladores</a>
            </li>
            <li>
                <a class="page-scroll" href="#que_es_siavicol"><span class="icons icon-question-sign menu_icons"></span> ¿Que es?</a>
            </li>
            <li>
                <a class="page-scroll" href="#servicios"><span class="icons icon-room_service menu_icons"></span> Servicios</a>
            </li>
            <!-- <li>
                <a class="page-scroll" href="#footer"><span class="icons icon-enter2 menu_icons"></span> Contact</a>
            </li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <div class="modal fade" id="Iniciar_sesion" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="caja-inicio-sesion">
          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          	<img class="logo-inicio-sesion" src="assets/img/Logo_Siavicol.png" >
            <h3 class="caja-inicio-sesion-titulo">Iniciar Sesion</h3>
          </div>
          <div class="modal-body">

            <form action="login.php" method="POST">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
               <div class="form-group">
                 <label class="form-control-label icon_m icon-user-circle-o" for="usuario1">Usuario</label>			
                 <input class="form-control" type="text" name="usuario1" id="usuario1">
               </div>
             </div>

             <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
               <div class="form-group">
                 <label class="form-control-label icon_m icon-key13" for="contrasena1">Contraseña</label>
                 <input class="form-control" type="password" name="contrasena1" id="contrasena1">
               </div>
             </div> 
            <div class="box" id="contenedor_login"></div>
            <div class="box">
              <button type="button" class="button button--antiman button--inverted-alt" value="Acceder" onclick="acceder()"><i class="button__icon icons icon-enter2"></i><span>Acceder</span></button>
            </div>
          </form>		  
          </div>
      	</div>
   	  </div>
	  </div>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 caja_banner">
            <img class="logo_banner" src="assets/img/Logo_Siavicol.png">
            <h1 class="titulo_banner">SIAVICOL</h1>
            <h3 class="subtitulo_banner">Sistema de informacion avicola</h3>
            <!-- <a class="btn btn-default page-scroll" href="#que_es_siavicol">Click Me to Scroll Down!</a> -->
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="que_es_siavicol" class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="titulo_section">¿Que es?</h1>
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
              <p class="parrafo_quees">SIAVICOL: Es un sistema de información que nos permite dinamizar y agilizar las búsquedas de la información suministrada con base a la producción de huevos de gallina del centro agropecuario la granja. Llevará Registros de las producciones de los huevos como también, registros de alimentación registros de inventario los cuales los podemos exportar.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section id="servicios">
      <div class="container">       
        <div class="row">
          <div class="services-section col-xs-12">
            <div class="row">
              <h1 class="titulo_section">Servicios</h1>
              <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 text-center">
                <span class="servicios_icon"><i class=" icons icon-stats-dots"></i></span>
                <h4 class="subtitulo_servicios">Producción</h4>
                <p class="parrafo_servicios">Te ayudara a llevar un control de la producción diaria, semanal y mensual de los huevos de gallina a demás manejara unos parámetros los cuales indicaran el índice de la producción real vs la estimada.</p>
              </div><!-- /.feature -->

              <div class="feature col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 text-center">
                <span class="servicios_icon"><i class=" icons icon-medkit"></i></span>
                <h4 class="subtitulo_servicios">Sanidad</h4>
                <p class="parrafo_servicios">Ayudará a controlar todos los procesos de sanidad mediante registros los cuales servirán para tomar decisiones a la hora que se presenten situaciones semejantes</p>
              </div><!-- /.feature -->

              <div class="feature col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 text-center">
                <span class="servicios_icon"><i class=" icons icon-clipboard4"></i></span>
                <h4 class="subtitulo_servicios">Inventarios</h4>
                <p class="parrafo_servicios">Ayudará a llevar de una manera controlada las producciones de los huevos, registros de alimentación y los saldos que van quedando almacenados del alimento para las aves.</p>
              </div><!-- /.feature -->
            </div><!-- /.row -->
          </div><!-- /.feature-container -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <footer id="footer" class="footer">
      <ul class="copyright">
        <li class="copyright_li">&copy; Derechos Reservados</li><li class="copyright_li">SIAVICOL <a target="_blank" class="copyright_a" href="Desarrolladores.php">""DEVELOPERS OF THE FUTURE""</a></li>
      </ul>
      <div class="icons footer_ul">
        <a target="_blank" href="https://siavicol.blogspot.com.co" class="footer_li icons circle-footer icon-blogger"><span class="label">Blogger</span></a>
        <a target="_blank" href="https://plus.google.com/u/0/115246479691012654876" class="footer_li icons circle-footer icon-google-plus"><span class="label">Google+</span></a>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/pagina_inicio.js"></script>

     <script>
      
function acceder() {
  var usuario1=document.getElementById("usuario1").value;
  var contrasena1=document.getElementById("contrasena1").value;

  $("#contenedor_login").load("assets/Conexion/login.php", {usuario1:usuario1, contrasena1:contrasena1})
}

    </script>
</body>

</html>
