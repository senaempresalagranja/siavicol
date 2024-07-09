<?php 

$Nombre_Usuario=$_POST["Nombre_Usuario"];
$Rol=$_POST["Rol"];
$Usuario=$_POST["Usuario"];
$Contrasena=(md5(md5($_POST['Contrasena'])));


$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";


$conexion=mysqli_connect($local,$usua,$contra,$bd);
$query="SELECT * FROM usuarios WHERE nombrePersona='$Nombre_Usuario'";
$resource=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource);
if ($fila==false) {



				$conexion=mysqli_connect($local,$usua,$contra,$bd);
			$query="INSERT INTO usuarios (nombrePersona, rolUsuario, nombreUsuario,	contrasena) 
			VALUES ('$Nombre_Usuario','$Rol','$Usuario','$Contrasena')"; 	

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
  			text: 'El Usuario  $Nombre_Usuario Ya Existe',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
}




 ?>