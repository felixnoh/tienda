<!DOCTYPE html>
<html> 
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<style type="text/css">
		.btn-product{
			width: 100%;
		}
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
			
			height: 280px !important;
		}


	</style>

</head>
<body>



	<div class="container-fluid">
		<div class="row naav" >
			<a class="navbar-brand prod" href="<?php echo $helper->url("Producto","index"); ?>">Productos</a>
			<p>
			  <a href="<?php echo $helper->url("Admin","index"); ?>" type="button bot" class="btn btn-primary btn-lg bot" >Añadir</a>
			</p>
		</div>
	</div>


	<div class="container">

	    <div class="row">

	    	<div class="col-md-12">
				<?php foreach ($allproductos as $producto) { ?>
				<div class="col-sm-6 col-md-4 col-xs-12">
					
					<div class="thumbnail" >
						<img src="img/<?php echo $producto->imagen; ?>" class="img-responsive">
						<div class="caption">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-xs-12">
									<h3><strong><?php echo $producto->marca?></strong> <?php echo $producto->modelo?></h3>
								</div>
								<div class="col-md-4 col-sm-12 col-xs-12">
									<h3>
									<label>$ <?php echo $producto->precio?></label></h3>
								</div>
							</div>

						</div> <!-- caption -->
					</div> <!-- thumbnail -->
				</div> <!-- div -->

				<?php } ?>



  
	        </div> <!-- col-md-12 -->

		</div> <!-- row -->
	</div>

	


</body>
</html>