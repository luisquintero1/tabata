<?php

class ejercicioxtabata
{
	private $idTabata;
	private $idEjercicio;

	public funtion __construct($idTabata,$idEjercicio){
		$this->idTabata = $idTabata;
		$this->idEjercicio = $idEjercicio;
	}

	public funtion getIdTabata(){
		return $this->idTabata;
	}

	public funtion getidEjercicio(){
		return $this->idEjercicio;
	}

	public funtion setIdTabata($idTabata){
		$this->idTabata = $idTabata;
		return $this;
	}
    
    public funtion setidEjercicio($idEjercicio){
    	$this->idEjercicio = $idEjercicio;
    	return $this;
    }
    
    }


}