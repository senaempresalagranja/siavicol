<?php  
	

// $TotalProduccion=$_POST["TotalProduccion"];

$id=$_POST["id"];
$local="localhost";
$usua="root";
$contra="";
$bd="siavicol";
$conexion=mysqli_connect($local,$usua,$contra,$bd);
$total_huevos=$_POST["total_huevos"];
$encasetamiento=$_POST["encasetamiento"];
$responsable=$_POST["responsable"];
$fecha_produccion=$_POST["fecha_produccion"];

$hora_produccion=$_POST["hora_produccion"];
//$cantidad_huevos_comerciales=$_POST["cantidad_huevos_comerciales"];
$cantidad_huevos_no_comerciales=$_POST["cantidad_huevos_no_comerciales"];
$huevo_tipo_A=$_POST["huevo_tipo_A"];
$huevo_tipo_AA=$_POST["huevo_tipo_AA"];
$huevo_tipo_AAA=$_POST["huevo_tipo_AAA"];
$huevo_tipo_B=$_POST["huevo_tipo_B"];
$huevo_tipo_C=$_POST["huevo_tipo_C"];
$huevo_tipo_Jumbo=$_POST["huevo_tipo_Jumbo"];


// echo "$hora_produccion";
if ($hora_produccion>'12:00:00') {
$dia=">";
$tiempo="tarde";
}else{
$dia="<";
$tiempo="mañana";
};


$NomReg1=mysqli_query($conexion, "SELECT * FROM produccion WHERE Fecha= '$fecha_produccion' AND idEncasetamiento='$encasetamiento' AND Hora='$hora_produccion'");

if (mysqli_num_rows($NomReg1) > 0) {
	echo "<script>

alert('Registro ya existe');

	</script>";

}else{




	$query="UPDATE produccion SET Reponsable='$responsable',Fecha='$fecha_produccion',Hora='$hora_produccion',Total_huevos=$total_huevos,CantidadHuevosNoComerciales=$cantidad_huevos_no_comerciales,CantidadTipoA=$huevo_tipo_A,CantidadTipoB=$huevo_tipo_B,CantidadTipoAA=$huevo_tipo_AA,CantidadTipoAAA=$huevo_tipo_AAA,CantidadTipoC=$huevo_tipo_C,CantidadTipoJumbo=$huevo_tipo_Jumbo WHERE idProduccion=$id";	

		$resource=mysqli_query($conexion,$query);	
		if ($resource==true) 
		{
			echo "<script>

					swal({
  						title: 'Actualización Exitosa',
  						text: 'Acaba de actualizar una producción',
  						type: 'success',
  						background: '#fff url(../../../assets/img/Huevo3.png)',
  						confirmButtonColor: '#ff9800'
						})

	  			</script>";
			
		}
		else
		{
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
}










?>