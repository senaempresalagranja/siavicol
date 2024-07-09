<?php 
$usuario=$_POST["usuario"];
$Nombre_persona=$_POST["Nombre_persona"];
$rol=$_POST["rol"];
$nickname=$_POST["nickname"];
$contraseña_actual=(md5(md5($_POST['contraseña_actual'])));

$contrasena_nueva=(md5(md5($_POST['contrasena_nueva'])));

$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";



$conexion=mysqli_connect($local,$usua,$contra,$bd);

$query="SELECT * from usuarios WHERE  idUsuario='$usuario'";

			$resource=mysqli_query($conexion,$query);	
$fila=mysqli_fetch_row($resource);

			if ($fila[4]==$contraseña_actual) {
	
		
			$query="UPDATE usuarios SET nombrePersona='$Nombre_persona',	rolUsuario='$rol',nombreUsuario='$nickname' ,	contrasena='$contrasena_nueva'  WHERE  idUsuario='$usuario'"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>

		swal({
  			title: 'Modificación Exitosa',
  			text: 'Acabas de Modificar Un Usuario',
  			type: 'success',
  			background: '#fff url(../../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
	
}else{
	echo "<script>

		swal({
  			title: 'Error!',
  			text: 'Actualización No Exitosa',
  			type: 'error',
  			background: '#fff url(../../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
}



			}else{
			echo "<script>

		swal({
  			title: 'Error',
  			text: 'Contraseña Actual Incorrecta ',
  			type: 'error',
  			background: '#fff url(../../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";



}





 ?>