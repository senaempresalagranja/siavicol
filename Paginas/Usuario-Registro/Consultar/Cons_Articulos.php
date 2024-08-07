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
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Consultar Artículos</title>
	<link rel="shortcut icon" href="../../../assets/img/Logo_Siavicol.ico">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="../../../assets/css/component.css" />
	<link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css"/>
	
	<script type="text/javascript" src="../../../assets/js/modernizr.custom.js"></script>
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
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Galpon.php">Registrar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Encasetamiento.php">Registrar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Produccion.php">Registrar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Alimentacion.php">Registrar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Mortalidad.php">Registrar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Tipo_Insumo.php">Registrar Tipos De Insumo</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Marcas_Articulos.php">Registrar Marcas De Articulos</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Articulos.php">Registrar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="../Registrar/Reg_Inventario.php">Registrar Inventario</a></li>	  
				</ul>
			  </div>
			</li>

			<li class="li_m icon_m icon-right-chevron">
			  <a class="a_m icon_m icon-search12" href="#">Consultar</a>
			  <div class="mp-level">
				<h2 class="h2_m icon_m icon-search12">Consultar</h2>
				<a class="a_m mp-back" href="#">Volver</a>
				<ul class="ul_m">
				  <li class="li_m"><a class="a_m" href="Cons_Galpon.php">Consultar Galpón</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Encasetamiento.php">Consultar Encasetamiento</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Produccion.php">Consultar Producción</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Alimentacion.php">Consultar Alimentación</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Mortalidad.php">Consultar Mortalidad</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Articulos.php">Consultar Artículos</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Inventario.php">Consultar Inventario</a></li>
				  <li class="li_m"><a class="a_m" href="Cons_Parametros.php">Consultar Parámetros</a></li>
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
                <h1 class="banner_h1">Consultar Artículos</h1>
              </div>
          </div>
          <!-- Contenido de la pagina -->
								<!-- tabla-->
		    <div class="container">				
              <table class="table table-hover table-bordered" id="sampleTable">
              	<thead>
		          <tr>
			        <th>Tipo Insumo</th>
			        <th>Marca</th>
			        <th>Nombre</th>
			        <th>Unidad Medida</th>
			        <th>Cantidad</th>
		          </tr>
	            </thead>
	            <tbody>
				  <?php 

					$local="localhost";
					$usuario="root";
					$contra="";
					$bd="siavicol";

					$conexion=mysqli_connect($local,$usuario,$contra,$bd);
					$busqueda="SELECT articulos.idArticulo, tipoarticulos.Descripcion, marcas.Nombre, articulos.Nombre, `UnidadMedida`FROM `articulos` INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo INNER JOIN marcas ON articulos.idMarca=marcas.idMarca";
					// $busqueda="SELECT articulos.idArticulo, tipoarticulos.Descripcion, marcas.Nombre, articulos.Nombre, `UnidadMedida`, SUM(inventarios.Cantidad) FROM `articulos` INNER JOIN inventarios ON articulos.idArticulo=inventarios.idArticulo INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo INNER JOIN marcas ON articulos.idMarca=marcas.idMarca GROUP BY idArticulo ORDER BY articulos.Nombre";
     
					$query=mysqli_query($conexion,$busqueda);
					while ($fila=mysqli_fetch_row($query)){


$id_articulo=$fila[0];

			$busqueda1="SELECT articulos.idArticulo, tipoarticulos.Descripcion, marcas.Nombre, articulos.Nombre, `UnidadMedida`, SUM(inventarios.Cantidad) FROM `articulos` INNER JOIN inventarios ON articulos.idArticulo=inventarios.idArticulo INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo INNER JOIN marcas ON articulos.idMarca=marcas.idMarca where articulos.idArticulo='$id_articulo' GROUP BY idArticulo ORDER BY articulos.Nombre";
			$resource=mysqli_query($conexion,$busqueda1);
			$fila1=mysqli_fetch_row($resource);

if ($fila1==true) {
	$cantidad=$fila1[5];
}else{
	$cantidad=0;
}
						echo "<tr> ";

						echo "<td>$fila[1]  </td>";
						echo "<td>$fila[2]  </td>";
						echo "<td>$fila[3] </td>";
						echo "<td>$fila[4] </td>";					
						echo "<td>$cantidad</td>

						</tr>";

						}

 					?>
                </tbody>
			  </table>
			</div>  
          <div class="box">
			<a class="button button--Registrar" href="../Registrar/Reg_Alimentacion.php" ><i class="button__icons icon_b icon-reply-arrow"></i><span>Guardar</span></a>

			<a class="button button--Excel" target="_blank" href="../Exportar/Exportar_Excel/Expor-Excel_Articulos.php"><i class="button__icons icon_b icon-xls"></i><span>Exportar Excel</span></a>
					
			<a class="button button--PDF" target="_blank" href="../Exportar/Exportar_PDF/Expor-PDF_Articulos.php"><i class="button__icons icon_b icon-pdf"></i><span>Exportar PDF</span></a>
					
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

	<script type="text/javascript" src="../../../assets/js/mlpushmenu.js"></script>
	<script type="text/javascript" src="../../../assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/plugins/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="../../../assets/js/plugins/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
	// para els transiciones del menu de navegacion
	new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
	// para que funcione el dataTable
	$('#sampleTable').DataTable();
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
