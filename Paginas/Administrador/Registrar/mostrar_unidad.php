<?php 

$Articulo=$_POST["Articulo"];


if ($Articulo=="Selecciona") {
	# code...
}else{

							$local="localhost";
							$usuario="root";
							$contra="";
							$bd="siavicol";

$conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query1="SELECT * FROM `articulos` WHERE idArticulo=$Articulo";
$resource=mysqli_query($conexion,$query1);

$fila=mysqli_fetch_row($resource);


echo "($fila[4])";
}




 ?>