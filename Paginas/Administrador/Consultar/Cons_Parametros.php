<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{	
	include '../include/conexion.php';
	$usuario=($_SESSION['ADMINISTRADOR']);

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
	<title>Consultar Parametros</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css"/>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css"/>
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css"/>
	
	<script type="text/javascript" src="../../../assets/js/modernizr.custom.js"></script>
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
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Marcas_Articulos.php">Registrar Marcas De Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Articulos.php">Registrar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Inventario.php">Registrar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Parametros.php">Registrar Parámetros</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Usuarios.php">Registrar Usuarios</a></li>
				</ul>
			  </div>
			</li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-search12" href="#">Consultar</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-search12">Consultar</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="Cons_Galpon.php">Consultar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Encasetamiento.php">Consultar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Produccion.php">Consultar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Alimentacion.php">Consultar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Mortalidad.php">Consultar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Articulos.php">Consultar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Inventario.php">Consultar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Parametros.php">Consultar Parámetros</a></li>
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
			  <a class="a_m icon_m icon-settings" href="#">Configuración</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-settings">Configuración</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../Configuracion/Configurar_Usuarios/Configurar_Usuarios.php">Configurar Usuarios</a></li>
				  <li class="li_m"><a class="a_m" href="../Configuracion/Copia_Seguridad/Copia_Seguridad.php">Copia De Seguridad</a></li>
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
                <h1 class="banner_h1">Consultar Parametros</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
								<!-- tabla-->
		    <div class="container">
		      <div class="row">
                <div class="col-xs-12 col-lg-8 col-lg-offset-3">	
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="">Seleccione Manual</label>
                      <select class="form-control" id="manual">
					    <option value="Selecciona" >Selecciona</option>
			              <?php 
							
			    		    $local="localhost";
			    		    $usuario="root";
			    		    $contra="";
			    		    $bd="siavicol";

			    		    $conexion=mysqli_connect($local,$usuario,$contra,$bd);
			    		    $query="SELECT * FROM `manuales`"; 
			    		    $resource=mysqli_query($conexion,$query);
			    		    while ($fila=mysqli_fetch_row($resource)) {
				    		    echo "<option value='$fila[0]' data-dismiss='modal' >$fila[1]</option>";
			    			    }
			  		       ?>
                      </select>
                    </div>
                  </div>      

                  <div class="col-xs-12 col-md-6">
                    <div class="form-group">   	
                      <button class="button button--Consultar" title="consultar parametros de manual " value="Consulta" onclick="consultar()"><i class="button__icon icon_b icon-search12"></i><span>consultar manuales</span></button>
				   
				    </div>
				  </div> 

			    </div>
				
				<div id="contenedor" class=" col-xs-12 container-t" ></div>

			  </div>
			</div>  

          <div class="box">
			<a class="button button--Registrar" title="volver a registrar" href="../Registrar/Reg_Parametros.php" ><i class="button__icons icon_b icon-reply-arrow"></i><span>volver a Registrar</span></a>	
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
	<script type="text/javascript" src="../../../assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/plugins/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/plugins/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
	  // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	  // para que funcione el dataTable

	  function consultar() {

	  var manual=document.getElementById('manual').value;

	  $("#contenedor").load("Conexion/Conex_Consu-parametros.php",{manual:manual});

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
