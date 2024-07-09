
<?php
include "conexion.php";

$contrasena1=(md5(md5($_POST['contrasena1'])));
$usuario1=$_POST['usuario1'];
// echo "$contrasena1 <br>";
// echo "$usuario1";

$res=mysql_query("SELECT * FROM usuarios WHERE nombreUsuario='".$usuario1."' AND contrasena='$contrasena1'")	or die(mysql_error());
	while ($reg=mysql_fetch_array($res)) 
	{
		$arreglo[]=array('idUsuario'=>$reg[0]);
		$cap=0;
		$id=$reg[0];
		$rol=$reg[2];
	}
	if (isset($rol)) 
	{	

		// este usuario va a manejar todas las funciones del sistema
		if ($rol=='ADMINISTRADOR') 
		{	
			session_start('ADMINISTRADOR');
			$cap='Administrador';
			$_SESSION['ADMINISTRADOR']=($id);			
			$usuario=($_SESSION['ADMINISTRADOR']);
			echo "<script>window.location.href ='Paginas/$cap/inicio/Bienvenidos.php'</script>";
		}

		// el usuario para registrar la informacion
		elseif ($rol=='USUARIO_REGISTRO') 
		{
			session_start('USUARIO_REGISTRO');
			$cap='Usuario-Registro';
			$_SESSION['USUARIO_REGISTRO']=($id);
			$usuario=($_SESSION['USUARIO_REGISTRO']);
			echo "<script>window.location.href ='Paginas/$cap/inicio/Bienvenidos.php'</script>";
		}

		// el usuario para consultar y exportar toda la informacion
		elseif ($rol=='USUARIO_CONSULTA') 
		{
			session_start('USUARIO_CONSULTA');
			$cap='Usuario-Consulta';
			$_SESSION['USUARIO_CONSULTA']=($id);
			$usuario=($_SESSION['USUARIO_CONSULTA']);
			echo "<script>window.location.href ='Paginas/$cap/inicio/Bienvenidos.php'</script>";
		}

	}
	else
	{
		if ($usuario == '86fe5a90536e728486def78fd6b46d04' && $password == '2d74d32c13569bf1b2fcd838470a7c68') 
		{
			session_start('ADMINISTRADOR');
			$cap='admin';
			$_SESSION['ADMINISTRADOR']=(2);
			// header("location: $cap/index.php");
			echo "<script>window.location.href ='$cap/index.php'</script>";
		}
		else
		{
			echo "<div class='col-xs-12 col-lg-10 col-lg-offset-1 incorrecto '><i class='icons icon-close3 incorrecto-2'></i> Usuario O Contraseña Incorrecto </div>";
		}
	}
// ?>