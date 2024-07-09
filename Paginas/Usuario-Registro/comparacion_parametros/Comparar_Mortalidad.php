<?php
session_start();
if (isset($_SESSION['USUARIO_REGISTRO']))
{	
	include '../include/conexion.php';
	$usuario=($_SESSION['USUARIO_REGISTRO']);

	$res=mysql_query("SELECT * FROM usuarios WHERE idUsuario=$usuario");
        while ($reg=mysql_fetch_array($res)) 
        {
          $nomusua_usua=utf8_decode($reg[1]);
          $rolusua=utf8_decode($reg[2]);
         }
         $saludo="Bienvenido $nomusua_usua, a el Rol del $rolusua";			
?>
<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Comparar Mortalidad</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css"/>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css"/>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css"/>
	<style type="text/css">
	  ${demo.css}
    </style>
	
	<script type="text/javascript" src="../../../assets/js/modernizr.custom.js"></script>
	<script type="text/javascript" src="../../../assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/Highcharts/highcharts.js"></script>
	<script type="text/javascript" src="../../../assets/js/Highcharts/exporting.js"></script>
	<!-- <script type="text/javascript" src="../../../assets/js/Highcharts/themes/sand-signika.js"></script> -->

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
			  <a class="a_m icon_m icon-document-edit2" href="#">Registrar</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-document-edit2">Registrar</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Galpon.php">Registrar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Encasetamiento.php">Registrar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Produccion.php">Registrar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Alimentacion.php">Registrar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Mortalidad.php">Registrar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Tipo_Insumo.php">Registrar Tipos De Insumo</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Marcas_Articulos.php">Registrar Marcas De Articulos</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Articulos.php">Registrar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Inventario.php">Registrar Inventario</a></li>	  
				</ul>
			  </div>
			</li>

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
				  <li class="li_m"><a class="a_m" href="Comparar_Produccion.php">Comparar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="Comparar_Mortalidad.php">Comparar Mortalidad</a></li>
				</ul>
			  </div>
			</li>
							
			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-help" href="#">Ayuda</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-help">Ayuda</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m icon_m icon-info-large" href="../Ayuda/Acerca_De.php">Acerca De</a></li>
				  <li class="li_m"><a class="a_m icon_m icon-code2" href="../Ayuda/Desarrolladores.php">Desarrolladores</a></li>
				  <li class="li_m"><a class="a_m icon_m icon-book" href="../Ayuda/Manual_De_Usuario.php">Manual De Usuario</a></li>	
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
                <h1 class="banner_h1">Comparar Mortalidad</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
		  		  <label class="form-control-label" for="">Selecciona Encasetamiento</label>
		  		  <select class="form-control" name="" id="id_encasetamiento" onclick='mostrar_semanas()'>
		    		  <option value="Seleccion">Selecciona</option>
            		  <?php 
							
			   		    $local="localhost";
			   		    $usuario="root";
			   		    $contra="";
			   		    $bd="siavicol";

			   		    $conexion=mysqli_connect($local,$usuario,$contra,$bd);
			   		    $query="SELECT encasetamiento.idEncasetamiento, galpon.NombreGalpon FROM `encasetamiento`  INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon GROUP BY encasetamiento.idEncasetamiento";
			   		    $resource=mysqli_query($conexion,$query);
			   		    while ($fila=mysqli_fetch_row($resource)) {
				   		    echo "<option value='$fila[0]' >$fila[1]</option>";
								
				   		}
		    		?>

		  		  </select>
		  		</div>
		  	  </div> 

		  	  <div class="col-xs-12 col-md-3">
                <div class="form-group">
				  <div id="contenedor_semanas"></div>
			    </div>
			  </div>	  
		  		
		  	  <button type="button" title="Graficar" class="button button--Graficar" value="graficar produccion" onclick="graficar()"><i class="button__icon icon_b icon-area-chart"></i><span>Graficar</span></button>

			  <div class="col-xs-12 ">
                <div class="form-group">
		  		  <div id="container" class="container-G"></div>
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

	<script type="text/javascript" src="../../../assets/js/mlpushmenu.js"></script>

	<script type="text/javascript">
	  // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	  function mostrar_semanas() {
	  	
	  	 

	  	 var id_encasetamiento=document.getElementById("id_encasetamiento").value;

	  	$("#contenedor_semanas").load("Mostrar_Semanas/mostrar_semanas1.php",{id_encasetamiento:id_encasetamiento})


	  }
	  // Para poder graficar 
	  function graficar() {
		  var id_encasetamiento=document.getElementById("id_encasetamiento").value;
		  var semanas=document.getElementById("semanas").value;

		  if (semanas=="Todas") {

	  $("#container").load("Graficar/Grafi_Mortalidad.php",{id_encasetamiento:id_encasetamiento,semanas:semanas});
		
		  }else{

	  $("#container").load("Graficar_Filtro/graficar_filtro1.php",{id_encasetamiento:id_encasetamiento,semanas:semanas});

		  }
	  }


	</script>	
	<?php
}
	else
{
	echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../index.php?Acceso Denegado'</script>";
} 
?>	
</body>
</html>
