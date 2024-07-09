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
	<title>Registrar Alimentacion</title>
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
                <h1 class="banner_h1">Registrar Alimentación</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
		  <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                <div class="formulario formulario_mediano">

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="encasetamiento">Encasetamiento<span class="form-asterisk"></span></label>
                      <select class="form-control" name="encasetamiento" onclick="validar_encasetamiento()" id="encasetamiento">
                        <option value="Selecciona">Seleccionar Encasetamiento</option>
                          <?php

							$local   = "localhost";
							$usuario = "root";
							$contra  = "";
							$bd      = "siavicol";

							$conexion = mysqli_connect($local, $usuario, $contra, $bd);
							$query    = "SELECT encasetamiento.idEncasetamiento, NombreGalpon FROM `encasetamiento` INNER JOIN galpon on encasetamiento.idGalpon=galpon.idGalpon group by NombreGalpon";
							$resource = mysqli_query($conexion, $query);
							while ($fila = mysqli_fetch_row($resource)) {
    							echo "<option value='$fila[0]'>$fila[1]</option>";

							}
							?>
                      </select>
                    </div>
        		  </div>

        		  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="articulo">Articulo<span class="form-asterisk"></span></label>
                      <select class="form-control" name="articulo" onclick="validar_articulo()" id="articulo">
                        <option value="Selecciona">Selecciona</option>
                          <?php

							$local   = "localhost";
							$usuario = "root";
							$contra  = "";
							$bd      = "siavicol";

							$conexion = mysqli_connect($local, $usuario, $contra, $bd);
							$query    = "SELECT * FROM `articulos`";
							$resource = mysqli_query($conexion, $query);
							while ($fila = mysqli_fetch_row($resource)) {
    							echo "<option value='$fila[0]'>$fila[3]</option>";

							}
							?>
                        </select>
                    </div>
        		  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="cantidad">Cantidad Alimento<span class="form-asterisk"></span></label>
                      <input type="number" class="form-control" name="Cantidad" placeholder="Kg" id="cantidad">
 					</div>
        		  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="fecha_Alimentacion">Fecha</label>
                      <input type="button" class="form-control" name="Fecha" id="fecha_Alimentacion">
					</div>
        		  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="hora_Alimentacion">Hora<span class="form-asterisk"></span></label>
                      <input type="button" class="form-control" name="Hora" id="hora_Alimentacion">
                    </div>
        		  </div>

				  <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        			  <div class="modal-content">
           			  	<div class="header_buscar">
          				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            			  <h3 class="header_buscar-titulo">Buscar Alimentación</h3>
           			  	</div>
           				<div class="modal-body">
   						  <label for="galpon_produccion">Selecciona Encasetamiento</label>
					      <select name="" id="galpon_produccion" onclick='mostrar_fecha()' class="form-control">
				 	       <option value="Selecciona">Selecciona</option>
						      <?php

						      $local   = "localhost";
						      $usuario = "root";
						      $contra  = "";
						      $bd      = "siavicol";

						      $conexion = mysqli_connect($local, $usuario, $contra, $bd);
						      $query    = "SELECT galpon.idGalpon, NombreGalpon FROM `alimentacion` INNER JOIN encasetamiento ON alimentacion.idEncasetamiento=encasetamiento.idEncasetamiento
						      INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon group by NombreGalpon";
						      $resource = mysqli_query($conexion, $query);
						      while ($fila = mysqli_fetch_row($resource)) {
    						      echo "<option value='$fila[0]' >$fila[1]</option>";

						      }
						      ?>

					      </select>

						  <div id="contenedor_fecha"></div>
						  <div id="contenedor_hora"></div>
       					</div>
      			      </div>
   				    </div>
			      </div>

				  <div id="resultado"></div>
                  <div class="col-xs-12 ">
                    <div class="box">
					  <button class="button button--Registrar" title="Guardar" type="button" value="registrar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					  <button class="button button--Nuevo_Registro" title="Nuevo Registro" type="button" value="nuevo registro" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>

					  <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" type="button" value="consultar" onclick="Buscar_Alimentacion()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					  <button class="button button--Actualizar" title="Actualizar" type="button" value="actualizar" onclick="actualizar()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

					  <a class="button button--Consultar" title="Consultar Registros" href="../Consultar/Cons_Alimentacion.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>

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
$(document).on("ready", inicio);
//AQUI ABAJO ES PARA HACER QUE SUME LAS BASES AUTOMATICAMENTE
function Buscar_Alimentacion() {
    $("#buscar_galpon").modal("show");
}
//PARA REALIZAR ESO EN TIEMPO REAL
function inicio() {
    var encasetamiento = document.getElementById("encasetamiento").value;
    var articulo = document.getElementById("articulo").value;
    var cantidad = document.getElementById("cantidad").value;;
    $(document).keyup(total_huevos);
    $("#articulo").keyup(validar_articulo);
    $("#cantidad").keyup(validar_cantidad);
    $("#encasetamiento").keyup(validar_encasetamiento);
    var hoy = new Date();
    var dd = hoy.getDate();
    var mm = hoy.getMonth() + 1; //hoy es 0!
    var yyyy = hoy.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    hoy = yyyy + '/' + mm + '/' + dd;
    var hora_fecha = new Date();
    var hora = hora_fecha.getHours();
    var minuto = hora_fecha.getMinutes();
    var segundos = hora_fecha.getSeconds();
    var hora_fecha = +hora + ':' + minuto + ':' + segundos;
    var fecha_produccion = document.getElementById('fecha_Alimentacion').value = hoy;
    var hora_produccion = document.getElementById('hora_Alimentacion').value = hora_fecha;
};

function total_huevos() {
    var huevos_buenos = document.getElementById('huevos_buenos').value;
    var cantidad_huevos = document.getElementById('cantidad_huevos').value;
    var total = document.getElementById('total').value = huevos_buenos;
    var cantidad_huevos_malos = document.getElementById('cantidad_huevos_malos').value = cantidad_huevos - huevos_buenos;
}

function mostrar_fecha() {
    var galpon_produccion = document.getElementById("galpon_produccion").value;
    $("#contenedor_fecha").load("mostrar_fecha1.php", {
        galpon_produccion: galpon_produccion
    })
}

function mostrar_hora() {
    var galpon_produccion = document.getElementById("galpon_produccion").value;
    var fecha_produccion_select = document.getElementById("fecha_produccion_select").value;
    $("#contenedor_hora").load("mostrar_hora1.php", {
        galpon_produccion: galpon_produccion,
        fecha_produccion_select: fecha_produccion_select
    })
}

function nuevo_registro() {
    var encasetamiento = document.getElementById("encasetamiento").value = "Selecciona";
    var articulo = document.getElementById("articulo").value = "Selecciona";
    var cantidad = document.getElementById("cantidad").value = "";
    inicio();
}

function actualizar() {
    if (validar_encasetamiento() == true && validar_articulo() == true && validar_cantidad() == true) {
        var idAlimentacion = document.getElementById("idAlimentacion").value;
        var encasetamiento = document.getElementById("encasetamiento").value;
        var articulo = document.getElementById("articulo").value;
        var cantidad = document.getElementById("cantidad").value;
        var fecha_Alimentacion = document.getElementById("fecha_Alimentacion").value;
        var hora_Alimentacion = document.getElementById("hora_Alimentacion").value;
        $("#resultado").load("Actualizar/Actu_Alimentacion.php", {
            idAlimentacion: idAlimentacion,
            encasetamiento: encasetamiento,
            articulo: articulo,
            cantidad: cantidad,
            fecha_Alimentacion: fecha_Alimentacion,
            hora_Alimentacion: hora_Alimentacion
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

function enviar() {
    if (validar_encasetamiento() == true && validar_articulo() == true && validar_cantidad() == true) {
        var encasetamiento = document.getElementById("encasetamiento").value;
        var articulo = document.getElementById("articulo").value;
        var cantidad = document.getElementById("cantidad").value;
        var fecha_Alimentacion = document.getElementById("fecha_Alimentacion").value;
        var hora_Alimentacion = document.getElementById("hora_Alimentacion").value;
        $("#resultado").load("conexion/Conex_Alimentacion.php", {
            encasetamiento: encasetamiento,
            articulo: articulo,
            cantidad: cantidad,
            fecha_Alimentacion: fecha_Alimentacion,
            hora_Alimentacion: hora_Alimentacion
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

function consultar_alimentacion() {
    var idAlimentacion = document.getElementById("idAlimentacion").value;
    $("#resultado").load("Cons_Registro/Cons-Registro_Alimentacion.php", {
        idAlimentacion: idAlimentacion
    })
}

function validar_encasetamiento() {
    var encasetamiento = document.getElementById("encasetamiento").value;
    if (encasetamiento == "Selecciona") {
        var encasetamiento = document.getElementById("encasetamiento").style.border = "2px solid red";
        return false;
    } else {
        var encasetamiento = document.getElementById("encasetamiento").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_articulo() {
    var articulo = document.getElementById("articulo").value;
    if (articulo == "Selecciona") {
        var articulo = document.getElementById("articulo").style.border = "2px solid red";
        return false;
    } else {
        var articulo = document.getElementById("articulo").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_cantidad() {
    var cantidad = document.getElementById("cantidad").value;
    var cantidad = document.getElementById("cantidad").value;
    if (cantidad == null || cantidad.length == 0 || /^\s+$/.test(cantidad) || cantidad < 0) {
        var cantidad = document.getElementById("cantidad").style.border = "2px solid red";
        return false;
    } else if (isNaN(cantidad) == true) {
        var cantidad = document.getElementById("cantidad").style.border = "2px solid red";
        return false;
    } else {
        var cantidad = document.getElementById("cantidad").style.border = "2px solid #4caf50";
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
