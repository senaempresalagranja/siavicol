<?php
session_start();
if (isset($_SESSION['ADMINISTRADOR']))
{	
	include '../../include/conexion.php';
	$usuario=($_SESSION['ADMINISTRADOR']);

	$res=mysql_query("SELECT * FROM usuarios WHERE idUsuario=$usuario");
        while ($reg=mysql_fetch_array($res)) 
        {
          $nomusua_usua=utf8_decode($reg[1]);
          $rolusua=utf8_decode($reg[2]);
         }
         $saludo="Bienvenido $nomusua_usua, a el Rol del $rolusua";	

       	 include 'Connet.php'; //esto esta es la conexion de la base de datos 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Copia De Seguridad</title>
	<link rel="shortcut icon" href="../../../../assets/img/Logo_Siavicol.ico"> <!-- favicon Que tiene cada pagina -->

	<link rel="stylesheet" type="text/css" href="../../../../assets/css/icons.css"/> <!-- Los iconos De Las Paginas -->
	<link rel="stylesheet" type="text/css" href="../../../../assets/css/component.css"/> <!-- Los estilos css de cada pagina -->
	<link rel="stylesheet" type="text/css" href="../../../../assets/css/bootstrap.min.css"/> <!-- El bootstrap.css se uso para las cajas para formularios -->
	<link rel="stylesheet" type="text/css" href="../../../../assets/css/sweetalert2.min.css"/> <!-- Son los estilos para las alertas personalizadas -->

  	<script type="text/javascript" src="../../../../assets/js/modernizr.custom.js"></script> <!-- Es componente vital para el menú de navegación -->
	<script type="text/javascript" src="../../../../assets/js/jquery-2.1.4.min.js"></script> <!-- Sirve para las funciones importantes -->
	<script type="text/javascript" src="../../../../assets/js/bootstrap.min.js"></script> <!-- Es para otras Funciones importantes --> 
  	<script type="text/javascript" src="../../../../assets/js/sweetalert2.min.js"></script> <!-- Para que las alertas personalizadas funcionen -->
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
            <li class="li_m"><a class="a_m icon_m icon-house-outline" href="../../inicio/Bienvenidos.php">Inicio</a></li>
	
			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-document-edit2" href="#">Registrar</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-document-edit2">Registrar</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Galpon.php">Registrar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Encasetamiento.php">Registrar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Produccion.php">Registrar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Alimentacion.php">Registrar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Mortalidad.php">Registrar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Tipo_Insumo.php">Registrar Tipos De Insumo</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Marcas_Articulos.php">Registrar Marcas De Articulos</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Articulos.php">Registrar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Inventario.php">Registrar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Parametros.php">Registrar Parámetros</a></li>
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Usuarios.php">Registrar Usuarios</a></li>
				</ul>
			  </div>
			</li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-search12" href="#">Consultar</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-search12">Consultar</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Galpon.php">Consultar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Encasetamiento.php">Consultar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Produccion.php">Consultar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Alimentacion.php">Consultar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Mortalidad.php">Consultar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Articulos.php">Consultar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Inventario.php">Consultar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="../../Consultar/Cons_Parametros.php">Consultar Parámetros</a></li>
				</ul>
			  </div>
			</li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-area-chart" href="#">Comparación De Parámetros</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-news">Comparación De Parámetros</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../../comparacion_parametros/Comparar_Produccion.php">Comparar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../../comparacion_parametros/Comparar_Mortalidad.php">Comparar Mortalidad</a></li>
				</ul>
			  </div>
			</li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-settings" href="#">Configuración</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-settings">Configuración</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="../Configurar_Usuarios/Configurar_Usuarios.php">Configurar Usuarios</a></li>
				  <li class="li_m"><a class="a_m" href="Copia_Seguridad.php">Copia De Seguridad</a></li>
				</ul>
			  </div>
			</li>
							
			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-help" href="#">Ayuda</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-help">Ayuda</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m icon_m icon-info-large" href="../../Ayuda/Acerca_De.php">Acerca De</a></li>
				  <li class="li_m"><a class="a_m icon_m icon-code2" href="../../Ayuda/Desarrolladores.php">Desarrolladores</a></li>
				  <li class="li_m"><a class="a_m icon_m icon-book" href="../../Ayuda/Manual_De_Usuario.php">Manual De Usuario</a></li>	
				</ul>
			  </div>
			</li>
			<li class="li_m"><a class="a_m icon_m icon-exit2" href="../../include/cerrar.php">Cerrar Sesión</a></li>
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
                <img class="logo_siavicol" src="../../../../assets/img/Logo_Siavicol.png" alt=""> 
                <h1 class="banner_h1">Copia De Seguridad</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12  col-md-6 col-lg-offset-3 formulario_pequeño" data-form-type="formoid">	
                <div class="col-xs-12  col-md-8 col-lg-offset-2">	
				  <h3 class="text-center titulo_section">Crear Copia de Seguridad</h3>
				</div>

				<div class="col-xs-12">
				  <div class="box">
				    <button class="button button--Crear_backup" title="Guardar" onclick="backup()" type="button"><i class="button__icon icon_b icon-data"></i><span>Guardar</span></button>
				  </div>
				</div>

  			  	<div id="contenedor"></div>

				<div class="col-xs-12  col-md-8 col-lg-offset-2">
				  <h3 class=" text-center titulo_section">Restaurar Copia de seguridad </h3>
				</div>



				<div class="col-xs-12  col-md-8 col-lg-offset-2">
				  <div class="form-group">
					<label class="form-control-label" for="">Seleciona un punto de restauracion</label>

					<select name="restaurar" id="restaurar" class="form-control">
					  <option value="Selecciona" >Selecciona</option>
						<?php
						  $ruta=BACKUP_PATH;
						  if(is_dir($ruta)){
				    		  if($aux=opendir($ruta)){
				        		  while(($archivo = readdir($aux)) !== false){
				            		  if($archivo!="."&&$archivo!=".."){
				                		  $nombrearchivo=str_replace(".sql", "", $archivo);
				                		  $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                		  $ruta_completa=$ruta.$archivo;
				                		  if(is_dir($ruta_completa)){
				                		  }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                		  }
				            		  }
				        		  }
				        		  closedir($aux);
				    		  }
						  }else{
				    		  echo $ruta." No es ruta válida";
						  }
						?>
					</select>
				  </div>	
			    </div>

			    <div class="col-xs-12 text-center" id="contenedor2">
		          <h3  id="espere" style="font-weight: bold; font-size: 20px"> <i class="icons icon-spinner6 " style="color: #2196f3;"></i> Por favor Espere Restaurando Copia De Seguridad</h3>
				</div>

				<div class="col-xs-12">
				  <div class="box">
					<button class="button button--Actualizar" title="Guardar" onclick="restaurar()" type="button"><i class="button__icon icon_b icon-restore_page"></i><span>Guardar</span></button>
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
  
	<script src="../../../../assets/js/mlpushmenu.js"></script> <!-- es otra parte vital del menú navegación -->
 

	<script>
      // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );

	</script>
	<script>






var espere=document.getElementById('espere').style.display='none';
	
function restaurar() {

		var restaurar=document.getElementById('restaurar').value;
	if (restaurar=="Selecciona") {
swal({
  	title: 'Error!',
  	text: "Selecciona Un Punto de Restauracion",
  	type: 'error',
  	background: '#fff url(../../../../assets/img/Huevo3.png)',
  	confirmButtonColor: '#ff9800'


	})


	}else{
var restaurar=document.getElementById('restaurar').value;
var espere=document.getElementById('espere').style.display='block';
$("#contenedor2").load("Restore.php",{restaurar:restaurar});
		
	}




}

function backup(){


$("#contenedor").load('Backup.php');
}

</script>

<!-- para bloquear el clic derecho  -->
       <!-- <script>
         $(document).ready(function(){
    $(document).bind("contextmenu", function(e){
        return false;
    });
});

         
       </script>


para bloquear la combinacion de teclas
       <script>
         $(document).ready(function(){
    $(document).bind("keydown","Ctrl+shift+i", function(e){
        return false;
    });
});
	
	
         
    </script> -->
<?php
}
	else
{
	echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../../index.php?Acceso Denegado'</script>";
} 
?>
</body>	
</html>

