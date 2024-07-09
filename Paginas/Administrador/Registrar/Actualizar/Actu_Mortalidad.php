<?php 
$id_mortalidad=$_POST["id_mortalidad"];
$encasetamiento=$_POST["encasetamiento"];
$numero_aves=$_POST["numero_aves"];
$fecha_muerte=$_POST["fecha_muerte"];
$hora_muerte=$_POST["hora_muerte"];
$motivo=$_POST["motivo"];

							$local="localhost";
							$usuario="root";
							$contra="";
							$bd="siavicol";

							$conexion=mysqli_connect($local,$usuario,$contra,$bd);



$query="SELECT * FROM `mortalidad` INNER JOIN encasetamiento ON mortalidad.idEncasetamiento=encasetamiento.idEncasetamiento";
$resource4=mysqli_query($conexion,$query);
$fila=mysqli_fetch_row($resource4);
$gallinas_originasles=$fila[10]+$fila[2];

$query="SELECT * FROM encasetamiento where idEncasetamiento='$encasetamiento'";
$resource=mysqli_query($conexion, $query);
$cantidad_gallinas=mysqli_fetch_row($resource);

if ($gallinas_originasles<$numero_aves) {
	echo "no puede matar $numero_aves gallinas  porque solo hay $gallinas_originasles para matar";
}else{

	$query="UPDATE `mortalidad` SET idEncasetamiento=$encasetamiento,NumeroAves=$numero_aves,Fecha='$fecha_muerte',Hora='$hora_muerte',Motivo='$motivo' WHERE idMortalidad='$id_mortalidad'";
						$resource=mysqli_query($conexion, $query);


$gallinas_originasles=$gallinas_originasles-$numero_aves;

$cantidad_gallinas=$cantidad_gallinas[4]-$numero_aves;
$query="UPDATE `encasetamiento` SET Cantidad=$gallinas_originasles WHERE idEncasetamiento=$encasetamiento";
						$resource1=mysqli_query($conexion, $query);



						if ($resource==true && $resource1==true) {
							echo "<script>

		swal({
  			title: 'Actualización Exitosa',
  			text: 'Acaba de actualizar una Mortalidad',
  			type: 'success',
  			background: '#fff url(../../../assets/img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";
						}else{

							echo "registro fallido";
						}
}

						
 ?>