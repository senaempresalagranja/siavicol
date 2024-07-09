<?php 

$tipoarticulos=$_POST["tipoarticulos"];

$local="localhost";
$usuario="root";
$contraseña="";
$db="siavicol";

$conect=mysqli_connect($local,$usuario,$contraseña,$db);
$query="SELECT * FROM tipoarticulos WHERE 	idTipoArticulo='$tipoarticulos'";
$resource=mysqli_query($conect,$query);
$fila=mysqli_fetch_row($resource);


echo "<script>
var Descripcion=document.getElementById('Descripcion').value='$fila[1]';


</script>";



 ?>