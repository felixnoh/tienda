<?php 
/**
* 
*/
class ControladorBase
{
	
	public function __construct()
	{
		require_once 'conectar.php';
		require_once 'EntidadBase.php';
		require_once 'ModeloBase.php';

		foreach (glob('model/*.php')as $file) {
			require_once $file;
		}
	}
	public function view($vista,$datos)
	{
		foreach ($datos as $id_assoc => $valor) {
			${$id_assoc} = $valor;
		}

		require_once 'core/AyudaVista.php';
		$helper = new AyudaVista();
		require_once 'view/'.$vista.'.view.php';
	}
	public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO)
	{
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }
}