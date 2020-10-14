<?php 
	$id=$_GET['id'];

	require_once "conexion.php";
	require_once "../controlador/controlador.php";

	$obj= new controlador();
	if($obj->eliminarDatos($id)==1){
		header("location:../index.php");
	}else{
		echo "fallo al eliminar";
	}
 ?>