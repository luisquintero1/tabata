<?php

class tipoejercicio
{
	
	private $id;
	private $nombre;


	public funtion __construct($id,$nombre){
		$this->id = $id;
		$this->nombre = $nombre;
	}

	public funtion getId(){
		return $this->id;
	}

	public funtion getnombre(){
		return $this->nombre;
	}

	public funtion setId($id){
		$this->id = $id;
		return $this;
	}
    
    public funtion setnombre($nombre){
    	$this->nombre = $nombre;
    	return $this;
    }
    
    }

}