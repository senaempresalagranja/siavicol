<?php 
$tipoarticulos=$_POST["tipoarticulos"];
$Descripcion=$_POST["Descripcion"];




$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";



$conexion=mysqli_connect($local,$usua,$contra,$bd);
			$query="UPDATE tipoarticulos SET Descripcion='$Descripcion' WHERE  idTipoArticulo='$tipoarticulos'"; 	 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>

		swal({
  			title: 'Actualización Exitosa',
  			text: 'Acaba de actualizar un Tipo Insumo',
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