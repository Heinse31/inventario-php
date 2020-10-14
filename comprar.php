<?php 

	require_once "modelo/conexion.php";
	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	$sql="SELECT NombreProducto,Referencia,Cantidad,Precio,Categoria,FechaCreacion 
			from detalle_inventario where id='$id'";
	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="modelo/comprar.php" method="post">
	<input type="text" hidden="" value="<?php echo $id ?>" name="id">
	<label>Nombre del producto</label><br>
		<input type="text" name="name" value="<?php echo $ver[0] ?>"><br>
	<label>Referencia</label><br>
		<input type="text" name="product" value="<?php echo $ver[1] ?>">
		<input type="hidden" name="canti" value="<?php echo $ver[2] ?>" ><br>
	<label>Cantidad a comprar</label><br>
		<input type="text" name="comprar" value="<?php echo $ver[2] ?>"><br>
	<label>Precio</label><br>
		<input type="text" name="valor" value="<?php echo $ver[3] ?>"><br>
	<label>Categoria</label><br>
		<input type="text" name="category" value="<?php echo $ver[4] ?>"><br><br>
	<input type="hidden" name="fechacreacion" value="<?php echo $ver[5] ?>">
	<input type="submit" name="Comprar" value="Comprar">
</form>

</body>
</html>