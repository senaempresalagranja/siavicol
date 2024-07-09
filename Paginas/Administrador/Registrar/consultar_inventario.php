<?php 

		$articulo_consulta=$_POST["articulo_consulta"];
		$fecha_1=$_POST["fecha_1"];
		$fecha_2=$_POST["fecha_2"];

	
					 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM inventarios WHERE idArticulo=$articulo_consulta AND Fecha BETWEEN '$fecha_1' AND'$fecha_2'";
							 $resource=mysqli_query($conexion,$query);
echo "<label class='form-control-label' for='id_hora'>Selecciona La hora </label> 

	  <select name='' class='form-control'  onclick='consultar_inventario1()' id='id_hora'>

<option value='Selecciona' >Selecciona</option>";

							 while ($fila=mysqli_fetch_row($resource)) {
							 	
							 	echo "<option value='$fila[0]' data-dismiss='modal' >$fila[4]</option>";

							 }



 ?>