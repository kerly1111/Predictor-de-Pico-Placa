<?php
require_once 'verificar.php';

class PicoPlaca
{
	private $semana=array();
	private $verificar;

	public function __construct(){

	}
	public function setVerificar(Verificar $verificar){
		$this->verificar = $verificar;
	}
	public function addCondicion(Condiciones $dato){
		$this->semana[] = $dato;
	}
	
	public function verificar_info(){
		$respuesta=0;
		$autoInvolucrado = 0;
		$tiempoInvolucrado = 0;
		$horaCircula=0;
		$time = strtotime($this->verificar->getFecha()); 
		$diaFecha = strftime("%w", $time);

		foreach($this->semana as $diaCondicion){
			if ($diaCondicion->getDia() == $diaFecha){
				foreach($diaCondicion->getDigito() as $digito){
					if ( substr($this->verificar->getPlaca(),strlen($this->verificar->getPlaca())-1,1)==$digito ){
						$autoInvolucrado=1;
						foreach($diaCondicion->getHora() as $horaCondicion){
							$vectorHora = explode("-",$horaCondicion);
							if ( $this->verificar->getHora()>=$vectorHora[0] &&  $this->verificar->getHora()<$vectorHora[1]){
								$tiempoInvolucrado=1;
							}
						}
					}
				}
				if ($autoInvolucrado==1 && $tiempoInvolucrado==1){
					$respuesta=1;
				}
			}
		}
		return $respuesta;	
	}
}
?>
