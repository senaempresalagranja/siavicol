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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registrar Encasetamiento</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico"> <!-- favicon Que tiene cada pagina -->

	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css"/> <!-- Los iconos De Las Paginas -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css"/> <!-- Los estilos css de cada pagina -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css"/> <!-- El bootstrap.css se uso para las cajas para formularios -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap-datepicker.css"/> <!-- Los estilos css de cada pagina -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/sweetalert2.min.css"/> <!-- Son los estilos para las alertas personalizadas -->

  	<script type="text/javascript" src="../../../assets/js/modernizr.custom.js"></script> <!-- Es componente vital para el menú de navegación -->
	<script type="text/javascript" src="../../../assets/js/jquery-2.1.4.min.js"></script> <!-- Sirve para las funciones importantes -->
	<script type="text/javascript" src="../../../assets/js/plugins/bootstrap-datepicker.js"></script> <!-- Fecha -->
	<script type="text/javascript" src="../../../assets/js/plugins/bootstrap-datepicker.es.min.js"></script> <!-- Fecha -->
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
				  <li class="li_m"><a class="a_m" href="Reg_Marcas_Articulos.php">Registrar Marcas De Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="Reg_Articulos.php">Registrar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="Reg_Inventario.php">Registrar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="Reg_Parametros.php">Registrar Parámetros</a></li>
				  <li class="li_m"><a class="a_m" href="Reg_Usuarios.php">Registrar Usuarios</a></li>
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
                <h1 class="banner_h1">Registrar Encasetamiento</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
		  <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">				
                <div class="formulario formulario_mediano">
				   <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                       <label class="form-control-label" for="Galpon">Galpon<span class="form-asterisk"></span></label>
                       <select class="form-control" onclick="mostrar_cantidad_gallinas()" name="galpon" id="Galpon">
                         <option value="Selecciona" >Selecciona Galpon</option>
                           <?php 
							
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM `galpon` ";
							 $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]'>$fila[1]</option>";
								
								}
						   ?>
                       </select>
                     </div>   
				   </div>	
                   <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                       <label class="form-control-label" for="Raza">Manual</label>
                       <select class="form-control"  name="Raza" onclick="validar_raza()" id="Raza">
                         <option value="Selecciona" >Selecciona Manual</option>
                           <?php 
							
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM manuales";
							 $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]'>$fila[1]</option>";
								
								}
						   ?>
                       </select>

 					 </div>   
				   </div>

                   <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                       <label class="form-control-label" for="Fecha_Inicio">Fecha Inicio<span class="form-asterisk"></span></label>
                       <input type="text" class="form-control" name="FechaInicio" id="Fecha_Inicio">
 					 </div>   
				   </div>	

				   <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                       <label class="form-control-label" for="Fecha_Fin">Fecha Fin</label>
                       <input type="text"  class="form-control" name="FechaFin" id="Fecha_Fin" placeholder="DD/MM/AAAA">
					 </div>  
					 <script>
					 	$('#Fecha_Fin').datepicker({
      						format: "yyyy/mm/dd",
      						autoclose: true,
      						todayHighlight: true,
      						language: 'es'
      					});
					 </script> 
				   </div>	

				   <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                       <label class="form-control-label" for="Cantidad_Gallinas">Cantidad Gallinas </label>
                       <label for="" id="contendor_galidas"></label>
                       <input type="number" class="form-control" name="Cantidad" id="Cantidad_Gallinas">
                       <label for="" id="recomendacion" style="display: none">Esta cantidad supera el número de gallinas recomendadas por metro cuadrado.</label>
				     </div>   
				   </div>	

				   <div class="col-xs-12 col-md-6">
                     <div class="form-group">
                       <label class="form-control-label" for="Semanas_De_Vida">Semanas De Vida</label>
                       <input type="number" class="form-control" name="NumeroSemanaVida" id="Semanas_De_Vida">
                     </div>   
				   </div>

				   <div id="respuesta"></div>
				   

				   <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				 <div class="modal-dialog">
        			   <div class="modal-content">
                         <div class="header_buscar">
          				   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              			   <h3 class="header_buscar-titulo">Buscar Encasetamiento</h3>
                         </div>

                         <div class="modal-body">
    					   <label class="form-control-label" for="fecha_produccion_select">Selecciona El Galpón</label>
						     <select name="" id="galpon_buscar" class="form-control">
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
								     echo "<option value='$fila[0]'>$fila[1]</option>";
								
							     }
						      ?>

						     </select>
						     <label for="">FECHA INICIO</label>
						     <input type="Date" class="form-control" name="" id="fecha_inicio_consulta" placeholder="DD/MM/AAAA">
						     <script>
					 			$('#fecha_inicio_consulta').datepicker({
      								format: "yyyy/mm/dd",
      								autoclose: true,
      								todayHighlight: true,
      								language: 'es'
      							});
					 		</script> 

						     <label for="">FECHA FIN</label>
						     <input type="text" class="form-control" name="" id="fecha_fin_consulta" placeholder="DD/MM/AAAA">
						     <script>
					 			$('#fecha_fin_consulta').datepicker({
      								format: "yyyy/mm/dd",
      								autoclose: true,
      								todayHighlight: true,
      								language: 'es'
      							});
					 		</script>

						    <div class="box-1">
						      <button class="button-s button--buscar_hora" title="Buscar" type="button" value="consultar" onclick="consultar_encasetamiento()"><i class="button__icons icon_b icon-search12"></i><span>Buscar</span></button>
							</div>

						     <div id="contenedor_encasetamiento"></div>
       				       </div>
      				   </div>
   				  	 </div>
				   </div>


				   <div class="col-xs-12 ">	
                     <div class="box">
                       <button class="button button--Registrar" title="Guardar" type="button" value="INGRESAR" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					   <button class="button button--Nuevo_Registro" title="Nuevo Registro" type="button" value="NUEVO REGISTRO" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>

					   <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" type="button" value="buscar" onclick="Buscar_Encasetamiento()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					   <button class="button button--Actualizar" title="Actualizar" type="button" value="ACTUALIZAR" onclick="Actualizar()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

					   <a class="button button--Consultar" href="../Consultar/Cons_Encasetamiento.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>
								 
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



$(document).ready(inicio);

function inicio() {
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
    var Fecha_Inicio = document.getElementById('Fecha_Inicio').value = hoy;
    // $("#Fecha_Fin").keyup(validar_fecha_fin);
    $("#Cantidad_Gallinas").keyup(validar_gallinas);
    $("#Semanas_De_Vida").keyup(validar_semanas);
    $("#Fecha_Inicio").keyup(validar_Fecha_Inicio);
}

function Buscar_Encasetamiento() {
    $("#buscar_galpon").modal("show");
}

function validar_gallinas() {
    var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").value;
    if (Cantidad_Gallinas == null || Cantidad_Gallinas.length == 0 || /^\s+$/.test(Cantidad_Gallinas) || Cantidad_Gallinas < 0) {
        var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").style.border = "2px solid red";
        return false;
    } else if (isNaN(Cantidad_Gallinas) == true) {
        var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").style.border = "2px solid red";
        return false;
    } else if (Cantidad_Gallinas > gantidad_recomendable_gallinas) {
        var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").style.border = "2px solid red";
        var recomendacion = document.getElementById("recomendacion").style = "display:block";
        return false;
    } else {
        var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").style.border = "2px solid #4caf50";
        var recomendacion = document.getElementById("recomendacion").style = "display:none";
        return true;
    }
}

function buscar_encasetamiento1() {
    var id_encasetamiento = document.getElementById("id_encasetamiento").value;
    $("#respuesta").load("Cons_Registro/Cons-Registro_Encasetamiento.php", {
        id_encasetamiento: id_encasetamiento
    })
}

function nuevo_registro() {
    var Galpon = document.getElementById("Galpon").value = "Selecciona";
    var Raza = document.getElementById("Raza").value = "Selecciona";
    inicio();
    var Fecha_Fin = document.getElementById("Fecha_Fin").value = "";
    var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").value = "";
    var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").value = "";
}

function Actualizar() {
    if (mostrar_cantidad_gallinas() == true && validar_raza() == true && validar_fecha_fin() == true && validar_gallinas() == true && validar_semanas() == true) {
        var id_encasetamiento = document.getElementById("id_encasetamiento").value;
        var Galpon = document.getElementById("Galpon").value;
        var Raza = document.getElementById("Raza").value;
        var Fecha_Inicio = document.getElementById("Fecha_Inicio").value;
        var Fecha_Fin = document.getElementById("Fecha_Fin").value;
        var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").value;
        var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").value;
        var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth() + 1; //hoy es 0!
        var yyyy = hoy.getFullYear();
        hoy = yyyy + '/' + mm + '/' + dd;
        $("#respuesta").load("Actualizar/Actu_Encasetamiento.php", {
            id_encasetamiento: id_encasetamiento,
            Raza: Raza,
            hoy: hoy,
            Galpon: Galpon,
            Fecha_Inicio: Fecha_Inicio,
            Fecha_Fin: Fecha_Fin,
            Cantidad_Gallinas: Cantidad_Gallinas,
            Semanas_De_Vida: Semanas_De_Vida
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
    if (mostrar_cantidad_gallinas() == true && validar_raza() == true && validar_fecha_fin() == true && validar_gallinas() == true && validar_semanas() == true && validar_Fecha_Inicio() == true) {
        var Galpon = document.getElementById("Galpon").value;
        var Raza = document.getElementById("Raza").value;
        var Fecha_Inicio = document.getElementById("Fecha_Inicio").value;
        var Fecha_Fin = document.getElementById("Fecha_Fin").value;
        var Cantidad_Gallinas = document.getElementById("Cantidad_Gallinas").value;
        var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").value;
        var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth() + 1; //hoy es 0!
        var yyyy = hoy.getFullYear();
        hoy = yyyy + '/' + mm + '/' + dd;
        $("#respuesta").load("conexion/Conex_Encasetamiento.php", {
            hoy: hoy,
            Raza: Raza,
            Galpon: Galpon,
            Fecha_Inicio: Fecha_Inicio,
            Fecha_Fin: Fecha_Fin,
            Cantidad_Gallinas: Cantidad_Gallinas,
            Semanas_De_Vida: Semanas_De_Vida
        });
    } 
    else if (validar_Fecha_Inicio() == false) {
    	swal({
            title: 'Error!',
            text: "Algunos Campos Están Vacíos O Incorrectos",
            type: 'error',
            background: '#fff url(../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
        })
    }

    else {
        swal({
            title: 'Error!',
            text: "Algunos Campos Están Vacíos O Incorrectos",
            type: 'error',
            background: '#fff url(../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
        })
    }
}


function validar_Fecha_Inicio() {
	var Fecha_Inicio = document.getElementById("Fecha_Inicio").value;
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
    hoy = yyyy + '/' ;
    if (Fecha_Inicio < hoy) {
        var Fecha_Inicio = document.getElementById("Fecha_Inicio").style.border = "2px solid red";
        return false;
    } else if (Fecha_Inicio == "Invalid Date") {
        var Fecha_Inicio = document.getElementById("Fecha_Inicio").style.border = "2px solid red";
    } else {
        var Fecha_Inicio = document.getElementById("Fecha_Inicio").style.border = "2px solid #4caf50";
        return true;
    }
}

function consultar_encasetamiento() {
    var galpon_buscar = document.getElementById("galpon_buscar").value;
    var fecha_inicio_consulta = document.getElementById("fecha_inicio_consulta").value;
    var fecha_fin_consulta = document.getElementById("fecha_fin_consulta").value;
    $("#contenedor_encasetamiento").load("consultar_encasetamiento.php", {
        galpon_buscar: galpon_buscar,
        fecha_inicio_consulta: fecha_inicio_consulta,
        fecha_fin_consulta: fecha_fin_consulta
    })
}

function mostrar_cantidad_gallinas() {
    var Galpon = document.getElementById("Galpon").value;
    if (Galpon == "Selecciona") {
        var Galpon = document.getElementById("Galpon").style.border = "2px solid red";
        return false
    } else {
        $("#contendor_galidas").load("mostrar_cantidad_gallinas.php", {
            Galpon: Galpon
        })
        var Galpon = document.getElementById("Galpon").style.border = "2px solid #4caf50";
        return true
    }
}

function validar_raza() {
    var Raza = document.getElementById("Raza").value;
    if (Raza == "Selecciona") {
        var Raza = document.getElementById("Raza").style.border = "2px solid red";
        return false
    } else {
        var Raza = document.getElementById("Raza").style.border = "2px solid #4caf50";
        return true
    }
}

function validar_fecha_fin() {
    var Fecha_Fin = document.getElementById("Fecha_Fin").value;
    var Fecha_Inicio = document.getElementById("Fecha_Inicio").value;
    var Fecha_Inicio = new Date(Fecha_Inicio);
    var Fecha_Fin = new Date(Fecha_Fin);
    // alert(Fecha_Fin)
    if (Fecha_Inicio > Fecha_Fin) {
        var Fecha_Fin = document.getElementById("Fecha_Fin").style.border = "2px solid red";
        return false;
    } else if (Fecha_Fin == "Invalid Date") {
        var Fecha_Fin = document.getElementById("Fecha_Fin").style.border = "2px solid red";
    } else {
        var Fecha_Fin = document.getElementById("Fecha_Fin").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_semanas() {
    var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").value;
    if (Semanas_De_Vida == null || Semanas_De_Vida.length == 0 || /^\s+$/.test(Semanas_De_Vida) || Semanas_De_Vida < 0) {
        var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").style.border = "2px solid red";
        return false;
    } else if (isNaN(Semanas_De_Vida) == true) {
        var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").style.border = "2px solid red";
        return false;
    } else if (Semanas_De_Vida > 90) {
        var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").style.border = "2px solid red";
        return false;
    } else {
        var Semanas_De_Vida = document.getElementById("Semanas_De_Vida").style.border = "2px solid #4caf50";
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
