<?php 
$galpon_produccion=$_POST["galpon_produccion"];
						
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";
							 // echo " <label class='form-control-label' for='fecha_produccion_select'>Selecciona La Fecha De Alimentacion</label> ";
echo '<label class="form-control-label" for="fecha_produccion_select">Selecciona La Fecha De Alimentacion</label> 
	  <select name="" id="fecha_produccion_select" onclick="mostrar_hora()" class="form-control">';
	  
echo '<option value="Selecciona">Selecciona</option>';
							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT `idAlimentacion`,`Fecha` FROM alimentacion INNER JOIN encasetamiento ON alimentacion.idEncasetamiento=encasetamiento.idEncasetamiento INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon WHERE galpon.idGalpon=$galpon_produccion GROUP BY Fecha  ORDER BY Fecha  ";
							  $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[1]' >$fila[1]</option>";
								
							 }

							 echo "</select>";
 ?>