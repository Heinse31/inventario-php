<?php 

	require_once "conexion.php";
	require_once "../controlador/controlador.php";

	$nombre=$_POST['name'];
	$producto=$_POST['product'];
	$cantidad=$_POST['canti'];
	$valor=$_POST['valor'];
	$categoria=$_POST['category'];
	$fechacrea=$_POST['fechacreacion'];
	$comprar = $_POST['comprar'];
	$id=$_POST['id'];
	
	echo $cantidad;
	echo $comprar;
	
	if($cantidad>0 && $comprar<=$cantidad){
			$cantidad=$cantidad-$comprar;	
		
	}else{
		echo '<script>alert("La cantidad elegida supera la cantidad que hay stock"")</script>';
	}
	
	$datos=array(
			$nombre,
			$producto,
			$cantidad,
			$valor,
			$categoria,
			$fechacrea,
			$id
				);
	$obj= new controlador();

	if($obj->actualizaDatos($datos)==1){
		header("location:../index.php");
	}else{
		echo "fallo al agregar";
	}

 ?>