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
<div class="container">
   <h1 class="main_title">Inventario de Productos</h1>
   <div class="content">
     <div class="panel panel-default">
       <div class="panel-body">

<form id="crud" align="center">
<div class="form-group">
	<div class="col-sm-2">
    	<label>Nombre del producto</label><br>
    	<input type="text" class="form-control" name="name">
	</div>
	<div class="col-sm-2">
    	<label>Referencia</label><br>
    	<input type="text" class="form-control" name="product">
	</div>
	<div class="col-sm-2">
   		<label>Cantidad</label><br>
    	<input type="text" class="form-control" name="canti">
	</div>
	<div class="col-sm-2">
    	<label>Precio</label>
    	<input type="text" class="form-control" name="valor"><br>
	</div>
	<div class="col-sm-2">
    	<label>Categoria</label>
    	<input type="text" class="form-control" name="category"><br>
	</div>
		<input type="hidden" value=" <?php echo date("Y-m-d"); ?>" name="fechacreacion"><br>
	<div class="col-sm-2">
		<label>Insertar en inventario</label>
    	<input type="button" id="Insertar" class="btn btn-primary" value="Insertar">
	</div>
</div>
</form>
</div>
</div>

<div class="col-sm-12">
				<div id="tablaRegistros"></div>
</div>

<script>

$(document).ready(function(){    
	$('#tablaRegistros').load('mostrar.php');
    $('#Insertar').click(function(){
        var url = "modelo/insertar.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#crud").serialize(), 
           success: function(data)             
           {
				$('#crud')[0].reset();
				$('#tablaRegistros').load('mostrar.php');
				alert("Agregado con exito ");				
								
           }
       });
    });
});	
		
</script>





</body>
</html>