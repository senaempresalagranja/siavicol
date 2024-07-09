<?php  
	

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

$NomReg1=mysqli_query($conexion, "SELECT * FROM `galpon` WHERE idGalpon='$Galpon' AND Estado='Inactivo'");

if (mysqli_num_rows($NomReg1) > 0) {

  // echo"este galpo se encuentra innactivo hijo de perra";
  echo "<script>

      swal({
        title: 'Error!',
        text: 'Este Galpón Se Encuentra Inactivo ',
        type: 'error',
        background: '#fff url(../../../assets/img/Huevo3.png)',
        confirmButtonColor: '#ff9800'
      })

  </script>";

}else{





$NomReg1=mysqli_query($conexion, "SELECT * FROM `encasetamiento` WHERE idGalpon='$Galpon' AND FechaInicio BETWEEN '$Fecha_Inicio' AND '$Fecha_Fin'");

if (mysqli_num_rows($NomReg1) > 0) {

	echo "<script>

   		swal({
  			title: 'Error!',
  			text: 'Este Galpon Se Encuentra Con Encasetamiento',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
	    })

	</script>";

}else{

$conexion=mysqli_connect($local,$usua,$contra,$bd);

$NomReg1=mysqli_query($conexion, "SELECT * FROM `encasetamiento` WHERE idGalpon='$Galpon' AND FechaFin BETWEEN '$Fecha_Inicio' AND '$Fecha_Fin'");

if (mysqli_num_rows($NomReg1) > 0) {

	echo "<script>

		swal({
  			title: 'Error!',
  			text: 'Este Galpon Se Encuentra Con Encasetamiento',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
	    })
	</script>";

}
else{

			$query="INSERT INTO encasetamiento (idGalpon,IdManual,FechaInicio,FechaFin,Cantidad,NumeroSemanaVida) 
			VALUES ('$Galpon',$Raza,'$Fecha_Inicio','$Fecha_Fin','$Cantidad_Gallinas','$Semanas_De_Vida')"; 	
			$resource=mysqli_query($conexion,$query);	


      $query2="UPDATE `galpon` SET `Estado`='Inactivo' WHERE `idGalpon`=$Galpon";
      $resource2=mysqli_query($conexion,$query2);

if ($resource==true && $resource2) {
echo "<script>

		swal({
  			title: 'Registro Exitoso!',
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

}





}



}



	

?>