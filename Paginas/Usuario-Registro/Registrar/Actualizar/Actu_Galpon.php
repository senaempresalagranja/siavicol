<?php 
$galpon=$_POST["galpon"];
$Nombre_Galpon=$_POST["Nombre_Galpon"];
$Extension_Galpon=$_POST["Extension_Galpon"];
$Cantidad_Animales=$_POST["Cantidad_Animales"];
$Estado=$_POST["Estado"];



$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";



$conexion=mysqli_connect($local,$usua,$contra,$bd);
			$query="UPDATE galpon SET NombreGalpon='$Nombre_Galpon',ExtensionGalpon='$Extension_Galpon',CantidadAnimales='$Cantidad_Animales',Estado='$Estado' WHERE  idGalpon='$galpon'"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>

		swal({
  			title: 'Actualización Exitosa',
  			text: 'Acaba de actualizar un galpón',
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