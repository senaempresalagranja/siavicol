<?php 

$Articulo=$_POST["Articulo"];
$Novedad=$_POST["Novedad"];
$fecha_inventario=$_POST["fecha_inventario"];
$cantidad=$_POST["cantidad"];
$hora_inventario=$_POST["hora_inventario"];
$id_hora=$_POST["id_hora"];


							$local="localhost";
							$usuario="root";
							$contra="";
							$bd="siavicol";

$conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT * FROM inventarios where idinventario=$id_hora";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);

if ($Novedad=="Entrada") {
	

$cantidad_entrada=$fila[5];

$conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT `idinventario`, `idArticulo`, `Novedad`, `Fecha`, `Hora`, SUM(Cantidad) as cantidad FROM `inventarios` where idArticulo='$Articulo'";
$resource=mysqli_query($conexion,$query);
$fila1=mysqli_fetch_row($resource);


$cantidad_anterior=$fila1[5]-$cantidad_entrada;





	$query="UPDATE `inventarios` SET `idArticulo`=$Articulo,`Novedad`='$Novedad',`Fecha`='$fecha_inventario',`Hora`='$hora_inventario', Cantidad='$cantidad' WHERE idinventario='$id_hora'";

							$resource1=mysqli_query($conexion,$query);





if ($resource1==true && $resource==true) {
	echo "<script>

			  swal({
  				  title: 'Actualización Exitosa',
  				  text: 'Acaba de actualizar una entrada',
  				  type: 'success',
  				  background: '#fff url(../../../assets/img/Huevo3.png)',
  				  confirmButtonColor: '#ff9800'
			  })
	  	  </script>";
}else{

	echo "<script>

			  swal({
  				  title: 'Error',
  				  text: 'Actualización No Exitosa ',
  				  type: 'error',
  				  background: '#fff url(../../../assets/img/Huevo3.png)',
  				  confirmButtonColor: '#ff9800'
			  })
	  	  </script>";
}





}else{

$cantidad_salida=$fila[5];

$conexion=mysqli_connect($local,$usuario,$contra,$bd);
$query="SELECT `idinventario`, `idArticulo`, `Novedad`, `Fecha`, `Hora`, SUM(Cantidad) as cantidad FROM `inventarios` where idArticulo='$Articulo'";
$resource=mysqli_query($conexion,$query);
$fila1=mysqli_fetch_row($resource);

$cantidad_anterior=$fila1[5]-$cantidad_salida;





if ($cantidad_anterior<$cantidad) {
echo "no se puede sacar $cantidad kg  porque solo hay $cantidad_anterior";

}else{


	$conexion=mysqli_connect($local,$usuario,$contra,$bd);
							$query="UPDATE `inventarios` SET `idArticulo`=$Articulo,`Novedad`='$Novedad',`Fecha`='$fecha_inventario',`Hora`='$hora_inventario', Cantidad='$cantidad'* -1 WHERE idinventario='$id_hora'";
							$resource1=mysqli_query($conexion,$query);


if ($resource1==true) {
	echo "<script>

			  swal({
  				  title: 'Actualización Exitosa',
  				  text: 'Acaba de actualizar una salida',
  				  type: 'success',
  				  background: '#fff url(../../../assets/img/Huevo3.png)',
  				  confirmButtonColor: '#ff9800'
			  })
	  	  </script>";


}else{

	echo "<script>

			  swal({
  				  title: 'Error',
  				  text: 'Actualizacion No Exitosa ',
  				  type: 'error',
  				  background: '#fff url(../../../assets/img/Huevo3.png)',
  				  confirmButtonColor: '#ff9800'
			  })
	  	  </script>";
}

}
}





 ?>