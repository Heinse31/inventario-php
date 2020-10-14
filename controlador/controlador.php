<?php 

	class controlador{
		public function mostrarDatos($sql){
			$c= new conectar();
			$conexion=$c->conexion();

			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		}
		public function insertarDatos($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into detalle_inventario (NombreProducto,Referencia,Cantidad,Precio,Categoria,FechaCreacion)
							values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";

			return $result=mysqli_query($conexion,$sql);
		}

		public function actualizaDatos($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE detalle_inventario set NombreProducto='$datos[0]',
										Referencia='$datos[1]',
										Cantidad='$datos[2]',
										Precio='$datos[3]',
										Categoria='$datos[4]',
										FechaCreacion='$datos[5]'
								where id='$datos[6]'";
			return $result=mysqli_query($conexion,$sql);

		}
		public function eliminarDatos($id){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from detalle_inventario where id='$id'";
			return $result=mysqli_query($conexion,$sql);
		}
	}
 ?>