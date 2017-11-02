<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<style type="text/css">
		.naav{
			padding-top: 10px; 
			margin-bottom: 30px; 
			background-color: black;
		}
		.prod{
			color: white; 
			font-size: 25px;
		}
		.bot{
			float: right; 
			margin-bottom: 10px; 
			margin-right: 10px;
		}
		.tam{
			width: 100px; 
			height: 100px;
		}
		.botb{
			float: right; 
			margin-top: 25px;
		}
	</style>

</head>
<body>


	<div class="container-fluid">
		<div class="row naav" >
			<a class="navbar-brand prod" href="<?php echo $helper->url("Producto","index"); ?>">Productos</a>
			<p>
			  <a href="<?php echo $helper->url("Producto","index"); ?>" type="button bot" class="btn btn-primary btn-lg bot" >Catalogo</a>
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="<?php echo $helper->url("Admin","crear"); ?>" method="post" class="col-md-6">
		            <h3>Añadir Producto</h3>
		            <hr/>
		            Marca: <input type="text" name="marca" class="form-control"/>
		            Modelo: <input type="text" name="modelo" class="form-control"/>
		            Precio: <input type="text" name="precio" class="form-control"/>
		            Imagen: <input type="text" name="imagen" class="form-control"/>
		            <input style="margin-top: 10px;" type="submit" value="Agregar" class="btn btn-success"/>
			    </form>
				<div class="col-md-6">

					<h3>Eliminar Producto</h3>
			    	<hr/>
			    	<?php foreach($allproductos as $producto) { ?>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-4">
							<img src="img/<?php echo $producto->imagen; ?>" alt="" class="img-responsive tam" >
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<h3><?php echo $producto->marca; ?> <?php echo $producto->modelo; ?></h3>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<a href="<?php echo $helper->url("Admin","borrar"); ?>&id=<?php echo $producto->id; ?>" class="btn btn-danger botb" >Borrar</a>
						</div>
					</div>
					
					<hr/>
					<?php } ?>
		    
				</div>
			</div>
		</div>
	</div>

</body>
</html>