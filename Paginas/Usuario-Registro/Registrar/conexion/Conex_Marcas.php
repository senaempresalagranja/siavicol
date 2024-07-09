<?php 



$Marca=$_POST["Marca"];

$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";


$conexion=mysqli_connect($local,$usua,$contra,$bd);
$query="SELECT * FROM marcas WHERE Nombre='$Marca'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {


		$conexion=mysqli_connect($local,$usua,$contra,$bd);
		$query="INSERT INTO  marcas (Nombre) VALUES ('$Marca')";
		$resource=mysqli_query($conexion,$query);
		if ($resource==true) {
		
		echo "<script>

		swal({
  			title: 'Registro Exitoso!',
  			text: 'Has Registrado Una Marca',
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
  			text: 'La Marca $Marca Ya Existe',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
}

 ?>