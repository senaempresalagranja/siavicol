<?php 

$id_galpon=$_POST["galpon"];

$local="localhost";
$usuario="root";
$contraseña="";
$db="siavicol";

$conect=mysqli_connect($local,$usuario,$contraseña,$db);
$query="SELECT * FROM galpon WHERE idGalpon='$id_galpon'";
$resource=mysqli_query($conect,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>
var Nombre_Galpon=document.getElementById('Nombre_Galpon').value='$fila[1]';
var Extension_Galpon=document.getElementById('Extension_Galpon').value='$fila[2]';
var Cantidad_Animales=document.getElementById('Cantidad_Animales').value='$fila[3]';
var Estado=document.getElementById('Estado').value='$fila[4]';




</script>";



 ?>