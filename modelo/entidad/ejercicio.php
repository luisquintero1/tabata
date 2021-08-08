<?php

class ejercicio 
{
	private $id;
    private $nombre;
    private $descripcion;
    private $idTipoEjercicio;
    private $imagen;
    private $video;
    
    
    public function __construct($id, $nombre,$descripcion,$idTipoEjercicio,$imagen,$video ){

        $this->id = $id;
        $this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->idTipoEjercicio = $idTipoEjercicio;
        $this->imagen = $imagen;
        $this->video = $video;
    }
    
    //METODOS GET
    public function getId(){
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getdescripcion()
    {
        return $this->descripcion;
    }
    
     public function getidTipoEjercicio()
    {
        return $this->idTipoEjercicio;
    }

	 public function getimagen()
    {
        return $this->imagen;
    }

    public function getvideo()
    {
        return $this->video;
    }

     
  //METODOS SET
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function setidTipoEjercicio($idTipoEjercicio)
    {
        $this->idTipoEjercicio = $idTipoEjercicio;

        return $this;
    }

    public function setimagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function setvideo($video)
    {
        $this->getvideo = $video;

        return $this;
    }

}