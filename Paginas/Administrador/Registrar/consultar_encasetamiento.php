<?php 

	$galpon_buscar=$_POST["galpon_buscar"];	
	$fecha_inicio_consulta=$_POST["fecha_inicio_consulta"];	
	$fecha_fin_consulta=$_POST["fecha_fin_consulta"];	


							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT idEncasetamiento, NombreGalpon from encasetamiento INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon  WHERE encasetamiento.idGalpon=$galpon_buscar AND FechaInicio BETWEEN '$fecha_inicio_consulta' AND '$fecha_fin_consulta'"; 
							 echo "
							 <label class='form-control-label' for='fecha_produccion_select'>Selecciona el encasetamiento consultado</label>
							 <select name='' onclick='buscar_encasetamiento1()' class='form-control' id='id_encasetamiento'>

							 <option value='Selecciona'>Selecciona</option>";
							 $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]'  data-dismiss='modal'>$fila[1]</option>";
							 }

							 echo "</select>";

 ?>