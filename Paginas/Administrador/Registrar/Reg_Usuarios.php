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
  <title>Registrar Usuarios</title>
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
                <h1 class="banner_h1">Registrar Usuarios</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
				        <div class="formulario-pequeño">
        		      <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="">Nombre Y Apellido De Usuario</label>
                      <input type="text" class="form-control" name="Nombre_Usuario" id="Nombre_Usuario">
             		    </div>
               	  </div>

        		      <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Extencion_Galpon">Usuario</label>
                      <input type="text" class="form-control" name="Usuario" id="Usuario">
                    </div>
               	  </div>

        		      <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="Rol">Rol</label>
                      <select class="form-control" name="Rol" id="Rol">
                        <option value="Selecciona" onclick="validar_Rol()">Selecciona Rol</option>
                        <option  onclick="validar_Rol()" value="Administrador">Administrador</option>
                        <option  onclick="validar_Rol()" value="Usuario_Registro">Usuario_Registro</option>
                        <option  onclick="validar_Rol()" value="Usuario_Consulta">Usuario_Consulta</option>
                      </select>
               		  </div>
               	  </div>	

               	  <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                      <label class="form-control-label" for="">Contraseña</label>
                      <div class="input-group">
                        <input type="password" class="form-control" name="Contrasena" id="Contrasena">
                        <span id="ver_password" action="hide" class="input-group-addon  icons icon-eye"></span>
                      </div>
                    </div>
               	  </div>

               	  <div id="resultado"></div>

        		      <div class="col-xs-12 ">	
					          <div class="box">

					            <button class="button button--Registrar" title="Guardar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>

					            <button class="button button--Nuevo_Registro" title="Nuevo Registro" value="NUEVO REGISTRO" onclick="nuevo_registro()"><i class="button__icon icon_b icon-plus-sign-in-a-black-circle"></i><span>Nuevo Registro</span></button>
					  
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
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );

		    // Esto es para Poder ver la contraseña 
    $(document).on('ready', function() {
        $('#ver_password').on('click', function(e) {
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

    function enviar() {
        if (validar_Nombre_usuario() == true && validar_usuario() == true && validar_Contrasena() == true && validar_Rol() == true) {
            var Nombre_Usuario = document.getElementById("Nombre_Usuario").value;
            var Usuario = document.getElementById("Usuario").value;
            var Rol = document.getElementById("Rol").value;
            var Contrasena = document.getElementById("Contrasena").value;
            Nombre_Usuario = Nombre_Usuario.toUpperCase();
            Usuario = Usuario.toUpperCase();
            Rol = Rol.toUpperCase();
            $("#resultado").load("conexion/Conex_Usuarios.php", {
                Nombre_Usuario: Nombre_Usuario,
                Usuario: Usuario,
                Contrasena: Contrasena,
                Rol: Rol
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

    function nuevo_registro() {
        var Nombre_Usuario = document.getElementById("Nombre_Usuario").value = "";
        var Usuario = document.getElementById("Usuario").value = "";
        var Rol = document.getElementById("Rol").value = "Selecciona";
        var Contrasena = document.getElementById("Contrasena").value = "";
        var Nombre_Usuario = document.getElementById("Nombre_Usuario").focus();
    }

    function buscar_galpon() {
        $("#buscar_galpon").modal("show");
    }
    $(document).ready(inicio);

    function inicio() {
        $("#Nombre_Usuario").keyup(validar_Nombre_usuario);
        $("#Usuario").keyup(validar_usuario);
        $("#Contrasena").keyup(validar_Contrasena);
        $("#Rol").keyup(validar_Rol);
        $("#mostrarmodal").modal("show");
    }

    function validar_Nombre_usuario() {
        var Nombre_Usuario = document.getElementById("Nombre_Usuario").value;
        if (Nombre_Usuario.length == 0) {
            var Nombre_Usuario = document.getElementById("Nombre_Usuario").style.border = "2px solid red";
            return false;
        } else {
            var Nombre_Usuario = document.getElementById("Nombre_Usuario").style.border = "2px solid #4caf50";
            return true;
        }
    }

    function validar_usuario() {
        var Usuario = document.getElementById("Usuario").value;
        if (Usuario.length == 0) {
            var Usuario = document.getElementById("Usuario").style.border = "2px solid red";
            return false;
        } else {
            var Usuario = document.getElementById("Usuario").style.border = "2px solid #4caf50";
            return true;
        }
    }

    function validar_Contrasena() {
        var Contrasena = document.getElementById("Contrasena").value;
        if (Contrasena.length == 0) {
            var Contrasena = document.getElementById("Contrasena").style.border = "2px solid red";
            return false;
        } else {
            var Contrasena = document.getElementById("Contrasena").style.border = "2px solid #4caf50";
            return true;
        }
    }

    function validar_Rol() {
        var Rol = document.getElementById('Rol').value;
        if (Rol == "Selecciona") {
            var Rol = document.getElementById('Rol').style.border = "2px solid red";
            return false;
        } else {
            var Rol = document.getElementById('Rol').style.border = "2px solid #4caf50";
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
