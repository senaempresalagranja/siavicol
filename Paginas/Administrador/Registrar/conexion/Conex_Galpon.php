<?php 

$Nombre_Galpon=$_POST["Nombre_Galpon"];
$Extension_Galpon=$_POST["Extension_Galpon"];
$Cantidad_Animales=$_POST["Cantidad_Animales"];
$Estado=$_POST["Estado"];


$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";


$conexion=mysqli_connect($local,$usua,$contra,$bd);
$query="SELECT * FROM galpon WHERE NombreGalpon='$Nombre_Galpon'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {



				$conexion=mysqli_connect($local,$usua,$contra,$bd);
			$query="INSERT INTO galpon (NombreGalpon,ExtensionGalpon,CantidadAnimales,Estado) 
			VALUES ('$Nombre_Galpon','$Extension_Galpon','$Cantidad_Animales','$Estado')"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>

		swal({
  			title: 'Registro Exitoso',
  			type: 'success',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
	
}else{
	echo "<script>

		swal({
  			title: 'Error!',
  			text: 'Registro No Exitoso',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
}


}else {
	// echo "galpon " . $Nombre_Galpon . " Ya Existe";
	echo "<script>

		swal({
  			title: 'Error!',
  			text: 'El Galpón  $Nombre_Galpon Ya Existe',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
}




 ?>