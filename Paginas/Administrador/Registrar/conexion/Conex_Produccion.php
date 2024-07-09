<?php  
	

// $TotalProduccion=$_POST["TotalProduccion"];


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


echo "$hora_produccion";
if ($hora_produccion>12) {
$dia=">";
$tiempo="tarde";
}else{
$dia="<";
$tiempo="mañana";
};

$NomReg1=mysqli_query($conexion, "SELECT * FROM produccion WHERE Fecha= '$fecha_produccion' AND idEncasetamiento='$encasetamiento' AND Hora='$hora_produccion'");

if (mysqli_num_rows($NomReg1) > 0) {
	echo "<script>

		swal({
  			title: 'Error!',
  			text: 'Este Registro Ya Existe',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
		})

	</script>";

}else{
// SELECT  week(`Fecha`) as semana, month(`Fecha`) mes, SUM(CantidadTipoA) as huevos_A, SUM(`CantidadTipoB`) AS huevos_B, SUM(`CantidadTipoAA`) AS huevo_AA, SUM(`CantidadTipoAAA`) AS huevos_AAA, SUM(`CantidadTipoC`) AS huevo_C, SUM(`CantidadTipoJumbo`) AS huevos_Jumbo  FROM `produccion` GROUP BY semana
$NomReg=mysqli_query($conexion, "SELECT * FROM produccion WHERE Fecha= '$fecha_produccion' AND idEncasetamiento='$encasetamiento' AND Hora$dia '12:00:00'");

if (mysqli_num_rows($NomReg) > 0) 
{

// alert('ya se hizo un registro en la ' + '$tiempo' + ' de la fecha ' +  '$fecha_produccion');
	echo "<script>


		swal({
  			title: 'Error!',
  			text: 'Ya se hizo un registro en la  $tiempo  de la fecha  $fecha_produccion',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
		})

	</script>";

}
else
{
	
	$query="INSERT INTO `produccion`( `idEncasetamiento`, `Reponsable`, `Fecha`, `Hora`, `Total_huevos`,  `CantidadHuevosNoComerciales`, `CantidadTipoA`, `CantidadTipoB`, `CantidadTipoAA`, `CantidadTipoAAA`, `CantidadTipoC`, `CantidadTipoJumbo`) VALUES ('$encasetamiento', '$responsable', '$fecha_produccion', '$hora_produccion', '$total_huevos', '$cantidad_huevos_no_comerciales', '$huevo_tipo_A', '$huevo_tipo_B', '$huevo_tipo_AA','$huevo_tipo_AAA', '$huevo_tipo_C', '$huevo_tipo_Jumbo'  )";	

		$resource=mysqli_query($conexion,$query);	
		if ($resource==true) 
		{
			echo "<script>

				swal({
  					title: 'Registro Exitoso!',
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
  					text: 'Registro No Exitoso',
  					type: 'error',
  					background: '#fff url(../../../assets/img/Huevo3.png)',
  					confirmButtonColor: '#ff9800'
				})

			</script>";
		}
}

	}		

?>
