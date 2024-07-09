<?php 

	$id_encasetamiento=$_POST["id_encasetamiento"];


							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM encasetamiento where idEncasetamiento='$id_encasetamiento'"; 
							 $resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
							 echo "<script>

var Galpon=document.getElementById('Galpon').value='$fila[1]';
var Raza=document.getElementById('Raza').value='$fila[2]';
var Fecha_Inicio=document.getElementById('Fecha_Inicio').value='$fila[3]';
var Fecha_Fin=document.getElementById('Fecha_Fin').value='$fila[4]';
var Cantidad_Gallinas=document.getElementById('Cantidad_Gallinas').value='$fila[5]';
var Semanas_De_Vida=document.getElementById('Semanas_De_Vida').value='$fila[6]';


							 </script>";

 ?>