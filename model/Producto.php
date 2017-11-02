<?php
class Producto extends EntidadBase{
    private $id,$marca,$modelo,$precio,$imagen;
    
    public function __construct() 
    {
        $table="productos";
        parent::__construct($table);
    }
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }
    
    public function getMarca() 
    {
        return $this->marca;
    }

    public function setMarca($marca) 
    {
        $this->marca = $marca;
    }

    public function getModelo() 
    {
        return $this->modelo;
    }

    public function setModelo($modelo) 
    {
        $this->modelo = $modelo;
    }

    public function getPrecio() 
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    
    public function getImagen()
    {
        return $this->imagen;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }
    public function save()
    {
        $query="INSERT INTO productos (marca,modelo,precio,imagen)
                VALUES(
                       '".$this->marca."',
                       '".$this->modelo."',
                       '".$this->precio."',
                       '".$this->imagen."');";
        $save=$this->db()->query($query);
        return $save;
    }

}