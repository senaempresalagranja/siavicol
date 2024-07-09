<?php 

$Galpon=$_POST["Galpon"];


					 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM galpon where idGalpon='$Galpon'";
							 $resource=mysqli_query($conexion,$query);
							 $fila=mysqli_fetch_row($resource);
							 echo "(se recomienda " . $fila[3] . " gallinas)";

							 echo "<script>


var gantidad_recomendable_gallinas=parseInt('$fila[3]');



							 </script>";
								 


 ?>