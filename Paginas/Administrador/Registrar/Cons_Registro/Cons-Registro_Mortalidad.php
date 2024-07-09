<?php 

$id_mortalidad=$_POST["id_mortalidad"];


			    				$local="localhost";
			    				$usuario="root";
			    				$contra="";
			    				$bd="siavicol";

			    				$conexion=mysqli_connect($local,$usuario,$contra,$bd);
			    				$query="SELECT * FROM mortalidad where idMortalidad='$id_mortalidad'";

			    				$resource=mysqli_query($conexion,$query);
			    				$fila=mysqli_fetch_row($resource);
			    				echo "<script>
var encasetamiento=document.getElementById('encasetamiento').value='$fila[1]';
var numero_aves=document.getElementById('numero_aves').value='$fila[2]';
var fecha_muerte=document.getElementById('fecha_muerte').value='$fila[3]';
var hora_muerte=document.getElementById('hora_muerte').value='$fila[4]';
var motivo=document.getElementById('motivo').value='$fila[5]';




			    				</script>";
 ?>