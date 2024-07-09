<?php

$Articulo         = $_POST["Articulo"];
$Novedad          = $_POST["Novedad"];
$fecha_inventario = $_POST["fecha_inventario"];
$cantidad         = $_POST["cantidad"];
$hora_inventario  = $_POST["hora_inventario"];

$local   = "localhost";
$usuario = "root";
$contra  = "";
$bd      = "siavicol";

$conexion = mysqli_connect($local, $usuario, $contra, $bd);
$query1   = "SELECT Descripcion FROM articulos INNER JOIN tipoarticulos ON articulos.idTipoArticulo=tipoarticulos.idTipoArticulo where idArticulo='$Articulo'";
$resource = mysqli_query($conexion, $query1);

$fila = mysqli_fetch_row($resource);



if ($Novedad == "Entrada") {

    $query     = "INSERT INTO `inventarios`( `idArticulo`, `Novedad`, `Fecha`,`Hora`, `Cantidad`) VALUES ($Articulo,'$Novedad','$fecha_inventario','$hora_inventario',$cantidad)";
    $resource1 = mysqli_query($conexion, $query);

 

    $query    = "UPDATE articulos SET Cantidad='$cantidad' where idArticulo=$Articulo";
    $resource = mysqli_query($conexion, $query);

    if ($resource1 == true) {
        
        echo "<script>

        swal({
            title: 'Registro Exitoso ',
            text: 'Se Realizo una Entrada',
            type: 'success',
            background: '#fff url(../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
            })

      </script>";
    } else {

        echo " todo mal";
    }

} else if ($Novedad == "Salida") {


    $conexion  = mysqli_connect($local, $usuario, $contra, $bd);
    $query1   = "SELECT SUM(Cantidad) as cantidad FROM `inventarios`";
    $resource = mysqli_query($conexion, $query1);

    $cantidad_base = mysqli_fetch_row($resource);

    if ($cantidad_base[0] < $cantidad) {
        // echo "No se puede sacar $cantidad de $cantidad_base[3] porque solo hay  $cantidad_base[5]";

        echo "<script>

		swal({
  			title: 'Error!',
  			text: 'No se puede sacar $cantidad porque solo hay  $cantidad_base[0]',
  			type: 'error',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
    } else {


    $query     = "INSERT INTO `inventarios`( `idArticulo`, `Novedad`, `Fecha`,`Hora`, `Cantidad`) VALUES ($Articulo,'$Novedad','$fecha_inventario','$hora_inventario',$cantidad * -1)";
    $resource1 = mysqli_query($conexion, $query);

    echo "<script>

        swal({
            title: 'Registro Exitoso ',
            text: 'Se Realizo una Salida',
            type: 'success',
            background: '#fff url(../../../assets/img/Huevo3.png)',
            confirmButtonColor: '#ff9800'
            })

      </script>";

    }

}
