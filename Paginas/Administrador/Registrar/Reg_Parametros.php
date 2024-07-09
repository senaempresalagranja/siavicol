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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registrar Parametros</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico"> <!-- favicon Que tiene cada pagina -->

	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css"/> <!-- Los iconos De Las Paginas -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css"/> <!-- Los estilos css de cada pagina -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css"/> <!-- El bootstrap.css se uso para las cajas para formularios -->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/sweetalert2.min.css"/> <!-- Son los estilos para las alertas personalizadas -->

  	<script type="text/javascript" src="../../../assets/js/modernizr.custom.js"></script> <!-- Es componente vital para el menú de navegación -->
	<script type="text/javascript" src="../../../assets/js/jquery-2.1.4.min.js"></script> <!-- Sirve para las funciones importantes -->
	<script type="text/javascript" src="../../../assets/js/bootstrap.min.js"></script> <!-- Es para otras Funciones importantes --> 
  	<script type="text/javascript" src="../../../assets/js/sweetalert2.min.js"></script> <!-- Para que las alertas personalizadas funcionen -->
  	<!-- <script src="jquery.js"></script> -->
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
                <h1 class="banner_h1">Registrar Parametros</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-lg-10 col-lg-offset-1">

				<div class="col-xs-12 col-lg-8 col-lg-offset-3">
			      <form action="" id="formulario" method="post">
	  		        <div class="col-xs-12 col-md-6">
        		      <div class="form-group">
		 		        <label for="nombre_manual" class="form-control-label">Nombre del manual</label>
	     		        <input type="text" class="form-control" name="nombre_manual" id="nombre_manual">
  	    		      </div>
  	  		        </div>
  	  		        <div class="col-xs-12 col-md-6">
        		      <div class="form-group">
		 		        <button class="button button--Consultar_Registros_Del_Dia" title="buscar actualizar manuales" type="button" value="buscar" onclick="Buscar_Manuales()"><i class="button__icon icon_b icon-search"></i><span>Consultar Registro</span></button>
  	    		      </div>
  	  		        </div>
  	  		      </div>  
	  		      <div class="col-xs-12">
	    		    <h1 class="titulo_section">Parámetros</h1>
  	  		      </div>

  	  		      <div class="row">
          	        <div class="col-md-12">
					  <div class="panel panel-default">
          	            <table class="table table-fixed  table-hover table-bordered" id="sampleTable">
      	                  <thead>
	                        <tr class="titulo_tr">
		                      <th class="col-xs-3">Semana</th>
              				  <th class="col-xs-3">Valor Menor Producción</th>
              				  <th class="col-xs-3">Valor Mayor Producción</th>
              				  <th class="col-xs-3">Porcentaje Mortalidad</th>
	                        </tr>
	                      </thead> 

					      <tbody>
						    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="18" name="semana_18" class="semana" id="semana_18"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_1" id="valor_menor_produccion_semana_1" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_1" id="valor_mayor_produccion_semana_1" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_1" id="porcentaje_mortalidad_semana_1" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					  <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="19" name="semana_19" class="semana" id="semana_19"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_2" id="valor_menor_produccion_semana_2" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_2" id="valor_mayor_produccion_semana_2" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_2" id="porcentaje_mortalidad_semana_2" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="20" name="semana_20" class="semana" id="semana_20"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_3" id="valor_menor_produccion_semana_3" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_3" id="valor_mayor_produccion_semana_3" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_3" id="porcentaje_mortalidad_semana_3" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="21" name="semana_21" class="semana" id="semana_21"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_4" id="valor_menor_produccion_semana_4" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_4" id="valor_mayor_produccion_semana_4" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_4" id="porcentaje_mortalidad_semana_4" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="22" name="semana_22" class="semana" id="semana_22"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_5" id="valor_menor_produccion_semana_5" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_5" id="valor_mayor_produccion_semana_5" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_5" id="porcentaje_mortalidad_semana_5" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="23" name="semana_23" class="semana" id="semana_23"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_6" id="valor_menor_produccion_semana_6" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_6" id="valor_mayor_produccion_semana_6" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_6" id="porcentaje_mortalidad_semana_6" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="24" name="semana_24" class="semana" id="semana_24"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_7" id="valor_menor_produccion_semana_7" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_7" id="valor_mayor_produccion_semana_7" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_7" id="porcentaje_mortalidad_semana_7" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="25" name="semana_25" class="semana" id="semana_25"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_8" id="valor_menor_produccion_semana_8" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_8" id="valor_mayor_produccion_semana_8" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_8" id="porcentaje_mortalidad_semana_8" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="26" name="semana_26" class="semana" id="semana_26"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_9" id="valor_menor_produccion_semana_9" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_9" id="valor_mayor_produccion_semana_9" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_9" id="porcentaje_mortalidad_semana_9" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="27" name="semana_27" class="semana" id="semana_27"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_10" id="valor_menor_produccion_semana_10" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_10" id="valor_mayor_produccion_semana_10" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_10" id="porcentaje_mortalidad_semana_10" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="28" name="semana_28" class="semana" id="semana_28"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_11" id="valor_menor_produccion_semana_11" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_11" id="valor_mayor_produccion_semana_11" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_11" id="porcentaje_mortalidad_semana_11" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="29" name="semana_29" class="semana" id="semana_29"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_12" id="valor_menor_produccion_semana_12" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_12" id="valor_mayor_produccion_semana_12" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_12" id="porcentaje_mortalidad_semana_12" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="30" name="semana_30" class="semana" id="semana_30"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_13" id="valor_menor_produccion_semana_13" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_13" id="valor_mayor_produccion_semana_13" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_13" id="porcentaje_mortalidad_semana_13" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="31" name="semana_31" class="semana" id="semana_31"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_14" id="valor_menor_produccion_semana_14" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_14" id="valor_mayor_produccion_semana_14" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_14" id="porcentaje_mortalidad_semana_14" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="32" name="semana_32" class="semana" id="semana_32"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_15" id="valor_menor_produccion_semana_15" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_15" id="valor_mayor_produccion_semana_15" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_15" id="porcentaje_mortalidad_semana_15" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="33" name="semana_33" class="semana" id="semana_33"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_16" id="valor_menor_produccion_semana_16" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_16" id="valor_mayor_produccion_semana_16" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_16" id="porcentaje_mortalidad_semana_16" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="34" name="semana_34" class="semana" id="semana_34"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_17" id="valor_menor_produccion_semana_17" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_17" id="valor_mayor_produccion_semana_17" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_17" id="porcentaje_mortalidad_semana_17" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="35" name="semana_35" class="semana" id="semana_35"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_18" id="valor_menor_produccion_semana_18" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_18" id="valor_mayor_produccion_semana_18" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_18" id="porcentaje_mortalidad_semana_18" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="36" name="semana_36" class="semana" id="semana_36"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_19" id="valor_menor_produccion_semana_19" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_19" id="valor_mayor_produccion_semana_19" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_19" id="porcentaje_mortalidad_semana_19" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="37" name="semana_37" class="semana" id="semana_37"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_20" id="valor_menor_produccion_semana_20" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_20" id="valor_mayor_produccion_semana_20" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_20" id="porcentaje_mortalidad_semana_20" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="38" name="semana_38" class="semana" id="semana_38"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_21" id="valor_menor_produccion_semana_21" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_21" id="valor_mayor_produccion_semana_21" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_21" id="porcentaje_mortalidad_semana_21" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="39" name="semana_39" class="semana" id="semana_39"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_22" id="valor_menor_produccion_semana_22" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_22" id="valor_mayor_produccion_semana_22" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_22" id="porcentaje_mortalidad_semana_22" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="40" name="semana_40" class="semana" id="semana_40"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_23" id="valor_menor_produccion_semana_23" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_23" id="valor_mayor_produccion_semana_23" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_23" id="porcentaje_mortalidad_semana_23" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="41" name="semana_41" class="semana" id="semana_41"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_24" id="valor_menor_produccion_semana_24" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_24" id="valor_mayor_produccion_semana_24" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_24" id="porcentaje_mortalidad_semana_24" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="42" name="semana_42" class="semana" id="semana_42"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_25" id="valor_menor_produccion_semana_25" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_25" id="valor_mayor_produccion_semana_25" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_25" id="porcentaje_mortalidad_semana_25" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="43" name="semana_43" class="semana" id="semana_43"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_26" id="valor_menor_produccion_semana_26" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_26" id="valor_mayor_produccion_semana_26" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_26" id="porcentaje_mortalidad_semana_26" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="44" name="semana_44" class="semana" id="semana_44"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_27" id="valor_menor_produccion_semana_27" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_27" id="valor_mayor_produccion_semana_27" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_27" id="porcentaje_mortalidad_semana_27" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="45" name="semana_45" class="semana" id="semana_45"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_28" id="valor_menor_produccion_semana_28" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_28" id="valor_mayor_produccion_semana_28" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_28" id="porcentaje_mortalidad_semana_28" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="46" name="semana_46" class="semana" id="semana_46"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_29" id="valor_menor_produccion_semana_29" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_29" id="valor_mayor_produccion_semana_29" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_29" id="porcentaje_mortalidad_semana_29" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="47" name="semana_47" class="semana" id="semana_47"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_30" id="valor_menor_produccion_semana_30" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_30" id="valor_mayor_produccion_semana_30" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_30" id="porcentaje_mortalidad_semana_30" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="48" name="semana_48" class="semana" id="semana_48"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_31" id="valor_menor_produccion_semana_31" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_31" id="valor_mayor_produccion_semana_31" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_31" id="porcentaje_mortalidad_semana_31" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="49" name="semana_49" class="semana" id="semana_49"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_32" id="valor_menor_produccion_semana_32" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_32" id="valor_mayor_produccion_semana_32" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_32" id="porcentaje_mortalidad_semana_32" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="50" name="semana_50" class="semana" id="semana_50"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_33" id="valor_menor_produccion_semana_33" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_33" id="valor_mayor_produccion_semana_33" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_33" id="porcentaje_mortalidad_semana_33" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="51" name="semana_51" class="semana" id="semana_51"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_34" id="valor_menor_produccion_semana_34" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_34" id="valor_mayor_produccion_semana_34" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_34" id="porcentaje_mortalidad_semana_34" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="52" name="semana_52" class="semana" id="semana_52"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_35" id="valor_menor_produccion_semana_35" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_35" id="valor_mayor_produccion_semana_35" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_35" id="porcentaje_mortalidad_semana_35" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="53" name="semana_53" class="semana" id="semana_53"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_36" id="valor_menor_produccion_semana_36" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_36" id="valor_mayor_produccion_semana_36" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_36" id="porcentaje_mortalidad_semana_36" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="54" name="semana_54" class="semana" id="semana_54"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_37" id="valor_menor_produccion_semana_37" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_37" id="valor_mayor_produccion_semana_37" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_37" id="porcentaje_mortalidad_semana_37" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="55" name="semana_55" class="semana" id="semana_55"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_38" id="valor_menor_produccion_semana_38" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_38" id="valor_mayor_produccion_semana_38" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_38" id="porcentaje_mortalidad_semana_38" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="56" name="semana_56" class="semana" id="semana_56"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_39" id="valor_menor_produccion_semana_39" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_39" id="valor_mayor_produccion_semana_39" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_39" id="porcentaje_mortalidad_semana_39" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="57" name="semana_57" class="semana" id="semana_57"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_40" id="valor_menor_produccion_semana_40" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_40" id="valor_mayor_produccion_semana_40" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_40" id="porcentaje_mortalidad_semana_40" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="58" name="semana_58" class="semana" id="semana_58"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_41" id="valor_menor_produccion_semana_41" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_41" id="valor_mayor_produccion_semana_41" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_41" id="porcentaje_mortalidad_semana_41" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="59" name="semana_59" class="semana" id="semana_59"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_42" id="valor_menor_produccion_semana_42" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_42" id="valor_mayor_produccion_semana_42" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_42" id="porcentaje_mortalidad_semana_42" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="60" name="semana_60" class="semana" id="semana_60"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_43" id="valor_menor_produccion_semana_43" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_43" id="valor_mayor_produccion_semana_43" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_43" id="porcentaje_mortalidad_semana_43" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="61" name="semana_61" class="semana" id="semana_61"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_44" id="valor_menor_produccion_semana_44" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_44" id="valor_mayor_produccion_semana_44" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_44" id="porcentaje_mortalidad_semana_44" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="62" name="semana_62" class="semana" id="semana_62"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_45" id="valor_menor_produccion_semana_45" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_45" id="valor_mayor_produccion_semana_45" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_45" id="porcentaje_mortalidad_semana_45" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="63" name="semana_63" class="semana" id="semana_63"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_46" id="valor_menor_produccion_semana_46" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_46" id="valor_mayor_produccion_semana_46" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_46" id="porcentaje_mortalidad_semana_46" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="64" name="semana_64" class="semana" id="semana_64"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_47" id="valor_menor_produccion_semana_47" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_47" id="valor_mayor_produccion_semana_47" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_47" id="porcentaje_mortalidad_semana_47" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="65" name="semana_65" class="semana" id="semana_65"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_48" id="valor_menor_produccion_semana_48" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_48" id="valor_mayor_produccion_semana_48" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_48" id="porcentaje_mortalidad_semana_48" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="66" name="semana_66" class="semana" id="semana_66"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_49" id="valor_menor_produccion_semana_49" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_49" id="valor_mayor_produccion_semana_49" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_49" id="porcentaje_mortalidad_semana_49" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="67" name="semana_67" class="semana" id="semana_67"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_50" id="valor_menor_produccion_semana_50" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_50" id="valor_mayor_produccion_semana_50" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_50" id="porcentaje_mortalidad_semana_50" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="68" name="semana_68" class="semana" id="semana_68"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_51" id="valor_menor_produccion_semana_51" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_51" id="valor_mayor_produccion_semana_51" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_51" id="porcentaje_mortalidad_semana_51" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="69" name="semana_69" class="semana" id="semana_69"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_52" id="valor_menor_produccion_semana_52" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_52" id="valor_mayor_produccion_semana_52" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_52" id="porcentaje_mortalidad_semana_52" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="70" name="semana_70" class="semana" id="semana_70"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_53" id="valor_menor_produccion_semana_53" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_53" id="valor_mayor_produccion_semana_53" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_53" id="porcentaje_mortalidad_semana_53" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="71" name="semana_71" class="semana" id="semana_71"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_54" id="valor_menor_produccion_semana_54" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_54" id="valor_mayor_produccion_semana_54" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_54" id="porcentaje_mortalidad_semana_54" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="72" name="semana_72" class="semana" id="semana_72"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_55" id="valor_menor_produccion_semana_55" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_55" id="valor_mayor_produccion_semana_55" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_55" id="porcentaje_mortalidad_semana_55" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="73" name="semana_73" class="semana" id="semana_73"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_56" id="valor_menor_produccion_semana_56" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_56" id="valor_mayor_produccion_semana_56" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_56" id="porcentaje_mortalidad_semana_56" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="74" name="semana_74" class="semana" id="semana_74"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_57" id="valor_menor_produccion_semana_57" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_57" id="valor_mayor_produccion_semana_57" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_57" id="porcentaje_mortalidad_semana_57" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="75" name="semana_75" class="semana" id="semana_75"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_58" id="valor_menor_produccion_semana_58" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_58" id="valor_mayor_produccion_semana_58" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_58" id="porcentaje_mortalidad_semana_58" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="76" name="semana_76" class="semana" id="semana_76"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_59" id="valor_menor_produccion_semana_59" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_59" id="valor_mayor_produccion_semana_59" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_59" id="porcentaje_mortalidad_semana_59" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="77" name="semana_77" class="semana" id="semana_77"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_60" id="valor_menor_produccion_semana_60" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_60" id="valor_mayor_produccion_semana_60" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_60" id="porcentaje_mortalidad_semana_60" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="78" name="semana_78" class="semana" id="semana_78"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_61" id="valor_menor_produccion_semana_61" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_61" id="valor_mayor_produccion_semana_61" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_61" id="porcentaje_mortalidad_semana_61" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="79" name="semana_79" class="semana" id="semana_79"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_62" id="valor_menor_produccion_semana_62" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_62" id="valor_mayor_produccion_semana_62" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_62" id="porcentaje_mortalidad_semana_62" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="80" name="semana_80" class="semana" id="semana_80"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_63" id="valor_menor_produccion_semana_63" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_63" id="valor_mayor_produccion_semana_63" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_63" id="porcentaje_mortalidad_semana_63" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="81" name="semana_81" class="semana" id="semana_81"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_64" id="valor_menor_produccion_semana_64" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_64" id="valor_mayor_produccion_semana_64" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_64" id="porcentaje_mortalidad_semana_64" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="82" name="semana_82" class="semana" id="semana_82"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_65" id="valor_menor_produccion_semana_65" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_65" id="valor_mayor_produccion_semana_65" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_65" id="porcentaje_mortalidad_semana_65" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="83" name="semana_83" class="semana" id="semana_83"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_66" id="valor_menor_produccion_semana_66" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_66" id="valor_mayor_produccion_semana_66" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_66" id="porcentaje_mortalidad_semana_66" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="84" name="semana_84" class="semana" id="semana_84"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_67" id="valor_menor_produccion_semana_67" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_67" id="valor_mayor_produccion_semana_67" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_67" id="porcentaje_mortalidad_semana_67" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="85" name="semana_85" class="semana" id="semana_85"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_68" id="valor_menor_produccion_semana_68" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_68" id="valor_mayor_produccion_semana_68" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_68" id="porcentaje_mortalidad_semana_68" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="86" name="semana_86" class="semana" id="semana_86"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_69" id="valor_menor_produccion_semana_69" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_69" id="valor_mayor_produccion_semana_69" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_69" id="porcentaje_mortalidad_semana_69" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="87" name="semana_87" class="semana" id="semana_87"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_70" id="valor_menor_produccion_semana_70" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_70" id="valor_mayor_produccion_semana_70" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_70" id="porcentaje_mortalidad_semana_70" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="88" name="semana_88" class="semana" id="semana_88"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_71" id="valor_menor_produccion_semana_71" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_71" id="valor_mayor_produccion_semana_71" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_71" id="porcentaje_mortalidad_semana_71" class="porcentaje_mortalidad"></td>
	 					    </tr>
	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="89" name="semana_89" class="semana" id="semana_89"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_72" id="valor_menor_produccion_semana_72" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_72" id="valor_mayor_produccion_semana_72" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_72" id="porcentaje_mortalidad_semana_72" class="porcentaje_mortalidad"></td>
	 					    </tr>	


	 					    <tr>
	 						  <td class="col-xs-2"><input class="semana" type="button" value="90" name="semana_90" class="semana" id="semana_90"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_menor_produccion_semana_73" id="valor_menor_produccion_semana_73" class="valores_menores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="valor_mayor_produccion_semana_73" id="valor_mayor_produccion_semana_73" class="valores_mayores"></td>
	 						  <td class="col-xs-2"><input class="form-control" type="number" name="porcentaje_mortalidad_semana_73" id="porcentaje_mortalidad_semana_73" class="porcentaje_mortalidad"></td>
	 					    </tr> 	
	 				      </tbody>				
		                </table>
		              </div>  
		              <div id="contenedor"></div>


		            </div>
		          </div> 
		    
		            <div class="box">
		            	
		              <button class="button button--Registrar" title="Guardar" class="semana" type="button" value="registrar" onclick="enviar()"><i class="button__icon icon_b icon-floppy2"></i><span>Guardar</span></button>	

		               <button class="button button--Actualizar" title="Consultar Registros Del Dia" type="button" value="actualizar" onclick="actualizar()"><i class="button__icon icon_b icon-refresh-page-option "></i><span>Actualizara</span></button>
		               <a class="button button--Consultar" title="Consultar Registros" href="../Consultar/Cons_Parametros.php"><i class="button__icons icon_b icon-search12"></i><span>Consultar</span></a>
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


      			  <div class="modal fade" id="buscar_galpon" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      				 <div class="modal-dialog">
        			   <div class="modal-content">
                         <div class="header_buscar">
          				   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              			   <h3 class="header_buscar-titulo">Buscar Parametros</h3>
                         </div>

                         <div class="modal-body">
    
						   <select name="consultar_manual" id="consultar_manual" class="form-control">
						     <option value="Selecciona">Selecciona</option>
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
						       </form>	

						     <!-- <input type="button" value="consultar" onclick="consultar_manual()"> -->

						     <div class="box-1">
							  <button class="button-s button--buscar_hora" title="Buscar" type="button" value="consultar" onclick="consultar_manual()"><i class="button__icons icon_b icon-search12"></i><span>Buscar</span></button>
							</div>



						     <div id="contenedor_encasetamiento"></div>
       				       </div>
      				   </div>
   				  	 </div>
				   </div>


<script src="../../../assets/js/mlpushmenu.js"></script>
  <script>
  	  // para els transiciones del menu de navegacion
	  new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	</script>
<script>
	
function enviar() {
    var semana = document.querySelectorAll(".semana");
    var formulario = document.getElementById('formulario').action = "conexion/Conex_Parametros.php";
    for (var i = 0; i < semana.length; i++) {
        semana[i].type = "text";
    }
    var formulario = document.getElementById('formulario').submit();
}

function actualizar() {
    var semana = document.querySelectorAll(".semana");
    var formulario = document.getElementById('formulario').action = "Actualizar/Actu_Parametros.php";
    for (var i = 0; i < semana.length; i++) {
        semana[i].type = "text";
    }
    var formulario = document.getElementById('formulario').submit();
}
$(document).ready(inicio)

function inicio() {
    var contador = 1;
    var contador_semanas = 18;
    var semanas = "semana_";
    var valor_menor = "valor_menor_produccion_semana_";
    var valor_mayor = "valor_mayor_produccion_semana_";
    var mortalidad = "porcentaje_mortalidad_semana_";
    var valores_menores = document.querySelectorAll("input");
    for (var i = 0; i < valores_menores.length; i++) {
        valores_menores[i].addEventListener("keyup", validar_valores_menores, false);
    }
};

function validar_valores_menores(e) {
    var id_input = e.target.id;
    var input = document.getElementById(id_input).value;
    if (input < 0) {
        return false;
    } else if (isNaN(input) == false) {
        return false;
    } else {
        return true;
    }
}

function Buscar_Manuales() {
    $("#buscar_galpon").modal("show");
}

function consultar_manual() {
    var consultar_manual = document.getElementById('consultar_manual').value;
    $("#contenedor").load("Cons_Registro/Cons-Registro_Parametros.php", {
        consultar_manual: consultar_manual
    });
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


<!-- 		


while (contador<=73) {
	
// var semana=semanas + contador_semanas;

var valores_menores=valor_menor + contador;
var valores_mayores=valor_mayor + contador;
var porcentaje_mortalidad=mortalidad + contador;










var contador=contador+1;
var contador_semanas=contador_semanas+1;
} -->