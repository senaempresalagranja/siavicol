<?php 

$marcas=$_POST["marcas"];

$local="localhost";
$usuario="root";
$contraseña="";
$db="siavicol";

$conect=mysqli_connect($local,$usuario,$contraseña,$db);
$query="SELECT * FROM marcas WHERE 	idMarca='$marcas'";
$resource=mysqli_query($conect,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>
var Marca=document.getElementById('Marca').value='$fila[1]';


</script>";



 ?>