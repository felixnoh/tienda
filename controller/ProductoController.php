<?php 

/**
* 
*/
class ProductoController extends ControladorBase
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$producto = new Producto();
		$allproductos = $producto->getAll();
		$this->view('catalogo', array(
			'allproductos' => $allproductos  
	    ));

	}
}