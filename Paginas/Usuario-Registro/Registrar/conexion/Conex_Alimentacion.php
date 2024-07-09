<?php

$encasetamiento     = $_POST["encasetamiento"];
$articulo           = $_POST["articulo"];
$cantidad           = $_POST["cantidad"];
$fecha_Alimentacion = $_POST["fecha_Alimentacion"];
$hora_Alimentacion  = $_POST["hora_Alimentacion"];

$local   = "localhost";
$usuario = "root";
$contra  = "";
$bd      = "siavicol";

$conexion = mysqli_connect($local, $usuario, $contra, $bd);

$NomReg1 = mysqli_query($conexion, "SELECT `idinventario`, `idArticulo`, `Novedad`, `Fecha`, `Hora`, SUM(Cantidad) FROM `inventarios` where idArticulo='$articulo'");

$fila = mysqli_fetch_row($NomReg1);

if ($cantidad > $fila[5]) {
// echo "no se puede sacar " . $cantidad . " kg  de  $fila[3] solo hay " . $fila[5];

    echo "<script>

   		swal({
  			title: 'Error!',
  			text: 'no se puede sacar $cantidad   kg   solo hay  $fila[5] Kg',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
	    })

	</script>";
} else {

    $query    = "INSERT INTO `alimentacion`(`idEncasetamiento`, `idArticulo`, `Cantidad`, `Fecha`, `Hora`) VALUES ($encasetamiento,$articulo,$cantidad,'$fecha_Alimentacion','$hora_Alimentacion')";
    $resource = mysqli_query($conexion, $query);



    echo "quedan $cantidad kg de  Alimento <br>";
    $query1    = "INSERT INTO `inventarios`(`idArticulo`, `Novedad`, `Fecha`, `Hora`, `Cantidad`) VALUES ($articulo,'Salida','$fecha_Alimentacion','$hora_Alimentacion',$cantidad*-1) ";
    $resource1 = mysqli_query($conexion, $query1);

    if ($resource == true && $resource1==true ) {

        echo "<script>

      swal({
        title: 'Registro Exitoso!',
        text: 'Quedan $fila[5] kg de  Alimento ',
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
