<?php 

$id_galpon=$_POST["usuario"];

$local="localhost";
$usuario="root";
$contraseña="";
$db="siavicol";

$conect=mysqli_connect($local,$usuario,$contraseña,$db);
$query="SELECT * FROM usuarios WHERE idUsuario='$id_galpon'";
$resource=mysqli_query($conect,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>
var Nombre_persona=document.getElementById('Nombre_persona').value='$fila[1]';
var rol=document.getElementById('rol').value='$fila[2]';
var nickname=document.getElementById('nickname').value='$fila[3]';





</script>";



 ?>