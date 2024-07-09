<?php 
$id_articulo=$_POST["id_articulo"];
$Tipo_articulo=$_POST["Tipo_articulo"];
$Nombre_articulo=$_POST["Nombre_articulo"];
$Unidad_Medida=$_POST["Unidad_Medida"];

$Marca=$_POST["Marca"];



							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
		
							 	 $query="UPDATE `articulos` SET `idTipoArticulo`=$Tipo_articulo,`idMarca`=$Marca,`Nombre`='$Nombre_articulo',`UnidadMedida`='$Unidad_Medida' WHERE idArticulo='$id_articulo'";
							 $resource=mysqli_query($conexion,$query);

							 if ($resource==true) {
							 echo "<script>

									swal({
  										title: 'Actualización Exitosa',
  										text: 'Acaba de actualizar un articulo',
  										type: 'success',
  										background: '#fff url(../../../assets/img/Huevo3.png)',
  										confirmButtonColor: '#ff9800'
										})

	  							</script>";
							 }else{
							 	echo "<script>

										swal({
  											title: 'Error!',
  											text: 'Actualización No Exitosa',
  											type: 'error',
  											background: '#fff url(../../../assets/img/Huevo3.png)',
  											confirmButtonColor: '#ff9800'
											})

	  								</script>";
							 }



 ?>