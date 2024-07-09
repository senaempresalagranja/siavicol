<?php
session_start();
if (isset($_SESSION['USUARIO_CONSULTA']))
{	
	include '../include/conexion.php';
	$usuario=($_SESSION['USUARIO_CONSULTA']);

	$res=mysql_query("SELECT * FROM usuarios WHERE idUsuario=$usuario");
        while ($reg=mysql_fetch_array($res)) 
        {
          $nomusua_usua=utf8_decode($reg[1]);
          $rolusua=utf8_decode($reg[2]);
         }
         $saludo="Bienvenido $nomusua_usua, a el Rol del $rolusua";			
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Desarrolladores</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico"> <!-- favicon Que tiene cada pagina -->

	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css"/> <!-- Los iconos De Las Paginas -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css"/> <!-- Los estilos css de cada pagina -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component_2.css"/> <!-- Los estilos css de cada pagina -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css"/> <!-- El bootstrap.css se uso para las cajas para formularios -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/sweetalert2.min.css"/> <!-- Son los estilos para las alertas personalizadas -->

  	<script type="text/javascript" src="../../../assets/js/modernizr.custom.js"></script> <!-- Es componente vital para el menú de navegación -->
	<script type="text/javascript" src="../../../assets/js/jquery-2.1.4.min.js"></script> <!-- Sirve para las funciones importantes -->
	<script type="text/javascript" src="../../../assets/js/bootstrap.min.js"></script> <!-- Es para otras Funciones importantes --> 
  	<script type="text/javascript" src="../../../assets/js/sweetalert2.min.js"></script> <!-- Para que las alertas personalizadas funcionen --> 
</head>
<body>
  <div class="container-s">
	<!-- Push Wrapper -->
	<div class="mp-pusher" id="mp-pusher">
	  <!-- mp-menu -->
      <nav id="mp-menu" class="mp-menu">
		<div class="mp-level">
	      <h2 class="h2_m icon_m icon-world">Explorar</h2>
	      <ul class="ul_m">
            <li class="li_m"><a class="a_m icon_m icon-house-outline" href="../inicio/Bienvenidos.php">Inicio</a></li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-search12" href="#">Consultar</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-search12">Consultar</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Galpon.php">Consultar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Encasetamiento.php">Consultar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Produccion.php">Consultar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Alimentacion.php">Consultar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Mortalidad.php">Consultar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Articulos.php">Consultar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Inventario.php">Consultar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="../Consultar/Cons_Parametros.php">Consultar Parámetros</a></li>
				</ul>
			  </div>
			</li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-area-chart" href="#">Comparación De Parámetros</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-news">Comparación De Parámetros</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../comparacion_parametros/Comparar_Produccion.php">Comparar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../comparacion_parametros/Comparar_Mortalidad.php">Comparar Mortalidad</a></li>
				</ul>
			  </div>
			</li>
							
			<li class="li_m icon_m icon-right-chevron">
        <a class="a_m icon_m icon-help" href="#">Ayuda</a>
        <div class="mp-level">
        <h2 class="h2_m icon_m icon-help">Ayuda</h2>
        <a class="a_m mp-back" href="#">Volver</a>
        <ul class="ul_m">
          <li class="li_m"><a class="a_m icon_m icon-info-large" href="Acerca_De.php">Acerca De</a></li>
          <li class="li_m"><a class="a_m icon_m icon-code2" href="Desarrolladores.php">Desarrolladores</a></li>
          <li class="li_m"><a class="a_m icon_m icon-book" href="Manual_De_Usuario.php">Manual De Usuario</a></li>  
        </ul>
        </div>
      </li>
			<li class="li_m"><a class="a_m icon_m icon-exit2" href="../include/cerrar.php">Cerrar Sesión</a></li>
		  </ul>		
		</div>
	  </nav>
	  <!-- /mp-menu -->
	  <div class="scroller"><!-- this is for emulating position fixed of the nav -->
        <div class="scroller-inner">
         <!-- Top Navigation -->
           <!-- caja del boton del menu y el banner -->
          <div class="block block-40 ">
            <a href="#" id="trigger" class="menu-trigger icon_m icon-reorder-option"></a>
              <div class="banner_contenido">
                <img class="logo_siavicol" src="../../../assets/img/Logo_Siavicol.png" alt=""> 
                <h1 class="banner_h1">Desarrolladores</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->			
		  <div class="container">
  	        <div class="row">
  	        <div class="col-xs-12">
	          <h1 class="titulo_section">Grupo</h1>
  	  	    </div>
  	        <div class="col-md-12 center">
  	          <div class="caja_Foto_Grupo">
			    <img class="Foto_Grupo" src="../../../assets/img/Fotos_Integrantes/Foto_Grupo.jpg" alt="">
			  </div>
  	        </div>
  	        <div class="col-xs-12">
	            <h1 class="titulo_section">Presentación</h1>
  	  	      </div>
			 
			  <div class="col-md-12 Separador_desarrolladores">
  	            <div class="col-lg-6">
  	              <div class="col-xs-12 ">
	                <div>
	                <h1 class="Nombre_Desarrollador">Andres Felipe Henao Salazar</h1>
	                </div>
  	              </div>
				  <div class=" col-md-6">
  	                <div class=" Caja_Foto_Desarrollador">
  		              <img class="Foto_Desarrollador" src="../../../assets/img/Fotos_Integrantes/Foto_Andres.jpg" alt="">
  	                </div>
                  </div>
	              <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-1" data-toggle="tab"><i class="icons icon-info8"></i> Información</a></li>
                        <li><a href="#Contacto-1" data-toggle="tab"><i class="icons icon-earth-globe"></i> Contacto</a></li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="Informacion-1">
                        <h4 class="Rango">Líder, Analista</h4>
                          <p><h6 class="sub_desarolladores">Ocupación:</h6>Estudiante, trabajador 
                          <h6 class="sub_desarolladores">Estudios:</h6> Técnico en turismo y recreación con énfasis en alojamiento rurales, diseño de paginas web con php y mysql diseño de base de datos en access. 
                          <h6 class="sub_desarolladores">Experiencia:</h6>Manejo De Documentación De Proyectos, diseño de base de datos.</p>
                        </div>
                        <div class="tab-pane fade caja_redes caja_redes" id="Contacto-1">
                          <ul class="icons footer_ul">
						    <li class="footer_li"><a target="_blank" href="#" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
						    <li class="footer_li"><a target="_blank" href="#" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
						    <li class="footer_li"><a target="_blank" href="#" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
					      </ul>
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
  		              <img class="Foto_Desarrollador" src="../../../assets/img/Fotos_Integrantes/Foto_Alexi.jpg" alt="">
  	                </div>
                  </div>
	              <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-2" data-toggle="tab"><i class="icons icon-info8"></i> Información</a></li>
                        <li><a href="#Contacto-2" data-toggle="tab"><i class="icons icon-earth-globe"></i> Contacto</a></li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="Informacion-2">
                        <h4 class="Rango">Analista y Desarrollador</h4>
                          <p><h6 class="sub_desarolladores">Ocupación:</h6>Estudiante, trabajador. 
                          <h6 class="sub_desarolladores">Estudios:</h6> Diseño de paginas web con php y mysql.
                          <h6 class="sub_desarolladores">Experiencia:</h6> desarrollo web y desarrollo de proyectos productivos.</p>
                        </div>
                        <div class="tab-pane fade caja_redes" id="Contacto-2">
                          <ul class="icons footer_ul">
						    <li class="footer_li"><a target="_blank" href="https://www.facebook.com/alexisalquimista" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
						    <li class="footer_li"><a target="_blank" href="https://twitter.com/AlexisAlchemist" class="icons circle icon-twitter"><span class="label">Twitter</span></a></li>
						    <li class="footer_li"><a target="_blank" href="https://www.instagram.com/alexis_espinosa98/" class="icons circle icon-instagram2"><span class="label">Instagram</span></a></li>
						    <li class="footer_li"><a target="_blank" href="https://plus.google.com/u/0/113619252446719727589" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
						    <li class="footer_li"><a target="_blank" href="http://bloodalchemist.blogspot.com.co/" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
					      </ul>
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
	                <h1 class="Nombre_Desarrollador">Jhoan Sebastian Leal Hernández</h1>
	                </div>
  	              </div>
				  <div class=" col-md-6">
  	                <div class=" Caja_Foto_Desarrollador">
  		              <img class="Foto_Desarrollador" src="../../../assets/img/Fotos_Integrantes/Foto_Sebastian.jpg" alt="">
  	                </div>
                  </div>
	              <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-3" data-toggle="tab"><i class="icons icon-info8"></i> Información</a></li>
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
                          <ul class="icons footer_ul">
						    <li class="footer_li"><a target="_blank" href="https://www.facebook.com/SebasElLider" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
						    <li class="footer_li"><a target="_blank" href="https://twitter.com/SebastianLeal29" class="icons circle icon-twitter"><span class="label">Twitter</span></a></li>
						    <li class="footer_li"><a target="_blank" href="https://plus.google.com/u/0/107054637241795588984" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
						    <li class="footer_li"><a target="_blank" href="http://sebasfit.blogspot.com.co/" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
					      </ul>
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
  		              <img class="Foto_Desarrollador" src="../../../assets/img/Fotos_Integrantes/Foto_Cristian.jpg" alt="">
  	                </div>
                  </div>
	              <div class="col-lg-6"> 
                    <div class="bs-component">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#Informacion-4" data-toggle="tab"><i class="icons icon-info8"></i> Información</a></li>
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
                          <ul class="icons footer_ul">
						    <li class="footer_li"><a target="_blank" href="https://www.facebook.com/?ref=tn_tnmn" class="icons circle icon-facebook"><span class="label">Facebook</span></a></li>
						    <li class="footer_li"><a target="_blank" href="https://plus.google.com/collections/featured?hl=es" class="icons circle icon-google-plus"><span class="label">Google+</span></a></li>
						    <li class="footer_li"><a target="_blank" href="http://cristianserrano08.blogspot.com.co/" class="icons circle icon-blogger"><span class="label">Blogger</span></a></li>
					      </ul>
                        </div>
                      </div>
                    </div>
                  </div>
			    </div>
			  </div>  
	        </div>
          </div>
                	  	
		  <footer id="footer">
			<ul class="copyright">
			  <li class="copyright_li">&copy; Derechos Reservados</li><li class="copyright_li">SIAVICOL <a class="copyright_a" target="_blank" href="../Ayuda/Desarrolladores.php">"DEVELOPERS OF THE FUTURE"</a></li>
			</ul>

			<div class="icons footer_ul">
			  <a target="_blank" href="https://siavicol.blogspot.com.co" class="footer_li icons circle-footer icon-blogger"><span class="label">Blogger</span></a>
			  <a target="_blank" href="https://plus.google.com/u/0/115246479691012654876" class="footer_li icons circle-footer icon-google-plus"><span class="label">Google+</span></a>
			</div>
		  </footer>	
	    </div><!-- /scroller-inner -->
      </div><!-- /scroller -->
	</div><!-- /pusher -->
  </div><!-- /container -->

  <script src="../../../assets/js/mlpushmenu.js"></script>
  <script>
  	  // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );

  </script>
</body>
<style>


</style>
<?php
}
	else
{
	echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../index.php?Acceso Denegado'</script>";
} 
?> 
</html>
