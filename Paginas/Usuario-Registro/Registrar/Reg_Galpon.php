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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registrar Galpon</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico"> <!-- favicon Que tiene cada pagina -->

	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css"/> <!-- Los iconos De Las Paginas -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css"/> <!-- Los estilos css de cada pagina -->
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
        <a class="a_m icon_m icon-document-edit2" href="#">Registrar</a>
        <div class="mp-level">
        <h2 class="h2_m icon_m icon-document-edit2">Registrar</h2>
        <a class="a_m mp-back" href="#">Volver</a>
        <ul class="ul_m">
          <li class="li_m"><a class="a_m" href="Reg_Galpon.php">Registrar Galpón</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Encasetamiento.php">Registrar Encasetamiento</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Produccion.php">Registrar Producción</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Alimentacion.php">Registrar Alimentación</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Mortalidad.php">Registrar Mortalidad</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Tipo_Insumo.php">Registrar Tipos De Insumo</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Marcas_Articulos.php">Registrar Marcas De Articulos</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Articulos.php">Registrar Artículos</a></li>
          <li class="li_m"><a class="a_m" href="Reg_Inventario.php">Registrar Inventario</a></li>   
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
                <h1 class="banner_h1">Registrar Galpón</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-8 col-lg-offset-2" data-form-type="formoid">
				<div class="formulario-pequeño">
        		  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Nombre_Galpon">Nombre Del Galpón</label>
                      <input type="text" class="form-control" name="NombreGalpon" id="Nombre_Galpon">
             		</div>
               	  </div>

        		  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Extencion_Galpon">Extensión Galpón<sup class="sup">m<sup>2</sup></sup></label>
                      <input type="number" class="form-control" name="ExtensionGalpon" id="Extension_Galpon">
                    </div>
               	  </div>

        		  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Cantidad_Animales">Cantidad De Gallinas</label>
                      <input type="number" class="form-control" name="CantidadAnimales" id="Cantidad_Animales">
                   	</div>
               	  </div>
							
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Estado">Estado</label>
                      <select class="form-control" name="Estado" id="Estado">
                        <option value="Selecciona" onclick="validar_estado()" >Selecciona Estado Del Galpón</option>
                        <option value="Activo" onclick="validar_estado()">Disponible </option>
                        <option value="Inactivo" onclick="validar_estado()">No Disponible </option>
                      </select>
               		</div>
               	  </div>

				  <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        			  <div class="modal-content">
          				<div class="header_buscar">
          				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            			  <h3 class="header_buscar-titulo">Buscar Galpon</h3>
          				</div>
          				<div class="modal-body">   
          				  <label class="form-control-label" for="galpon">Selecciona Galpón</label>
		    			    <select name="" id="galpon" onclick='consultar_galpon()' class="form-control">
		                    <option value="Selecciona">Selecciona</option>
			  				  <?php 
							
			    				  $local="localhost";
			    				  $usuario="root";
			    				  $contra="";
			    				  $bd="siavicol";

			    				  $conexion=mysqli_connect($local,$usuario,$contra,$bd);
			    				  $query="SELECT * FROM galpon"; 
			    				  $resource=mysqli_query($conexion,$query);
			    				while ($fila=mysqli_fetch_row($resource)) {
				    				  echo "<option value='$fila[0]' data-dismiss='modal' >$fila[1]</option>";
			    				  }
			  			      ?>
		    			    </select>
          				</div>
        			  </div>
      				</div>
                  </div>

               	  <div id="resultado"></div>

        		  <div class="col-xs-12 ">	
					<div class="box">
					  <button class="button button--Registrar" title="Guardar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					  <button class="button button--Nuevo_Registro" title="Nuevo Registro" value="NUEVO REGISTRO" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>

					  <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" value="CONSULTAR" onclick="buscar_galpon()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					  <button class="button button--Actualizar" title="Actualizar" value="ACTUALIZAR" onclick="actualizar_galpon()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

					  <a class="button button--Consultar" title="Consultar Registros" href="../Consultar/Cons_Galpon.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>

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
  
	<script src="../../../assets/js/mlpushmenu.js"></script> <!-- es otra parte vital del menú navegación -->
 

	<script>
      // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );

	  function enviar() {
    if (validar_nombre() == true && validar_extension() == true && validar_animales() == true && validar_estado() == true) {
        var Nombre_Galpon = document.getElementById("Nombre_Galpon").value;
        var Extension_Galpon = document.getElementById("Extension_Galpon").value;
        var Cantidad_Animales = document.getElementById("Cantidad_Animales").value;
        var Estado = document.getElementById("Estado").value;
        Nombre_Galpon = Nombre_Galpon.toUpperCase();
        $("#resultado").load("conexion/Conex_Galpon.php", {
            Nombre_Galpon: Nombre_Galpon,
            Extension_Galpon: Extension_Galpon,
            Cantidad_Animales: Cantidad_Animales,
            Estado: Estado
        });
    } else {
        swal({
            title: 'Error!',
            text: "Algunos Campos Están Vacíos O Incorrectos",
            type: 'error',
            background: '#fff url(../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
        })
    }
}

function actualizar_galpon() {
    if (validar_nombre() == true && validar_extension() == true && validar_animales() == true && validar_estado() == true) {
        var galpon = document.getElementById("galpon").value;
        var Nombre_Galpon = document.getElementById("Nombre_Galpon").value;
        var Extension_Galpon = document.getElementById("Extension_Galpon").value;
        var Cantidad_Animales = document.getElementById("Cantidad_Animales").value;
        var Estado = document.getElementById("Estado").value;
        Nombre_Galpon = Nombre_Galpon.toUpperCase();
        $("#resultado").load("Actualizar/Actu_Galpon.php", {
            galpon: galpon,
            Nombre_Galpon: Nombre_Galpon,
            Extension_Galpon: Extension_Galpon,
            Cantidad_Animales: Cantidad_Animales,
            Estado: Estado
        });
    } else {
        swal({
            title: 'Error!',
            text: "Algunos Campos Están Vacíos O Incorrectos",
            type: 'error',
            background: '#fff url(../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
        })
    }
}

function consultar_galpon() {
    var galpon = document.getElementById("galpon").value;
    $("#resultado").load("Cons_Registro/Cons-Registro_Galpon.php", {
        galpon: galpon
    })
}

function nuevo_registro() {
    var Nombre_Galpon = document.getElementById("Nombre_Galpon").value = "";
    var Extension_Galpon = document.getElementById("Extension_Galpon").value = "";
    var Cantidad_Animales = document.getElementById("Cantidad_Animales").value = "";
    var Estado = document.getElementById("Estado").value = "Selecciona";
    var Nombre_Galpon = document.getElementById("Nombre_Galpon").focus();
}

function buscar_galpon() {
    $("#buscar_galpon").modal("show");
}
$(document).ready(inicio);

function inicio() {
    $("#Extension_Galpon").keyup(validar_extension);
    $("#Extension_Galpon").keyup(calcular_animales);
    $("#Cantidad_Animales").keyup(calcular_extension);
    $("#Cantidad_Animales").keyup(validar_animales);
    $("#Nombre_Galpon").keyup(validar_nombre);
    $("#Estado").keyup(validar_estado);
    $("#mostrarmodal").modal("show");
}

function calcular_animales() {
    var Extension_Galpon = document.getElementById("Extension_Galpon").value;
    if (Extension_Galpon <= 0) {} else {
        var Cantidad_Animales = document.getElementById("Cantidad_Animales").value = Extension_Galpon * 8;
    }
}

function calcular_extension() {
    var Cantidad_Animales = document.getElementById("Cantidad_Animales").value;
    if (Cantidad_Animales <= 0) {} else {
        var Extension_Galpon = document.getElementById("Extension_Galpon").value = Cantidad_Animales / 8;
    }
}

function validar_nombre() {
    var Nombre_Galpon = document.getElementById("Nombre_Galpon").value;
    if (Nombre_Galpon.length == 0) {
        var Nombre_Galpon = document.getElementById("Nombre_Galpon").style.border = "2px solid red";
        return false;
    } else {
        var Nombre_Galpon = document.getElementById("Nombre_Galpon").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_extension() {
    var Extension_Galpon = document.getElementById("Extension_Galpon").value;
    if (Extension_Galpon <= 0) {
        var Extension_Galpon = document.getElementById("Extension_Galpon").style.border = "2px solid red";
        return false;
    } else if (isNaN(Extension_Galpon) == true) {
        var Extension_Galpon = document.getElementById("Extension_Galpon").style.border = "2px solid red";
        return false;
    } else {
        var Extension_Galpon = document.getElementById("Extension_Galpon").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_animales() {
    var Cantidad_Animales = document.getElementById("Cantidad_Animales").value;
    if (Cantidad_Animales <= 0) {
        var Cantidad_Animales = document.getElementById("Cantidad_Animales").style.border = "2px solid red";
        return false;
    } else if (isNaN(Cantidad_Animales) == true) {
        var Cantidad_Animales = document.getElementById("Cantidad_Animales").style.border = "2px solid red";
        return false;
    } else {
        var Cantidad_Animales = document.getElementById("Cantidad_Animales").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_estado() {
    var Estado = document.getElementById("Estado").value;
    if (Estado == "Selecciona") {
        var Estado = document.getElementById("Estado").style.border = "2px solid red";
        return false;
    } else {
        var Estado = document.getElementById("Estado").style.border = "2px solid #4caf50";
        return true;
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
