<?php  
	
$id_encasetamiento=$_POST["id_encasetamiento"];
$hoy=$_POST["hoy"];
$Raza=$_POST["Raza"];
$Galpon=$_POST["Galpon"];
$Fecha_Inicio=$_POST["Fecha_Inicio"];
$Fecha_Fin=$_POST["Fecha_Fin"];
$Cantidad_Gallinas=$_POST["Cantidad_Gallinas"];
$Semanas_De_Vida=$_POST["Semanas_De_Vida"];

$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";

$conexion=mysqli_connect($local,$usua,$contra,$bd);


			$query="UPDATE encasetamiento SET idGalpon=$Galpon, IdManual=$Raza,FechaInicio='$Fecha_Inicio',FechaFin='$Fecha_Fin',Cantidad=$Cantidad_Gallinas,NumeroSemanaVida=$Semanas_De_Vida where encasetamiento.idEncasetamiento=$id_encasetamiento"; 	

			$resource=mysqli_query($conexion,$query);	
if ($resource==true) {
echo "<script>

		swal({
  			title: 'Actualización Exitosa!',
  			text: 'Acaba De Actualizar Un Encasetamiento',
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