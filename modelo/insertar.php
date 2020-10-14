<?php 

	require_once "conexion.php";
	require_once "../controlador/controlador.php";

	$nombre=$_POST['name'];
	$producto=$_POST['product'];
	$cantidad=$_POST['canti'];
	$valor=$_POST['valor'];
	$categoria=$_POST['category'];
	$fechacrea=$_POST['fechacreacion'];


	$datos=array(
			$nombre,
			$producto,
			$cantidad,
			$valor,
			$categoria,
			$fechacrea
				);
	$obj= new controlador();
	if($obj->insertarDatos($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}

 ?>