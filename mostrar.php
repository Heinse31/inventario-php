<?php 
	require_once "modelo/conexion.php";
	require_once "controlador/controlador.php";

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Inventario</title>

	<link rel="stylesheet" href="vista/css/bootstrap.min.css">
	<script src="vista/js/jquery.min.js"></script>
	<script src="vista/js/bootstrap.min.js"></script>
</head>


<body>


<div class="panel panel-default">
       <div class="panel-body">
	   <div id="list_container">
		<table class="table table-bordered" cellspacing="0" cellpadding="0" align="center">
			<tr>
				<td>Nombre Producto</td>
				<td>Referencia</td>
				<td>Cantidad</td>
				<td>Precio</td>
				<td>Categoria</td>
				<td>Actualizar</td>
				<td>Eliminar</td>
				<td>Comprar</td>
			</tr>
				<?php 
					$obj= new controlador();
					$sql="SELECT * from detalle_inventario";
					$datos=$obj->mostrarDatos($sql);

					foreach ($datos as $key ) {
				?>
				<tr>
					<td><?php echo $key['NombreProducto']; ?></td>
					<td><?php echo $key['Referencia']; ?></td>
					<td><?php echo $key['Cantidad']; ?></td>
					<td><?php echo $key['Precio']; ?></td>
					<td><?php echo $key['Categoria']; ?></td>
					<td>
						<a href="editar.php?id=<?php echo $key['id'] ?>" data-toggle="modal" data-target="#VentanaModal">
						Editar
						</a>
					</td>
					<td>
						<a href="modelo/eliminar.php?id=<?php echo $key['id'] ?>" onclick="borrarProducto()">
						Eliminar
						</a>
					</td>
					<td>
						<a href="comprar.php?id=<?php echo $key['id'] ?>">
						Comprar
						</a>
					</td>
				</tr>
			<?php 
				}
			?>
		</table>
			</div>
		</div>
	</div>
</div>


<script>
function borrarProducto(id) {
	if (confirm('Confirma eliminar producto ?')) {
		var url = 'modelo/eliminar.php';
		var method = 'POST';
		var params = 'id='+id;
		var container_id = 'list_container' ;
		ajax (url, method, params, container_id, loading_text) ;
	}
}

</script>
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="VentanaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				</div>
			  </div>
			</div>

</body>
</html>