<?php
$Tipo_articulo   = $_POST["Tipo_articulo"];
$Nombre_articulo = $_POST["Nombre_articulo"];
$Unidad_Medida   = $_POST["Unidad_Medida"];

$Marca           = $_POST["Marca"];

$local   = "localhost";
$usuario = "root";
$contra  = "";
$bd      = "siavicol";

$conexion = mysqli_connect($local, $usuario, $contra, $bd);
$query    = "SELECT * FROM articulos where idTipoArticulo=$Tipo_articulo AND Nombre='$Nombre_articulo'";
$resource = mysqli_query($conexion, $query);
$fila     = mysqli_fetch_row($resource);
if ($fila == true) {
    // echo "producto ya existe";
    echo "<script>
    swal({
        title: 'Error!',
        text: 'Este Producto Ya Existe',
        type: 'error',
        background: '#fff url(../../../assets/img/Huevo3.png)',
        confirmButtonColor: '#ff9800'
      })

    </script>";
} else {

    $query    = "INSERT INTO `articulos` (`idTipoArticulo`, `idMarca`, `Nombre`, `UnidadMedida`) VALUES ($Tipo_articulo,$Marca,'$Nombre_articulo','$Unidad_Medida')";
    $resource = mysqli_query($conexion, $query);

    if ($resource == true) {
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
