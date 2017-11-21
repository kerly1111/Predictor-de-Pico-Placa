<?php
class Condiciones
{
	private $fecha;
	private $digito = array();
	private $hora = array();
	
	public function __construct(){

	}
	public function setDia($fecha){
		$this->fecha = $fecha;
	}
	public function addDigito($digito){
		$this->digito[] = $digito;
	}
	public function addHora($hora){
		$this->hora[] = $hora;
	}
	public function getDia(){
		return $this->fecha;
	}
	public function getDigito(){
		return $this->digito;
	}
	public function getHora(){
		return $this->hora;
	}
}
?>