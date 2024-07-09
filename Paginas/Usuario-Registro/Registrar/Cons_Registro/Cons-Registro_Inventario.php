<?php 


$id_hora=$_POST["id_hora"];

					 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM inventarios WHERE idinventario='$id_hora' order by Hora DESC";
							 $resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>

var Articulo=document.getElementById('Articulo').value='$fila[1]';
var Novedad=document.getElementById('Novedad').value='$fila[2]';
var fecha_inventario=document.getElementById('fecha_inventario').value='$fila[3]';
var hora_inventario=document.getElementById('hora_inventario').value='$fila[4]';
validar_articulo();

if (Novedad=='Salida') {
var cantidad=parseInt(document.getElementById('cantidad').value=$fila[5]*-1);
}else{

var cantidad=parseInt(document.getElementById('cantidad').value=$fila[5]);
	
}

</script>";

 ?>