<?php 

$idAlimentacion=$_POST["idAlimentacion"];
$encasetamiento=$_POST["encasetamiento"];
$articulo=$_POST["articulo"];
$cantidad=$_POST["cantidad"];
$fecha_Alimentacion=$_POST["fecha_Alimentacion"];
$hora_Alimentacion=$_POST["hora_Alimentacion"];


							$local="localhost";
							$usuario="root";
							$contra="";
							$bd="siavicol";

							$conexion=mysqli_connect($local,$usuario,$contra,$bd);
$NomReg1=mysqli_query($conexion, "SELECT inventarios.idArticulo, `idTipoArticulo`, `idMarca`, `Nombre`, `UnidadMedida`,SUM(inventarios.Cantidad) FROM `articulos` INNER JOIN inventarios ON articulos.idArticulo=inventarios.idArticulo WHERE articulos.idArticulo='$articulo'");						
$cantidad_actual=mysqli_fetch_row($NomReg1);
$cantidad_actual=$cantidad_actual[5];
$NomReg1=mysqli_query($conexion, "SELECT * FROM alimentacion where idAlimentacion='$idAlimentacion'");						
$cantidad_anterior=mysqli_fetch_row($NomReg1);
$cantidad_anterior=$cantidad_anterior[3]+$cantidad_actual;


if ($cantidad>$cantidad_anterior) {
echo "no se puede sacar $cantidad  kg  de  $cantidad_anterior[3] solo hay $cantidad_actual";
}else{
$NomReg1=mysqli_query($conexion, "SELECT inventarios.idArticulo, `idTipoArticulo`, `idMarca`, `Nombre`, `UnidadMedida`,SUM(inventarios.Cantidad) FROM `articulos` INNER JOIN inventarios ON articulos.idArticulo=inventarios.idArticulo WHERE articulos.idArticulo='$articulo'");						
$cantidad_actual=mysqli_fetch_row($NomReg1);
$cantidad_actual=$cantidad_actual[4];
$NomReg1=mysqli_query($conexion, "SELECT * FROM alimentacion where idAlimentacion='$idAlimentacion'");						
$cantidad_anterior=mysqli_fetch_row($NomReg1);
$cantidad_anterior=$cantidad_anterior[3]+$cantidad_actual;

	

							$query="UPDATE `alimentacion` SET `idEncasetamiento`=$encasetamiento,`idArticulo`=$articulo,`Cantidad`=$cantidad,`Fecha`='$fecha_Alimentacion',`Hora`='$hora_Alimentacion' WHERE idAlimentacion='$idAlimentacion'";
							$resource=mysqli_query($conexion,$query);

$cantidad=$cantidad_anterior-$cantidad;







if ($resource==true) {
	
echo "<script>

      swal({
        title: 'Actualización Exitosa',
        text: 'Quedan $cantidad kg de  Alimento',
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

}



 ?>