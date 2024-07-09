<?php 

$hora_produccion_select=$_POST["hora_produccion_select"];

$local="localhost";
$usuario="root";
$contraseña="";
$db="siavicol";

$conect=mysqli_connect($local,$usuario,$contraseña,$db);
$query="SELECT * FROM produccion WHERE idProduccion='$hora_produccion_select'";
$resource=mysqli_query($conect,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>


var encasetamiento=document.getElementById('encasetamiento').value='$fila[1]';
var responsable=document.getElementById('responsable').value='$fila[2]';
var fecha_produccion=document.getElementById('fecha_produccion').value='$fila[3]';

	var hora_produccion=document.getElementById('hora_produccion').value='$fila[4]';
var total_huevos=document.getElementById('total_huevos').value='$fila[5]';
var cantidad_huevos_no_comerciales=document.getElementById('cantidad_huevos_no_comerciales').value='$fila[6]';
var huevo_tipo_A=document.getElementById('huevo_tipo_A').value='$fila[7]';
var huevo_tipo_AA=document.getElementById('huevo_tipo_AA').value='$fila[8]';
var huevo_tipo_AAA=document.getElementById('huevo_tipo_AAA').value='$fila[9]';
var huevo_tipo_B=document.getElementById('huevo_tipo_B').value='$fila[10]';
var huevo_tipo_C=document.getElementById('huevo_tipo_C').value='$fila[11]';
var huevo_tipo_Jumbo=document.getElementById('huevo_tipo_Jumbo').value='$fila[12]';


var id='$fila[0]';

</script>";



 ?>