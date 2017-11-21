<?php
require_once 'Condiciones.php';
require_once 'PicoPlaca.php';

Class Datos{
	public function cargarDatos(){
		$condicionLunes = new Condiciones();
		$condicionLunes->setDia(1);
		$condicionLunes->addDigito(0);
		$condicionLunes->addDigito(9);
		$condicionLunes->addHora('06:30:00-09:00:00');
		$condicionLunes->addHora('17:00:00-20:00:00');

		$condicionMartes = new Condiciones();
		$condicionMartes->setDia(2);
		$condicionMartes->addDigito(1);
		$condicionMartes->addDigito(2);
		$condicionMartes->addHora('06:30:00-09:00:00');
		$condicionMartes->addHora('17:00:00-20:00:00');

		$condicionMiercoles = new Condiciones();
		$condicionMiercoles->setDia(3);
		$condicionMiercoles->addDigito(3);
		$condicionMiercoles->addDigito(4);
		$condicionMiercoles->addHora('06:30:00-09:00:00');
		$condicionMiercoles->addHora('17:00:00-20:00:00');

		$condicionJueves = new Condiciones();
		$condicionJueves->setDia(4);
		$condicionJueves->addDigito(5);
		$condicionJueves->addDigito(6);
		$condicionJueves->addHora('06:30:00-09:00:00');
		$condicionJueves->addHora('17:00:00-20:0:00');

		$condicionViernes = new Condiciones();
		$condicionViernes->setDia(5);
		$condicionViernes->addDigito(7);
		$condicionViernes->addDigito(8);
		$condicionViernes->addHora('06:30:00-09:00:00');
		$condicionViernes->addHora('17:00:00-20:00:00');

		$pico_placa = new PicoPlaca();
		$pico_placa->addCondicion($condicionLunes);
		$pico_placa->addCondicion($condicionMartes);
		$pico_placa->addCondicion($condicionMiercoles);
		$pico_placa->addCondicion($condicionJueves);
		$pico_placa->addCondicion($condicionViernes);

		return $pico_placa;
	}
}
?>