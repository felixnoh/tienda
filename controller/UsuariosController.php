<?php

/**
* 
*/
class UsuariosController extends ControladorBase
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$usuario = new Usuario();
		$allusers = $usuario->getAll();

		$this->view('index', array(
			'allusers' => $allusers ,
			'hola' => 'video ejemplo mvc' 
	    ));

	}

	public function crear()
	{
        if(isset($_POST["nombre"])){
            $usuario=new Usuario();
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setEmail($_POST["email"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }
    
    public function borrar()
    {
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            
            $usuario=new Usuario();
            $usuario->deleteById($id); 
        }
        $this->redirect();
    }
}