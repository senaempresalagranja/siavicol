<?php 
$marcas=$_POST["marcas"];
$Marca=$_POST["Marca"];




$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";



$conexion=mysqli_connect($local,$usua,$contra,$bd);
			$query="UPDATE marcas SET Nombre='$Marca' WHERE  idMarca='$marcas'"; 	 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>

		swal({
  			title: 'Actualización Exitosa',
  			text: 'Acaba de actualizar una marca',
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