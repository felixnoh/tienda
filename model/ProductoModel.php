<?php
class ProductoModel extends ModeloBase
{
	private $table;
	public function __construct()
	{
		$this->table = 'productos';
		parent::__construct($this->table);
	}
}