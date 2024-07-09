<?php 

			$idAlimentacion=$_POST["idAlimentacion"];	
							 $local="localhost";
							 $usuario="root";
							 $contra="";
							 $bd="siavicol";

							 $conexion=mysqli_connect($local,$usuario,$contra,$bd);
							 $query="SELECT * FROM alimentacion where idAlimentacion='$idAlimentacion'"; 
							 $resource=mysqli_query($conexion,$query);
				$fila=mysqli_fetch_row($resource);

echo "<script>


var encasetamiento=document.getElementById('encasetamiento').value='$fila[1]';
var articulo=document.getElementById('articulo').value='$fila[2]';
var cantidad=document.getElementById('cantidad').value='$fila[3]';
var fecha_Alimentacion=document.getElementById('fecha_Alimentacion').value='$fila[4]';
var hora_Alimentacion=document.getElementById('hora_Alimentacion').value='$fila[5]';

</script>";


 ?>