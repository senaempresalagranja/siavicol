<?php 

$consultar_manual=$_POST["consultar_manual"];

// semana_18
// valor_menor_produccion_semana_1
// valor_mayor_produccion_semana_1
// porcentaje_mortalidad_semana_1


$contador=1;
$contador_semanas=18;
$semanas="semana_";
$valor_menor_produccion_semana="valor_menor_produccion_semana_";
$valor_mayor_produccion_semana="valor_mayor_produccion_semana_";
$porcentaje_mortalidad_semana_="porcentaje_mortalidad_semana_";
						   $local="localhost";
							   $usuario="root";
							   $contra="";
							   $bd="siavicol";
							   $conexion=mysqli_connect($local,$usuario,$contra,$bd);
	   $query="SELECT * FROM `manuales` WHERE IdManual='$consultar_manual'"; 
							   $resource=mysqli_query($conexion,$query);

$fila=mysqli_fetch_row($resource);
echo "<script>
var nombre_manual=document.getElementById('nombre_manual').value='$fila[1]'
</script>";


							   $query="SELECT * FROM `parametros` WHERE IdManual='$consultar_manual'"; 
							   $resource=mysqli_query($conexion,$query);

while ($contador<=73) {

$semana=$semanas . $contador_semanas;
$valor_menor=$valor_menor_produccion_semana . $contador;
$valor_mayor=$valor_mayor_produccion_semana . $contador;
$mortalidad=$porcentaje_mortalidad_semana_ . $contador;


$fila=mysqli_fetch_row($resource);

echo "<script>

var $semana=document.getElementById('$semana').value='$fila[2]';
var $valor_menor=document.getElementById('$valor_menor').value='$fila[3]';
var $valor_mayor=document.getElementById('$valor_mayor').value='$fila[4]';

var $mortalidad=document.getElementById('$mortalidad').value='$fila[5]';

</script>";





$contador_semanas=$contador_semanas+1;
$contador=$contador+1;
}
							



 ?>