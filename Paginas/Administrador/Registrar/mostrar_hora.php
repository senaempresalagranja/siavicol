<?php 
$galpon_produccion=$_POST["galpon_produccion"];
$fecha_produccion_select=$_POST["fecha_produccion_select"];		

			
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";
							 // echo "SELECCIONA LA HORA DE PRODUCCION";
echo ' <label class="form-control-label" for="galpon_produccion">Selecciona La Hora De Produccion</label>
<select name="" id="hora_produccion_select" onclick="consultar_produccion()" class="form-control">';
echo '<option value="Selecciona">Selecciona</option>';
							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT `idProduccion`, `Hora` FROM `produccion` WHERE Fecha='$fecha_produccion_select' AND idEncasetamiento='$galpon_produccion'";
							  $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]'  data-dismiss='modal'>$fila[1]</option>";
								
							 }

							 echo "</select>";
 ?>