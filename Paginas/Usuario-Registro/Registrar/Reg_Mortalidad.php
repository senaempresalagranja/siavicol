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
	<title>Registrar Mortalidad</title>
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
                <h1 class="banner_h1">Registrar Mortalidad</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
		  <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">				

                <div class="formulario formulario_mediano">
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="encasetamiento">Encasetamiento</label>
                      <select class="form-control" onclick="validar_encasetamiento()" name="idEncasetamiento" id="encasetamiento">
                        <option value="Selecciona">Selecionar Encasetamiento</option>
                          <?php 
							
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT encasetamiento.idEncasetamiento, NombreGalpon FROM `encasetamiento` INNER JOIN galpon on encasetamiento.idGalpon=galpon.idGalpon group by NombreGalpon";
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
                      <label class="form-control-label" for="numero_aves">Numero De Aves<span class="form-asterisk"></span></label>
                      <input type="number" class="form-control" name="NumeroAves" id="numero_aves">
 				    </div>
                  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="fecha_muerte">Fecha</label>
                      <input type="button" class="form-control" name="Fecha" id="fecha_muerte">
					</div>
                  </div>
							
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="hora_muerte">Hora<span class="form-asterisk"></span></label>
                      <input type="button" class="form-control" name="Hora" id="hora_muerte">
                    </div>
                  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="motivo">Motivo De La Muerte</label>
                      <input type="text" class="form-control" name="Motivo" id="motivo">
					</div>
                  </div> 
                   			
                   		
				  <div id="resultado"></div>	

				   <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        			  <div class="modal-content">
          				<div class="header_buscar">
          				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            			  <h3 class="header_buscar-titulo">Buscar Mortalidad</h3>
          				</div>
          				<div class="modal-body">   
          				  <label for="id_encasetamiento">Selecciona Encasetamiento</label>
		    			  <select name="" id="id_encasetamiento"  class="form-control">
		                  <option value="Selecciona">Selecciona</option>
			  				<?php 
							
			    				$local="localhost";
			    				$usuario="root";
			    				$contra="";
			    				$bd="siavicol";

			    				$conexion=mysqli_connect($local,$usuario,$contra,$bd);
			    				$query="SELECT encasetamiento.idEncasetamiento, NombreGalpon FROM `encasetamiento` INNER JOIN galpon on encasetamiento.idGalpon=galpon.idGalpon group by NombreGalpon"; 
			    				$resource=mysqli_query($conexion,$query);
			    				while ($fila=mysqli_fetch_row($resource)) {
				    				echo "<option value='$fila[0]'  >$fila[1]</option>";
			    				}
			  			    ?>
		    			  </select>
		    			   <label for="" class="form-control-label">Selecciona Fecha 1</label>
							<input class="form-control" type="text" name="" id="fecha_mortalidad" placeholder="DD/MM/AAAA">
							<script>
								$('#fecha_mortalidad').datepicker({
      								format: "yyyy/mm/dd",
      								autoclose: true,
      								todayHighlight: true,
      								language: 'es'
      							});
							</script>
		    			   <label for="" class="form-control-label">Selecciona Fecha 2</label>
							<input class="form-control" type="text" name="" id="fecha_mortalidad1" placeholder="DD/MM/AAAA">
							<script>
								$('#fecha_mortalidad1').datepicker({
      								format: "yyyy/mm/dd",
      								autoclose: true,
      								todayHighlight: true,
      								language: 'es'
      							});
							</script>
							<div class="box-1">
							  <button class="button-s button--buscar_hora" title="Buscar" type="button" value="buscar" onclick="mostrar_hora()"><i class="button__icons icon_b icon-search12"></i><span>Buscar</span></button>
							</div>
		    			  <div id="contenedor_hora"></div>
          				</div>
          				
        			  </div>
      				</div>
                  </div>

        		  <div class="col-xs-12 ">	
                    <div class="box">

					  <button class="button button--Registrar" title="Guardar" type="button" value="registrar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					  <button class="button button--Nuevo_Registro" title="Nuevo Registro" type="button" value="nuevo_registro" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>

					  <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" type="button" value="consultar" onclick="consultar()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					  <button class="button button--Actualizar" title="Actualizar" type="button" value="actualizar" onclick="actualizar()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

					  <a class="button button--Consultar" title="Consultar Registros" href="../Consultar/Cons_Mortalidad.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>
   		
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
 //PARA REALIZAR ESO EN TIEMPO REAL
 function inicio() {
     $("#numero_aves").keyup(validar_numero);
     $("#motivo").keyup(validar_motivo);
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
     var fecha_muerte = document.getElementById('fecha_muerte').value = hoy;
     var hora_muerte = document.getElementById('hora_muerte').value = hora_fecha;
 };

 function enviar() {
     if (validar_encasetamiento() == true && validar_numero() == true && validar_motivo() == true) {
         var encasetamiento = document.getElementById("encasetamiento").value;
         var numero_aves = document.getElementById("numero_aves").value;
         var fecha_muerte = document.getElementById("fecha_muerte").value;
         var hora_muerte = document.getElementById("hora_muerte").value;
         var motivo = document.getElementById("motivo").value;
         $("#resultado").load("Conexion/Conex_Mortalidad.php", {
             encasetamiento: encasetamiento,
             numero_aves: numero_aves,
             fecha_muerte: fecha_muerte,
             hora_muerte: hora_muerte,
             motivo: motivo
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

 function consultar() {
     $("#buscar_galpon").modal("show");
 }

 function mostrar_hora() {
     var id_encasetamiento = document.getElementById("id_encasetamiento").value;
     var fecha_mortalidad = document.getElementById('fecha_mortalidad').value;
     var fecha_mortalidad1 = document.getElementById('fecha_mortalidad1').value;
     $("#contenedor_hora").load("mostrar_fecha_moratalidad.php", {
         fecha_mortalidad1: fecha_mortalidad1,
         id_encasetamiento: id_encasetamiento,
         fecha_mortalidad: fecha_mortalidad
     });
 }

 function consultar_encasetamiento() {
     var id_mortalidad = document.getElementById("id_mortalidad1").value;
     $("#resultado").load("Cons_Registro/Cons-Registro_Mortalidad.php", {
         id_mortalidad: id_mortalidad
     });
 }

 function actualizar() {
     var id_mortalidad = document.getElementById("id_mortalidad1").value;
     var encasetamiento = document.getElementById("encasetamiento").value;
     var numero_aves = document.getElementById("numero_aves").value;
     var fecha_muerte = document.getElementById("fecha_muerte").value;
     var hora_muerte = document.getElementById("hora_muerte").value;
     var motivo = document.getElementById("motivo").value;
     $("#resultado").load("Actualizar/Actu_Mortalidad.php", {
         id_mortalidad: id_mortalidad,
         encasetamiento: encasetamiento,
         numero_aves: numero_aves,
         fecha_muerte: fecha_muerte,
         hora_muerte: hora_muerte,
         motivo: motivo
     })
 }

 function nuevo_registro() {
     var encasetamiento = document.getElementById("encasetamiento").value = "Selecciona";
     var numero_aves = document.getElementById("numero_aves").value = "";
     inicio();
     var motivo = document.getElementById("motivo").value = "";
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

 function validar_numero() {
     var numero_aves = document.getElementById("numero_aves").value;
     if (numero_aves == null || numero_aves.length == 0 || /^\s+$/.test(numero_aves) || numero_aves < 0) {
         var numero_aves = document.getElementById("numero_aves").style.border = "2px solid red";
         return false;
     } else if (isNaN(numero_aves) == true) {
         var numero_aves = document.getElementById("numero_aves").style.border = "2px solid red";
         return false;
     } else {
         var numero_aves = document.getElementById("numero_aves").style.border = "2px solid #4caf50";
         return true;
     }
 }

 function validar_motivo() {
     var motivo = document.getElementById("motivo").value;
     if (motivo.length == 0) {
         var motivo = document.getElementById("motivo").style.border = "2px solid red";
         return false;
     } else if (isNaN(motivo) == false) {
         var motivo = document.getElementById("motivo").style.border = "2px solid red";
         return false;
     } else {
         var motivo = document.getElementById("motivo").style.border = "2px solid #4caf50";
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
