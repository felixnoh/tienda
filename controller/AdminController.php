<?php 
/**
* 
*/
class AdminController extends ControladorBase
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$producto = new Producto();
		$allproductos = $producto->getAll();

		$this->view('Admin', array('allproductos' => $allproductos));

	}
	public function crear()
	{
        if(isset($_POST["marca"])){
            $producto = new Producto();
            $producto->setMarca($_POST["marca"]);
            $producto->setModelo($_POST["modelo"]);
            $producto->setPrecio($_POST["precio"]);
            $producto->setImagen($_POST["imagen"]);
            $save=$producto->save();
        }
        $this->redirect("Admin", "index");
    }
    public function borrar()
    {
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            
            $producto = new Producto();
            $producto->deleteById($id); 
        }
        $this->redirect("Admin", "index");
    }
}
