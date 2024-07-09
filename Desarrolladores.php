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
                <a class="" href="Index.php" ><span class="icons icon-reply menu_icons"></span> Volver</a>
            </li>
            <li>
                <a class="page-scroll" href="#Foto_Grupo"><span class="icons icon-group2 menu_icons"> </span> Grupo</a>
            </li>
            <li>
                <a class="page-scroll" href="#Presentacion"><span class="icons icon-man menu_icons"> </span> Presentacion</a>
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
                 <label class="form-control-label icon_m icon-user-circle-o" for="">Usuario</label>			
                 <input class="form-control" type="text" name="usuario1" id="usuario1">
               </div>
             </div>

             <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
               <div class="form-group">
                 <label class="form-control-label icon_m icon-key13" for="">Contraseña</label>
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
   <!--  <section id="intro" class="intro-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 caja_banner">
            <img class="logo_banner" src="assets/img/Logo_Siavicol.png">
            <h1 class="titulo_banner">SIAVICOL</h1>
            <h3 class="subtitulo_banner">Sistema de informacion avicola</h3>
          </div>
        </div>
      </div>
    </section> -->

    <section id="" class="desarrolladores-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
              <img class="logo_banner" src="assets/img/Logo_Siavicol.png">
              <h1 class="titulo_banner">Desarrolladores</h1>
            <h3 class="subtitulo_banner"></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <div class="container" id="Foto_Grupo">
            <div class="row">
            <h1 class="titulo_section2">Grupo </h1>
            <div  class="col-md-12 center">
              <div class="caja_Foto_Grupo">
          <img class="Foto_Grupo" src="assets/img/Fotos_Integrantes/Foto_Grupo.jpg" alt="">
        </div>
            </div>


       
        <div class="col-md-12 Separador_desarrolladores" id="Presentacion">
        <h1 class="titulo_section2">Presentacion</h1>
                <div class="col-lg-6">
                  <div class="col-xs-12 ">
                  <div>
                  <h1 class="Nombre_Desarrollador">Andres Felipe Henao Salazar</h1>
                  </div>
                  </div>
          <div class=" col-md-6">
                    <div class=" Caja_Foto_Desarrollador">
                    <img class="Foto_Desarrollador" src="assets/img/Fotos_Integrantes/Foto_Andres.jpg" alt="">
                    </div>
                  </div>
                <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-1" data-toggle="tab"><i class="icons icon-info8"></i> Informacion</a></li>
                        <li><a href="#Contacto-1" data-toggle="tab"><i class="icons icon-earth-globe"></i> Contacto</a></li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="Informacion-1">
                        <h4 class="Rango">Lider, Analista</h4>
                          <p><h6 class="sub_desarolladores">Ocupación:</h6>Estudiante, trabajador 
                          <h6 class="sub_desarolladores">Estudios:</h6> Técnico en turismo y recreación con énfasis en alojamiento rurales, diseño de paginas web con php y mysql diseño de base de datos en access. 
                          <h6 class="sub_desarolladores">Experiencia:</h6>Manejo De Documentación De Proyectos, diseño de base de datos.</p>
                        </div>
                        <div class="tab-pane fade caja_redes caja_redes" id="Contacto-1">
                          <div class="icons footer_ul">
                <li class="footer_li"><a target="_blank" href="#" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
                <li class="footer_li"><a target="_blank" href="#" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
                <li class="footer_li"><a target="_blank" href="#" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
                </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>

          <div class="col-lg-6">
                  <div class="col-xs-12 ">
                  <div>
                  <h1 class="Nombre_Desarrollador">Alexi Espinosa Vidal</h1>
                  </div>
                  </div>
          <div class=" col-md-6">
                    <div class=" Caja_Foto_Desarrollador">
                    <img class="Foto_Desarrollador" src="assets/img/Fotos_Integrantes/Foto_Alexi.jpg" alt="">
                    </div>
                  </div>
                <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-2" data-toggle="tab"><i class="icons icon-info8"></i> Informacion</a></li>
                        <li><a href="#Contacto-2" data-toggle="tab"><i class="icons icon-earth-globe"></i> Contacto</a></li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="Informacion-2">
                        <h4 class="Rango">Analista y Desarrollador</h4>
                          <p><h6 class="sub_desarolladores">Ocupación:</h6>Estudiante, trabajador. 
                          <h6 class="sub_desarolladores">Estudios:</h6> Diseño de paginas web con php y mysql, Tecnico en agroindustria alimentaria.
                          <h6 class="sub_desarolladores">Experiencia:</h6> desarrollo web y desarrollo de proyectos productivos.</p>
                        </div>
                        <div class="tab-pane fade caja_redes" id="Contacto-2">
                          <div class="icons footer_ul">
                <li class="footer_li"><a target="_blank" href="https://www.facebook.com/alexisalquimista" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
                <li class="footer_li"><a target="_blank" href="https://twitter.com/AlexisAlchemist" class="icons circle icon-twitter"><span class="label">Twitter</span></a></li>
                <li class="footer_li"><a target="_blank" href="https://www.instagram.com/alexis_espinosa98/" class="icons circle icon-instagram2"><span class="label">Instagram</span></a></li>
                <li class="footer_li"><a target="_blank" href="https://plus.google.com/u/0/113619252446719727589" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
                <li class="footer_li"><a target="_blank" href="http://bloodalchemist.blogspot.com.co/" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
                </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>

        <div class="col-md-12 Separador_desarrolladores">

                <div class="col-lg-6">
                  <div class="col-xs-12 ">
                  <div>
                  <h1 class="Nombre_Desarrollador">Jhoan Sebastian Leal Hernades</h1>
                  </div>
                  </div>
          <div class=" col-md-6">
                    <div class=" Caja_Foto_Desarrollador">
                    <img class="Foto_Desarrollador" src="assets/img/Fotos_Integrantes/Foto_Sebastian.jpg" alt="">
                    </div>
                  </div>
                <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-3" data-toggle="tab"><i class="icons icon-info8"></i> Informacion</a></li>
                        <li><a href="#Contacto-3" data-toggle="tab"><i class="icons icon-earth-globe"></i> Contacto</a></li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="Informacion-3">
                        <h4 class="Rango">Analista y Desarrollador</h4>
                          <p><h6 class="sub_desarolladores">Ocupación:</h6>Estudiante, Responsable
                          <h6 class="sub_desarolladores">Estudios:</h6>Diseño En Paginas Web En Php y Mysql, Manejo De Base De Access y Excel Intermedio.
                          <h6 class="sub_desarolladores">Experiencia:</h6>Manejo De Documentación De Proyectos, Mantenimiento De Equipos. </p>
                        </div>
                        <div class="tab-pane fade caja_redes" id="Contacto-3">
                          <div class="icons footer_ul">
                <li class="footer_li"><a target="_blank" href="https://www.facebook.com/SebasElLider" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
                <li class="footer_li"><a target="_blank" href="https://twitter.com/SebastianLeal29" class="icons circle icon-twitter"><span class="label">Twitter</span></a></li>
                <li class="footer_li"><a target="_blank" href="https://plus.google.com/u/0/107054637241795588984" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
                <li class="footer_li"><a target="_blank" href="http://sebasfit.blogspot.com.co/" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
                </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>

          <div class="col-lg-6">
                  <div class="col-xs-12 ">
                  <div>
                  <h1 class="Nombre_Desarrollador">Cristian Camilo Serrano Ramirez</h1>
                  </div>
                  </div>
          <div class=" col-md-6">
                    <div class=" Caja_Foto_Desarrollador">
                    <img class="Foto_Desarrollador" src="assets/img/Fotos_Integrantes/Foto_Cristian.jpg" alt="">
                    </div>
                  </div>
                <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-4" data-toggle="tab"><i class="icons icon-info8"></i> Informacion</a></li>
                        <li><a href="#Contacto-4" data-toggle="tab"><i class="icons icon-earth-globe"></i> Contacto</a></li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="Informacion-4">
                        <h4 class="Rango">Analista</h4>
                          <p><h6 class="sub_desarolladores">Ocupación:</h6>Estudiante, trabajador 
                          <h6 class="sub_desarolladores">Estudios:</h6> Diseño eN Paginas Web Con Php y Mysql,Técnico En Sistemas  
                          <h6 class="sub_desarolladores">Experiencia:</h6> Mantenimiento De Equipo y Cableado Estructurado </p>
                        </div>
                        <div class="tab-pane fade caja_redes" id="Contacto-4">
                          <div class="icons footer_ul">
                <li class="footer_li"><a target="_blank" href="https://www.facebook.com/?ref=tn_tnmn" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
                <li class="footer_li"><a target="_blank" href="https://plus.google.com/collections/featured?hl=es" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
                <li class="footer_li"><a target="_blank" href="http://cristianserrano08.blogspot.com.co/" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
                </div>
                        </div>
                      </div>
                    </div>
                  </div>
          </div>
        </div>  
          </div>
          </div>

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
