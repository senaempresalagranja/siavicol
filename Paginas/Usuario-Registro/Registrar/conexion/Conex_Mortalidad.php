<?php

$encasetamiento = $_POST["encasetamiento"];
$numero_aves    = $_POST["numero_aves"];
$fecha_muerte   = $_POST["fecha_muerte"];
$hora_muerte    = $_POST["hora_muerte"];
$motivo         = $_POST["motivo"];

$local   = "localhost";
$usuario = "root";
$contra  = "";
$bd      = "siavicol";

$conexion = mysqli_connect($local, $usuario, $contra, $bd);

$query             = "SELECT * FROM encasetamiento where idEncasetamiento='$encasetamiento'";
$resource          = mysqli_query($conexion, $query);
$cantidad_gallinas = mysqli_fetch_row($resource);

if ($cantidad_gallinas[5] < $numero_aves) {
    // echo "no puede matar $numero_aves gallinas  porque solo hay $cantidad_gallinas[4] para matar";

    echo "<script>

		swal({
  			title: 'Error!',
  			text: 'no puede matar $numero_aves gallinas  porque solo hay $cantidad_gallinas[5] para matar',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
} else {

    $query    = "INSERT INTO `mortalidad`( `idEncasetamiento`, `NumeroAves`, `Fecha`, `Hora`, `Motivo`) VALUES ($encasetamiento,$numero_aves,'$fecha_muerte','$hora_muerte','$motivo')";
    $resource = mysqli_query($conexion, $query);

    $cantidad_gallinas = $cantidad_gallinas[5] - $numero_aves;



    if ($resource == true ) {
        echo "<script>

			swal({
  				title: 'Registro Exitoso!',
  				type: 'success',
  				background: '#fff url(../../../assets/img/Huevo3.png)',
  				confirmButtonColor: '#ff9800'
				})

	  	</script>";
    } else {

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
