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
	<title>Registrar Inventario</title>
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
                <h1 class="banner_h1">Registrar Inventario</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
		  <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">				

                <div class="formulario formulario_mediano">
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Articulo">Articulo</label>
                      <select class="form-control" onclick='validar_articulo()'  name="idArticulo" id="Articulo">
                        <option value="Selecciona">Seleccionar Articulo</option>
                          <?php 
							
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM articulos";
							 $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]' >$fila[3]</option>";
								
							  }
						  ?>
                      </select>
                    </div>
                  </div>

        		  <div class="col-xs-12 col-md-6">
                    <div class="form-group">	
                      <label class="form-control-label" for="Novedad">Novedad</label>
                      <select class="form-control" onclick="validar_novedad()" name="idTiposNovedad" id="Novedad">
                        <option value="Selecciona">Selecciona Novedad</option>
 						<option value="Entrada">Entrada</option>
 						<option value="Salida">Salida</option>

                      </select>
                    </div>
                  </div>	
        					
							
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="fecha_inventario">Fecha</label>
                      <input type="text" class="form-control" name="Fecha" id="fecha_inventario">
					</div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="hora_inventario">Hora</label>
                      <input type="button" class="form-control" name="Fecha" id="hora_inventario">
					</div>
                  </div>
								 

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Cantidad_Entrada">Cantidad</label> <label for="" id="bultos"></label>
                      <input type="number" class="form-control" name="CantidadEntrada" id="cantidad">
					</div>
                  </div> 


				  <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        			  <div class="modal-content">
          				<div class="header_buscar">
          				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            			  <h3 class="header_buscar-titulo">BUSCAR INVENTARIO</h3>
          				</div>
          				<div class="modal-body">   
	  					  <label class="form-control-label">Seleccionar Articulo</label>
	  					  <select class="form-control"   name="idArticulo" id="articulo_consulta">
                            <option value="">Seleccionar Articulo</option>
                              <?php 
							
							     $local="localhost";
							     $usuario="root";
							     $contra="";
							     $bd="siavicol";

							     $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							     $query="SELECT * FROM articulos";
							     $resource=mysqli_query($conexion,$query);
							      while ($fila=mysqli_fetch_row($resource)) {
								   echo "<option value='$fila[0]' >$fila[3]</option>";
								  
							    }
						      ?>
                          </select>
					       <label class="form-control-label" for="">secciona fecha 1</label>
					       <input class="form-control" type="text" name="" id="fecha_1">
							<script>
					 			$('#fecha_1').datepicker({
      								format: "yyyy/mm/dd",
      								autoclose: true,
      								todayHighlight: true,
      								language: 'es'
      							});
					 		</script>	

					       <label class="form-control-label" for="">secciona fecha 2</label>
					       <input class="form-control" type="text" name="" id="fecha_2">
					       <script>
					 			$('#fecha_2').datepicker({
      								format: "yyyy/mm/dd",
      								autoclose: true,
      								todayHighlight: true,
      								language: 'es'
      							});
					 		</script>
					       <!-- <input type="button" value="consultar" onclick="consultar_inventario()"> -->
					        <div class="box-1">
							  <button class="button-s button--buscar_hora" title="Buscar" type="button" value="consultar" onclick="consultar_inventario()"><i class="button__icons icon_b icon-search12"></i><span>Buscar</span></button>
							</div>
							

				           <div id="contenedor_hora"></div>	
          				</div>
        			  </div>
      				</div>
                  </div>

                  <div id="resultado"></div>			 
        		  <div class="col-xs-12 ">	
                    <div class="box">

                      <button class="button button--Registrar" title="Guardar" type="button" value="enviar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					  <button class="button button--Nuevo_Registro" title="Nuevo Registro" type="button" value="nuevo registro" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>

					  <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" type="button" value="consultar" onclick="consultar()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					  <button class="button button--Actualizar" title="Actualizar" type="button" value="actualziar" onclick="Actualizar()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

					  <a class="button button--Consultar" title="Consultar Registros" href="../Consultar/Cons_Inventario.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>

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
function validar_articulo() {
    if (Articulo == "Selecciona") {
        return false
    } else {
        var Articulo = document.getElementById('Articulo').value;
        $("#bultos").load("mostrar_unidad.php", {
            Articulo: Articulo
        })
        return true
    }
}

function consultar() {
    $("#buscar_galpon").modal("show");
}
//PARA REALIZAR ESO EN TIEMPO REAL
function inicio() {
    $("#cantidad").keyup(validar_cantidad)
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
    var fecha_inventario = document.getElementById('fecha_inventario').value = hoy;
    var hora_inventario = document.getElementById('hora_inventario').value = hora_fecha;
}

function enviar() {
    if (validar_articulo() == true && validar_novedad() == true && validar_cantidad() == true) {
        var Articulo = document.getElementById('Articulo').value;
        var Novedad = document.getElementById('Novedad').value;
        var fecha_inventario = document.getElementById('fecha_inventario').value;
        var cantidad = document.getElementById('cantidad').value;
        var hora_inventario = document.getElementById('hora_inventario').value;
        $("#resultado").load("Conexion/Conex_Inventario.php", {
            hora_inventario: hora_inventario,
            Articulo: Articulo,
            Novedad: Novedad,
            fecha_inventario: fecha_inventario,
            cantidad: cantidad
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

function consultar_inventario() {
    var articulo_consulta = document.getElementById('articulo_consulta').value;
    var fecha_1 = document.getElementById('fecha_1').value;
    var fecha_2 = document.getElementById('fecha_2').value;
    $("#contenedor_hora").load("consultar_inventario.php", {
        articulo_consulta: articulo_consulta,
        fecha_1: fecha_1,
        fecha_2: fecha_2
    })
}

function consultar_inventario1() {
    var id_hora = document.getElementById('id_hora').value;
    $("#resultado").load("Cons_Registro/Cons-Registro_Inventario.php", {
        id_hora: id_hora
    })
}

function Actualizar() {
    if (validar_articulo() == true && validar_novedad() == true && validar_cantidad() == true) {
        var Articulo = document.getElementById('Articulo').value;
        var Novedad = document.getElementById('Novedad').value;
        var fecha_inventario = document.getElementById('fecha_inventario').value;
        var cantidad = document.getElementById('cantidad').value;
        var hora_inventario = document.getElementById('hora_inventario').value;
        var id_hora = document.getElementById('id_hora').value;
        $("#resultado").load("Actualizar/Actu_Inventario.php", {
            id_hora: id_hora,
            hora_inventario: hora_inventario,
            Articulo: Articulo,
            Novedad: Novedad,
            fecha_inventario: fecha_inventario,
            cantidad: cantidad
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

function nuevo_registro() {
    var Articulo = document.getElementById('Articulo').value = "Selecciona";
    var Novedad = document.getElementById('Novedad').value = "Selecciona";
    inicio();
    var cantidad = document.getElementById('cantidad').value = "";
}

function validar_articulo() {
    var Articulo = document.getElementById('Articulo').value;
    $("#bultos").load("mostrar_unidad.php", {
        Articulo: Articulo
    })
    if (Articulo == "Selecciona") {
        var Articulo = document.getElementById('Articulo').style.border = "2px solid red";
        return false;
    } else {
        var Articulo = document.getElementById('Articulo').style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_novedad() {
    var Novedad = document.getElementById('Novedad').value;
    if (Novedad == "Selecciona") {
        var Novedad = document.getElementById('Novedad').style.border = "2px solid red";
        return false;
    } else {
        var Novedad = document.getElementById('Novedad').style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_cantidad() {
    var cantidad = document.getElementById('cantidad').value;
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
