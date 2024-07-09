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
	<title>Acerca De</title>
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
                <h1 class="banner_h1">Acerca De</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->			
		  <div class="container">
  	        <div class="row">
  	          <div class="col-xs-12 col-lg-8 col-lg-offset-2 formulario">

  	            <h4 class="min_titulo">Versión </h4>
  	            <p class="min_parrafos">1.0</p>
  	            <h4 class="min_titulo">Grupo Desarrollador</h4>
  	            <p class="min_parrafos">Siavicol está desarrollado por por el grupo DEVELOPERS OF THE FUTURE de ADSI 1096123, un grupo de aprendices que recibieron formación en Análisis y Desarrollo de Sistemas de Información en el Centro Agropecuario "La Granja", SENA Regional-Tolima</p>
			    <h4 class="min_titulo">Implementación del sistema </h4>
			 	   <p class="min_parrafos">Deasarrolladores :
			 	<br>
			 		<li class="min_list">Andres Felipe Henao Salazar</li>

			 		<li class="min_list">Alexi Espinosa Vidal</li>

			 		<li class="min_list">Cristian Camilo Serrano Ramirez</li>

			 		<li class="min_list">Jhoan sebastian Leal Hernades</li> </p>

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
