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
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Configurar Usuarios</title>
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
				  <li class="li_m"><a class="a_m" href="../../Registrar/Reg_Marcas_Articulos.php">Registrar Marcas De Artículos</a></li>
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
				  <li class="li_m"><a class="a_m" href="Cambiar_Contrasena.php">Configurar Usuarios</a></li>
				  <li class="li_m"><a class="a_m" href="../Copia_Seguridad/Copia_Seguridad.php">Copia De Seguridad</a></li>
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
                <h1 class="banner_h1">Configurar Usuarios</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">				

                <div class="formulario formulario_mediano">
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Extencion_Galpon">Rol</label>
                      <input type="button" class="form-control" name="ExtensionGalpon" id="rol">
                    </div>
               	  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Nombre_persona">Nombre Y Apellido del Usuario</label>
                      <input type="text" class="form-control" name="NombreGalpon" id="Nombre_persona">
             		</div>
               	  </div>

        		  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="nickname">usuario</label>
                      <input type="text" class="form-control" name="CantidadAnimales" id="nickname">
                   	</div>
               	  </div>

				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label for="contraseña_actual">Contraseña Actual</label>
          			  <div class="input-group">          			  	
            		    <input type="password" name="contraseña_actual"  class="form-control filestyle"  id="contraseña_actual">
            		    <span id="ver_password_Actu" action="hide" class="input-group-addon  icons icon-eye"></span>
          			  </div>
					</div>
                  </div>
							
				  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label for="contrasena_nueva">Contraseña Nueva</label>
                      <div class="input-group">
                        <input type="password" name="contrasena_nueva"  class="form-control filestyle"  id="contrasena_nueva">
                        <span id="ver_password_New" action="hide" class="input-group-addon  icons icon-eye"></span>
                      </div>
                    </div>
                  </div>

				  <div class="col-xs-12 col-md-6">
				  	<label for="repita_contraseña">Repita Contraseña</label>
                    <div class="input-group">
                      <input type="password" name="repita_contraseña"  class="form-control filestyle"  id="repita_contraseña">
                      <span id="ver_password_Rep" action="hide" class="input-group-addon  icons icon-eye"></span>
                    </div>
                  </div>

      				<div class="modal fade" id="buscar_Usuarios" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				<div class="modal-dialog">
        			  <div class="modal-content">
          				<div class="header_buscar">
          				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            			  <h3 class="header_buscar-titulo">Buscar Usuarios</h3>
          				</div>
          				<div class="modal-body">   
          				  <label class="form-control-label" for="usuario">Selecciona Usuarios</label>
		    			    <select name="" id="usuario" onclick='consultar_Usuarios()' class="form-control">
		                    <option value="Selecciona">Selecciona</option>
			  				  <?php 
							
			    				  $local="localhost";
			    				  $usuario="root";
			    				  $contra="";
			    				  $bd="siavicol";

			    				  $conexion=mysqli_connect($local,$usuario,$contra,$bd);
			    				  $query="SELECT * FROM usuarios"; 
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

					  <button class="button button--Consultar_Registros_Del_Dia" title="Consultar Registros Del Dia" value="CONSULTAR" onclick="buscar_Usuarios()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>

					  <button class="button button--Actualizar" title="Actualizar" value="ACTUALIZAR" onclick="actualizar_usuarios()"><i class="button__icon icon_b icon-refresh-page-option"></i><span>Actualizar</span></button>

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
  
	<script src="../../../../assets/js/mlpushmenu.js"></script> <!-- es otra parte vital del menú navegación -->
 

	<script>
      // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	  // Esto es para Poder ver la contraseña 
    $(document).on('ready', function() {
        $('#ver_password_Actu, #ver_password_New, #ver_password_Rep').on('click', function(e) {
            e.preventDefault();
            var current = $(this).attr('action');
            // mostrar la contaseña
            if (current == 'hide') {
                $(this).prev().attr('type', 'text');
                $(this).removeClass('icon-eye').addClass('icon-eye-blocked').attr('action', 'show');
                $(this).css({
                    "color": "#f44336"
                });
            }
            // esconder la contraseña
            if (current == 'show') {
                $(this).prev().attr('type', 'password');
                $(this).removeClass('icon-eye-blocked').addClass('icon-eye').attr('action', 'hide');
                $(this).css({
                    "color": "#4caf50"
                });
            }
        })
    })



function actualizar_usuarios() {
    if (validar_nombre() == true && validar_rol() == true && validar_nickname() == true && validar_contraseña_actual() && validar_contrasena_nueva() && validar_repita_contraseña()==true) {
        var usuario = document.getElementById("usuario").value;

        var Nombre_persona = document.getElementById("Nombre_persona").value;

        var rol = document.getElementById("rol").value;

        var nickname = document.getElementById("nickname").value;
        var contraseña_actual = document.getElementById("contraseña_actual").value;

var contrasena_nueva = document.getElementById("contrasena_nueva").value;

var repita_contraseña = document.getElementById("repita_contraseña").value;

if (contrasena_nueva==repita_contraseña) {

	        Nombre_persona = Nombre_persona.toUpperCase();
        $("#resultado").load("Actualizar/Actu_Contrasenas.php", {
            usuario: usuario,
            Nombre_persona: Nombre_persona,
            rol: rol,
            nickname: nickname,
contraseña_actual:contraseña_actual,
contrasena_nueva:contrasena_nueva

        });
}else{

	swal({
            title: 'Error!',
            text: "Contraseñas son diferentes",
            type: 'error',
            background: '#fff url(../../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
        })
}

    } else {
        swal({
            title: 'Error!',
            text: "Algunos Campos Están Vacíos O Incorrectos",
            type: 'error',
            background: '#fff url(../../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
        })
    }
}

function consultar_Usuarios() {
    var usuario = document.getElementById("usuario").value;
    $("#resultado").load("Cons_Usuario/Cons_Usuario.php", {
        usuario: usuario
    })
}

function buscar_Usuarios() {
    $("#buscar_Usuarios").modal("show");
}

$(document).ready(inicio);

function inicio() {
	$("#Nombre_persona").keyup(validar_nombre);
    $("#rol").keyup(validar_rol);
    $("#nickname").keyup(validar_nickname);
      $("#contraseña_actual").keyup(validar_contraseña_actual);
            $("#contrasena_nueva").keyup(validar_contrasena_nueva);
                $("#repita_contraseña").keyup(validar_repita_contraseña);
    $("#mostrarmodal").modal("show");

}

function validar_nombre() {
    var Nombre_persona = document.getElementById("Nombre_persona").value;
    if (Nombre_persona.length == 0) {
        var Nombre_persona = document.getElementById("Nombre_persona").style.border = "2px solid red";
        return false;
    } else {
        var Nombre_persona = document.getElementById("Nombre_persona").style.border = "2px solid #4caf50";
        return true;
    }
}

function validar_rol() {
    var rol = document.getElementById("rol").value;
    if (rol.length == 0) {
        var rol = document.getElementById("rol").style.border = "2px solid red";
        return false;
    } else {
        var rol = document.getElementById("rol").style.border = "2px solid #4caf50";
        return true;
    }
}



function validar_nickname() {
    var nickname = document.getElementById("nickname").value;
    if (nickname.length == 0) {
        var nickname = document.getElementById("nickname").style.border = "2px solid red";
        return false;
    } else {
        var nickname = document.getElementById("nickname").style.border = "2px solid #4caf50";
        return true;
    }
}


 function validar_contraseña_actual () {
      var contraseña_actual=document.getElementById('contraseña_actual').value;

      if(contraseña_actual==null  || contraseña_actual.length==0 || /^\s+$/.test(contraseña_actual)){
     	
        return false;

      }else if (contraseña_actual.length>70) {
      
        return false;

      }else{


        return true;
      }

}


 function validar_contrasena_nueva () {
      var contrasena_nueva=document.getElementById('contrasena_nueva').value;
      if(contrasena_nueva==null  || contrasena_nueva.length==0 || /^\s+$/.test(contrasena_nueva)){
      
        return false;

      }else if (contrasena_nueva.length>70) {
       
        return false;

      }else{


        return true;
      }

}



function validar_repita_contraseña () {
      var repita_contraseña=document.getElementById('repita_contraseña').value;
      if(repita_contraseña==null  || repita_contraseña.length==0 || /^\s+$/.test(repita_contraseña)){
      
        return false;

      }else if (repita_contraseña.length>70) {
      
        return false;

      }else{



        return true;
      }

}
</script>
<?php
}
	else
{
	echo "<script type='text/javascript'>alert('Acceso Denegado');location='../../../../index.php?Acceso Denegado'</script>";
} 
?>
</body>	
</html>
