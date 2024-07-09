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
	<title>Registrar Produccion</title>
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
                <h1 class="banner_h1">Registrar Producción</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
		  <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">				

                <div class="formulario">
				  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="encasetamiento">Encasetamiento</label>
                      <select class="form-control" name="idEncasetamiento" id="encasetamiento">
                        <option value="Seleciona" onclick='validar_encasetamiento()'>Selecionar Encasetamiento</option>
                          <?php 
							
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT encasetamiento.idEncasetamiento, NombreGalpon FROM `encasetamiento` INNER JOIN galpon on encasetamiento.idGalpon=galpon.idGalpon group by NombreGalpon";
							 $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]' onclick='validar_encasetamiento()'>$fila[1]</option>";
								
							  }
						  ?>
                      </select>
                    </div>
                  </div>

        		  <div class="col-xs-12 col-md-4">
                    <div class="form-group">	
                      <label class="form-control-label" for="usuario">Responsable</label>
                      <input type="text" name="" id="responsable" class="form-control">

                    </div>
                  </div>	
        					
							
				  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="fecha_produccion">Fecha</label>
                      <input type="button" class="form-control" name="Fecha" id="fecha_produccion">
					</div>
                  </div>
							
				  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="hora_produccion">Hora</label>
                      <input type="button" class="form-control" name="Hora" id="hora_produccion">
                    </div>
                  </div>
							 	 

                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">	
                      <label class="form-control-label" for="cantidad_huevos_no_comerciales">Huevos No Comerciales</label>
                      <input type="number" class="form-control" name="CantidadHuevosNoComerciales" id="cantidad_huevos_no_comerciales">
 				    </div>
                  </div>

				  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="huevo_tipo_A">Huevos Tipo A <span class="sup">59.0 - 59.9 g</span></label>
                      <input type="number" class="form-control" name="CantidadTipoA" id="huevo_tipo_A">
					</div>
                  </div>

				  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="huevo_tipo_AA">Huevos Tipo AA <span class="sup">60.0 - 66.9 g</span></label>
                      <input type="number" class="form-control" name="CantidadTipoAA" id="huevo_tipo_AA">
					</div>
                  </div>

				  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="huevo_tipo_AAA">Huevos Tipo AAA <span class="sup">67.0 - 77.9 g</span></label>
                      <input type="number" class="form-control" name="CantidadTipoAAA" id="huevo_tipo_AAA">
					</div>
                  </div>

        		  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="huevo_tipo_B">Huevos Tipo B <span class="sup">46.0 - 52.9 g</span></label>
                      <input type="number" class="form-control" name="CantidadTipoB" id="huevo_tipo_B">
             	    </div>
                  </div>

        		  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="huevo_tipo_C">Huevos Tipo C <span class="sup"> < 46.0 g</span></label>
                      <input type="number" class="form-control" name="CantidadTipoC" id="huevo_tipo_C">
                    </div>
                  </div>

        		  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label class="form-control-label" for="huevo_tipo_Jumbo">Huevos Tipo Jumbo <span class="sup"> > 78.0  g</span></label>
                      <input type="number" class="form-control" name="CantidadTipoJumbo" id="huevo_tipo_Jumbo">
               	    </div>
                  </div>

                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">	
                      <label class="form-control-label" for="cantidad_huevos_comerciales">Huevos Comerciales</label>
                      <input type="button" class="form-control" name="total_huevos" id="total_huevos">
               		</div>
                  </div>

                  <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        			  <div class="modal-content">
           				<div class="header_buscar">
          				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              			  <h3 class="header_buscar-titulo">Buscar Produccion</h3>
                        </div>
           				<div class="modal-body">
           				  <label class="form-control-label" for="galpon_produccion">Seleciona EL Encasetamiento</label>
						    <select name="" id="galpon_produccion" onclick='mostrar_fecha()' class="form-control">
						      <option value="Selecciona">Selecciona</option>
						      <?php 
							
							    $local="localhost";
							    $usuario="root";
							    $contra="";
							    $bd="siavicol";

							    $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							    $query="SELECT encasetamiento.idEncasetamiento, NombreGalpon FROM `produccion` INNER JOIN encasetamiento ON produccion.idEncasetamiento=encasetamiento.idEncasetamiento INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon GROUP BY NombreGalpon"; 
							    $resource=mysqli_query($conexion,$query);
							    while ($fila=mysqli_fetch_row($resource)) {
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


                  <div id="respuesta"></div>	 
        		  <div class="col-xs-12 ">	
                    <div class="box">
                    
 					  <button class="button button--Registrar" title="Guardar" type="button" value="enviar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					  <button class="button button--Nuevo_Registro" title="Nuevo Registro" type="button" value="nuevo registro" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>

					  <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" type="button" value="CONSULTAR" onclick="buscar_galpon()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					  <button class="button button--Actualizar" title="Actualizar" type="button" value="ACTUALIZAR" onclick="actualizar()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

					  <a class="button button--Consultar" title="Consultar Registros" href="../Consultar/Cons_Produccion.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>

		
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
function actualizar() {
    if (validar_encasetamiento() == true && validar_responsable() == true && validar_no_comerciales() == true && validar_huevosA() == true && validar_huevosAA() == true && validar_huevosAAA() == true && validar_huevosB() == true && validar_huevosC() == true && validar_huevos_jumbo() == true) {
        validar_huevos_comerciales();
        var encasetamiento = document.getElementById("encasetamiento").value;
        var responsable = document.getElementById("responsable").value;
        var fecha_produccion = document.getElementById("fecha_produccion").value;
        var hora_fecha = new Date();
        var hora = hora_fecha.getHours();
        var minuto = hora_fecha.getMinutes();
        var segundos = hora_fecha.getSeconds();
        // var hora_produccion=document.getElementById('hora_produccion').value=hora_fecha;
        var hora_produccion = +hora + ':' + minuto + ':' + segundos;
        var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").value;
        var huevo_tipo_A = document.getElementById("huevo_tipo_A").value;
        var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").value;
        var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").value;
        var huevo_tipo_B = document.getElementById("huevo_tipo_B").value;
        var huevo_tipo_C = document.getElementById("huevo_tipo_C").value;
        var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").value;
        responsable = responsable.toUpperCase()
        var total_huevos = document.getElementById("total_huevos").value;
        var galpon_produccion = document.getElementById("galpon_produccion").value;
        $("#respuesta").load("Actualizar/Actu_Produccion.php", {
            id: id,
            encasetamiento: encasetamiento,
            responsable: responsable,
            fecha_produccion: fecha_produccion,
            hora_produccion: hora_produccion,
            cantidad_huevos_no_comerciales: cantidad_huevos_no_comerciales,
            huevo_tipo_A: huevo_tipo_A,
            huevo_tipo_AA: huevo_tipo_AA,
            huevo_tipo_AAA: huevo_tipo_AAA,
            huevo_tipo_B: huevo_tipo_B,
            huevo_tipo_C: huevo_tipo_C,
            huevo_tipo_Jumbo: huevo_tipo_Jumbo,
            total_huevos: total_huevos
        })
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
    $("#resultado").load("consultar_galpon.php", {
        galpon: galpon
    })
}
//PARA REALIZAR ESO EN TIEMPO REAL
function mostrar_fecha() {
    var galpon_produccion = document.getElementById("galpon_produccion").value;
    $("#contenedor_fecha").load("mostrar_fecha.php", {
        galpon_produccion: galpon_produccion
    })
}

function inicio() {
    // VALIDACIONES-----------------------------------------------------------------------
    $("#responsable").keyup(validar_responsable)
    $("#cantidad_huevos_no_comerciales").keyup(validar_no_comerciales)
    $("#huevo_tipo_A").keyup(validar_huevosA)
    $("#huevo_tipo_AA").keyup(validar_huevosAA)
    $("#huevo_tipo_AAA").keyup(validar_huevosAAA)
    $("#huevo_tipo_B").keyup(validar_huevosB)
    $("#huevo_tipo_C").keyup(validar_huevosC)
    $("#huevo_tipo_Jumbo").keyup(validar_huevos_jumbo)
    $("#total_huevos").keyup(validar_total_huevos)
    $("#cantidad_huevos_no_comerciales").keyup(validar_huevos_comerciales)
    $("#huevo_tipo_A").keyup(validar_huevos_comerciales)
    $("#huevo_tipo_AA").keyup(validar_huevos_comerciales)
    $("#huevo_tipo_AAA").keyup(validar_huevos_comerciales)
    $("#huevo_tipo_B").keyup(validar_huevos_comerciales)
    $("#huevo_tipo_C").keyup(validar_huevos_comerciales)
    $("#huevo_tipo_Jumbo").keyup(validar_huevos_comerciales)
    $("#total_huevos").keyup(validar_huevos_comerciales)
    // ---------------------------------------------------------------------------------------
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
    if (hora > 12) {
        hora = hora - 12;
        var am = "pm";
    } else {
        var am = "am"
    }
    var hora_fecha = +hora + ':' + minuto + ':' + segundos + ' ' + am;
    var fecha_produccion = document.getElementById('fecha_produccion').value = hoy;
    var hora_produccion = document.getElementById('hora_produccion').value = hora_fecha;
};

function buscar_galpon() {
    $("#buscar_galpon").modal("show");
}

function enviar() {
    if (validar_encasetamiento() == true && validar_responsable() == true && validar_no_comerciales() == true && validar_huevosA() == true && validar_huevosAA() == true && validar_huevosAAA() == true && validar_huevosB() == true && validar_huevosC() == true && validar_huevos_jumbo() == true) {
        validar_huevos_comerciales();
        var encasetamiento = document.getElementById("encasetamiento").value;
        var responsable = document.getElementById("responsable").value;
        var fecha_produccion = document.getElementById("fecha_produccion").value;
        var hora_fecha = new Date();
        var hora = hora_fecha.getHours();
        var minuto = hora_fecha.getMinutes();
        var segundos = hora_fecha.getSeconds();
        // var hora_produccion=document.getElementById('hora_produccion').value=hora_fecha;
        var hora_produccion = +hora + ':' + minuto + ':' + segundos;
        var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").value;
        var huevo_tipo_A = document.getElementById("huevo_tipo_A").value;
        var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").value;
        var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").value;
        var huevo_tipo_B = document.getElementById("huevo_tipo_B").value;
        var huevo_tipo_C = document.getElementById("huevo_tipo_C").value;
        var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").value;
        responsable = responsable.toUpperCase()
        var total_huevos = document.getElementById("total_huevos").value;
        $("#respuesta").load("conexion/Conex_Produccion.php", {
            encasetamiento: encasetamiento,
            responsable: responsable,
            fecha_produccion: fecha_produccion,
            hora_produccion: hora_produccion,
            cantidad_huevos_no_comerciales: cantidad_huevos_no_comerciales,
            huevo_tipo_A: huevo_tipo_A,
            huevo_tipo_AA: huevo_tipo_AA,
            huevo_tipo_AAA: huevo_tipo_AAA,
            huevo_tipo_B: huevo_tipo_B,
            huevo_tipo_C: huevo_tipo_C,
            huevo_tipo_Jumbo: huevo_tipo_Jumbo,
            total_huevos: total_huevos
        })
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

function mostrar_hora() {
    var galpon_produccion = document.getElementById("galpon_produccion").value;
    var fecha_produccion_select = document.getElementById("fecha_produccion_select").value;
    $("#contenedor_hora").load("mostrar_hora.php", {
        galpon_produccion: galpon_produccion,
        fecha_produccion_select: fecha_produccion_select
    })
}

function consultar_produccion() {
    var hora_produccion_select = document.getElementById("hora_produccion_select").value;
    $("#respuesta").load("Cons_Registro/Cons-Registro_Produccion.php", {
        hora_produccion_select: hora_produccion_select
    })
}

function validar_huevos_comerciales() {
    var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").value;
    var huevo_tipo_A = parseInt(document.getElementById("huevo_tipo_A").value);
    var huevo_tipo_AA = parseInt(document.getElementById("huevo_tipo_AA").value);
    var huevo_tipo_AAA = parseInt(document.getElementById("huevo_tipo_AAA").value);
    var huevo_tipo_B = parseInt(document.getElementById("huevo_tipo_B").value);
    var huevo_tipo_C = parseInt(document.getElementById("huevo_tipo_C").value);
    var huevo_tipo_Jumbo = parseInt(document.getElementById("huevo_tipo_Jumbo").value);
    var variable_total = huevo_tipo_A + huevo_tipo_AA + huevo_tipo_AAA + huevo_tipo_B + huevo_tipo_C + huevo_tipo_Jumbo;
    var total_huevos = document.getElementById("total_huevos").value = variable_total;
}

function nuevo_registro() {
    var encasetamiento = document.getElementById("encasetamiento").value = "Selecciona";
    var responsable = document.getElementById("responsable").value = "";
    inicio();
    var total_huevos = document.getElementById("total_huevos").value = "";
    var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").value = "";
    var huevo_tipo_A = document.getElementById("huevo_tipo_A").value = "";
    var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").value = "";
    var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").value = "";
    var huevo_tipo_B = document.getElementById("huevo_tipo_B").value = "";
    var huevo_tipo_C = document.getElementById("huevo_tipo_C").value = "";
    var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").value = "";
    var encasetamiento = document.getElementById("encasetamiento").focus();
}
// VALIDACIONES-------------------------------------------------------------
function validar_encasetamiento() {
    var encasetamiento = document.getElementById("encasetamiento").value;
    if (encasetamiento == "Seleciona") {
        var encasetamiento = document.getElementById("encasetamiento").style.border = "2px solid red";
        return false;
    } else {
        var encasetamiento = document.getElementById("encasetamiento").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_responsable() {
    var responsable = document.getElementById("responsable").value;
    if (responsable.length == 0) {
        var responsable = document.getElementById("responsable").style.border = "2px solid red";
        return false;
    } else if (isNaN(responsable) == false) {
        var responsable = document.getElementById("responsable").style.border = "2px solid red";
        return false;
    } else {
        var responsable = document.getElementById("responsable").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_total_huevos() {
    var total_huevos = document.getElementById("total_huevos").value;
    if (total_huevos == null || total_huevos.length == 0 || /^\s+$/.test(total_huevos) || total_huevos < 0) {
        var total_huevos = document.getElementById("total_huevos").style.border = "2px solid red";
        return false;
    } else if (isNaN(total_huevos) == true) {
        var total_huevos = document.getElementById("total_huevos").style.border = "2px solid red";
        return false;
    } else {
        var total_huevos = document.getElementById("total_huevos").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_no_comerciales() {
    var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").value;
    if (cantidad_huevos_no_comerciales == null || cantidad_huevos_no_comerciales.length == 0 || /^\s+$/.test(cantidad_huevos_no_comerciales) || cantidad_huevos_no_comerciales < 0) {
        var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").style.border = "2px solid red";
        return false;
    } else if (isNaN(cantidad_huevos_no_comerciales) == true) {
        var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").style.border = "2px solid red";
        return false;
    } else {
        var cantidad_huevos_no_comerciales = document.getElementById("cantidad_huevos_no_comerciales").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_huevosA() {
    var huevo_tipo_A = document.getElementById("huevo_tipo_A").value;
    if (huevo_tipo_A == null || huevo_tipo_A.length == 0 || /^\s+$/.test(huevo_tipo_A) || huevo_tipo_A < 0) {
        var huevo_tipo_A = document.getElementById("huevo_tipo_A").style.border = "2px solid red";
        return false;
    } else if (isNaN(huevo_tipo_A) == true) {
        var huevo_tipo_A = document.getElementById("huevo_tipo_A").style.border = "2px solid red";
        return false;
    } else {
        var huevo_tipo_A = document.getElementById("huevo_tipo_A").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_huevosAA() {
    var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").value;
    if (huevo_tipo_AA == null || huevo_tipo_AA.length == 0 || /^\s+$/.test(huevo_tipo_AA) || huevo_tipo_AA < 0) {
        var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").style.border = "2px solid red";
        return false;
    } else if (isNaN(huevo_tipo_AA) == true) {
        var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").style.border = "2px solid red";
        return false;
    } else {
        var huevo_tipo_AA = document.getElementById("huevo_tipo_AA").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_huevosAAA() {
    var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").value;
    if (huevo_tipo_AAA == null || huevo_tipo_AAA.length == 0 || /^\s+$/.test(huevo_tipo_AAA) || huevo_tipo_AAA < 0) {
        var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").style.border = "2px solid red";
        return false;
    } else if (isNaN(huevo_tipo_AAA) == true) {
        var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").style.border = "2px solid red";
        return false;
    } else {
        var huevo_tipo_AAA = document.getElementById("huevo_tipo_AAA").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_huevosB() {
    var huevo_tipo_B = document.getElementById("huevo_tipo_B").value;
    if (huevo_tipo_B == null || huevo_tipo_B.length == 0 || /^\s+$/.test(huevo_tipo_B) || huevo_tipo_B < 0) {
        var huevo_tipo_B = document.getElementById("huevo_tipo_B").style.border = "2px solid red";
        return false;
    } else if (isNaN(huevo_tipo_B) == true) {
        var huevo_tipo_B = document.getElementById("huevo_tipo_B").style.border = "2px solid red";
        return false;
    } else {
        var huevo_tipo_B = document.getElementById("huevo_tipo_B").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_huevosC() {
    var huevo_tipo_C = document.getElementById("huevo_tipo_C").value;
    if (huevo_tipo_C == null || huevo_tipo_C.length == 0 || /^\s+$/.test(huevo_tipo_C) || huevo_tipo_C < 0) {
        var huevo_tipo_C = document.getElementById("huevo_tipo_C").style.border = "2px solid red";
        return false;
    } else if (isNaN(huevo_tipo_C) == true) {
        var huevo_tipo_C = document.getElementById("huevo_tipo_C").style.border = "2px solid red";
        return false;
    } else {
        var huevo_tipo_C = document.getElementById("huevo_tipo_C").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_huevos_jumbo() {
    var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").value;
    if (huevo_tipo_Jumbo == null || huevo_tipo_Jumbo.length == 0 || /^\s+$/.test(huevo_tipo_Jumbo) || huevo_tipo_Jumbo < 0) {
        var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").style.border = "2px solid red";
        return false;
    } else if (isNaN(huevo_tipo_Jumbo) == true) {
        var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").style.border = "2px solid red";
        return false;
    } else {
        var huevo_tipo_Jumbo = document.getElementById("huevo_tipo_Jumbo").style.border = "2px solid #4caf50";
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
