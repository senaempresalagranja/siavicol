<?php
session_start();
error_reporting(E_ALL^E_NOTICE);
include 'conexion.php';
if (session_start('ADMINISTRADOR')) 
{
	echo "<script type='text/javascript'>alert('Parece que su sesion ya ha sido cerrada, por favor vuelva a Iniciar Sesion');location='../index.php?Acceso Denegado'</script>";
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='2'>";
	header("Location: ../../../index.php");
	unset($_SESSION['ADMINISTRADOR']);
}
?>