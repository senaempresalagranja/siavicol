<?php 

$id_encasetamiento=$_POST["id_encasetamiento"];
$fecha_mortalidad=$_POST["fecha_mortalidad"];
$fecha_mortalidad1=$_POST["fecha_mortalidad1"];
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";
echo "<label for='id_encasetamiento'>Selecciona Hora De La Muerte</label>
  <select name='' class='form-control' id='id_mortalidad1' onclick='consultar_encasetamiento()'>
<option value='Seleccion'>Selecciona</option>";
							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM `mortalidad` WHERE Fecha BETWEEN '$fecha_mortalidad' AND '$fecha_mortalidad1' and idEncasetamiento='$id_encasetamiento' order by Fecha DESC";
							 $resource=mysqli_query($conexion, $query);

							 while ($fila=mysqli_fetch_row($resource)) {
							 	echo "<option value='$fila[0]'>$fila[4]</option>";
							 }

echo "</select>";

 ?>