<?php 

$nombre_manual=$_POST["nombre_manual"];

$local="localhost";
$usuario="root";
$contra="";
$base="siavicol";
$conexion=mysqli_connect($local,$usuario,$contra,$base);



$query="INSERT INTO `manuales`(`NombreManual`) VALUES ('$nombre_manual')";
$resource=mysqli_query($conexion,$query);


$query="SELECT MAX(IdManual) FROM `manuales`";
$resource=mysqli_query($conexion,$query);
$id_manual=mysqli_fetch_row($resource);
$id_manual=$id_manual[0];




$contador=1;
$contador_semanas=18;
$semanas="semana_";
$valor_menor="valor_menor_produccion_semana_";
$valor_mayor="valor_mayor_produccion_semana_";
$mortalidad="porcentaje_mortalidad_semana_";

while ($contador<=73) {
	
$semana=$semanas . $contador_semanas;
$valores_menores=$valor_menor . $contador;
$valores_mayores=$valor_mayor . $contador;
$porcentaje_mortalidad=$mortalidad . $contador;


$semana_=$_POST[$semana];
$valor_menor_=$_POST[$valores_menores];
$valor_mayor_=$_POST[$valores_mayores];
$porcentaje_mortalidad_=$_POST[$porcentaje_mortalidad];





$query="INSERT INTO `parametros`(`IdManual`,`semana`, `valor_menor_produccion`, `valor_mayor_produccion`, `porcentaje_mortalidad`) VALUES ($id_manual,$semana_,$valor_menor_,$valor_mayor_,$porcentaje_mortalidad_)";
$resource=mysqli_query($conexion,$query);
if ($resource==true) {

	echo "<script>

		swal({
  			title: 'Registro Exitoso!',
  			text: '',
  			type: 'success',
  			background: '#fff url(../../img/Huevo3.png)',
  			confirmButtonColor: '#ff9800'
			})

	  </script>";

	 header('Location:../Reg_Parametros.php');
}else{
	echo "registro no exitoso";
}






$contador=$contador+1;
$contador_semanas=$contador_semanas+1;
}







 ?>