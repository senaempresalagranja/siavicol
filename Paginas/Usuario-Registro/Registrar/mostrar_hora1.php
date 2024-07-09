<?php 
$galpon_produccion=$_POST["galpon_produccion"];
$fecha_produccion_select=$_POST["fecha_produccion_select"];
	// echo($galpon_produccion)	;				
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";
							 // echo " <label class='form-control-label' for='fecha_produccion_select'>Selecciona La Hora De Alimentacion</label> ";
echo '<label class="form-control-label" for="fecha_produccion_select">Selecciona La Hora De Alimentacion</label>
	  <select name="" id="idAlimentacion" onclick="consultar_alimentacion()" class="form-control">';
	  
echo '<option value="Selecciona">Selecciona</option>';
							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT `idAlimentacion`, `Hora` FROM `alimentacion` INNER JOIN encasetamiento ON alimentacion.idEncasetamiento=encasetamiento.idEncasetamiento
INNER JOIN galpon ON encasetamiento.idGalpon=galpon.idGalpon WHERE Fecha='$fecha_produccion_select' AND galpon.idGalpon='$galpon_produccion' order by Hora";
							  $resource=mysqli_query($conexion,$query);
							 while ($fila=mysqli_fetch_row($resource)) {
								 echo "<option value='$fila[0]'  data-dismiss='modal'>$fila[1]</option>";
								
							 }

							 echo "</select>";
 ?>