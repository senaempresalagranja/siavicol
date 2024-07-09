<?php 

$id_articulo=$_POST["id_articulo"];



							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM articulos where idArticulo='$id_articulo'";
							 $resource=mysqli_query($conexion,$query);
							 $fila=mysqli_fetch_row($resource);


							 echo "<script>
	var Tipo_articulo=document.getElementById('Tipo_articulo').value='$fila[1]'

	var Marca=document.getElementById('Marca').value='$fila[2]'
	var Nombre_articulo=document.getElementById('Nombre_articulo').value='$fila[3]'
	var Unidad_Medida=document.getElementById('Unidad_Medida').value='$fila[4]'



							 </script>";


 ?>