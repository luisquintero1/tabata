<?php 

class tabata
{
	 private $id;
    private $nombre;
    private $tPreparacion;
    private $tActividad;
    private $tDescanso;
    private $numSeries;
    private $numRondas;
    private $idUsuario;
    
    
    public function __construct($id, $nombre, $tPreparacion, $tActividad,$tDescanso, $numSeries, $numRondas, $idUsuario){

        $this->id = $id;
        $this->nombre = $nombre;
		$this->tPreparacion = $tPreparacion;
		$this->tActividad = $tActividad;
        $this->tDescanso = $tDescanso;
        $this->numSeries = $numSeries;
		$this->numRondas = $numRondas;
        $this->idUsuario = $idUsuario;
    }
    
    //METODOS GET
    public function getId(){
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function gettPreparacion()
    {
        return $this->tPreparacion;
    }
    
     public function gettActividad()
    {
        return $this->tActividad;
    }

     public function gettDescanso()
    {
        return $this->tDescanso;
    }

	 public function getnumSeries()
    {
        return $this->numSeries;
    }

    public function getnumRondas()
    {
        return $this->numRondas;
    }

    public function getidUsuario()
    {
        return $this->idUsuario;
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

    public function settPreparacion($tPreparacion)
    {
        $this->tPreparacion = $tPreparacion;

        return $this;
    }

    public function settActividad($tActividad)
    {
        $this->tActividad = $tActividad;

        return $this;
    }

    public function settDescanso($tDescanso)
    {
        $this->tDescanso = $tDescanso;

        return $this;
    }

    public function setnumSeries($numSeries)
    {
        $this->getnumSeries = $numSeries;

        return $this;
    }

    public function setnumRondas($numRondas)
    {
        $this->numRondas = $numRondas;

        return $this;
    }

    public function setidUsuario($idUsuario)
    {
        $this->idUsuario= $idUsuario;

        return $this;
    }

}