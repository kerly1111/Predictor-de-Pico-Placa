<?php
require_once 'Condiciones.php';
require_once 'PicoPlaca.php';
require_once 'verificar.php';

require_once 'Datos.php';
require_once 'verificar.php';
require_once 'PicoPlaca.php';

error_reporting(0);

$datos = new Datos();

$pico_placa = $datos->cargarDatos();;
$verificar = new Verificar();

echo "<h2>RESULTADOS</h2><hr/>";

//-------Ejemplo#1-------//
$verificar->setPlaca('PBB-1040');
$verificar->setFecha('30-10-2017');
$verificar->setHora('07:30:00');
$pico_placa->setVerificar($verificar);

echo "<h3>";
echo "En la fecha: ".$verificar->getFecha();
echo "<br/>";
echo "A las: ".$verificar->getHora()." horas";
echo "<br/>";
echo "El auto con placa ".$verificar->getPlaca();
echo "<br/>";
if ($pico_placa->verificar_info() == 1)
	echo "<u>No puede estar en la carretera</u>";
else
	echo "<u>Si puede estar en la carretera</u>";
echo "</h3>";
echo "<hr/>";

//-------Ejemplo#2-------//
$verificar->setPlaca('PBB-1040');
$verificar->setFecha('10-11-2017');
$verificar->setHora('16:00:00');
$pico_placa->setVerificar($verificar);

echo "<h3>";
echo "En la fecha: ".$verificar->getFecha();
echo "<br/>";
echo "A las: ".$verificar->getHora()." horas";
echo "<br/>";
echo "El auto con placa ".$verificar->getPlaca();
echo "<br/>";
if ($pico_placa->verificar_info() == 1)
	echo "<u>No puede estar en la carretera</u>";
else
	echo "<u>Si puede estar en la carretera</u>";
echo "</h3>";
echo "<hr/>";

//-------Ejemplo#3-------//
$verificar->setPlaca('PCB-1046');
$verificar->setFecha('15-10-2017');
$verificar->setHora('19:00:00');
$pico_placa->setVerificar($verificar);

echo "<h3>";
echo "En la fecha: ".$verificar->getFecha();
echo "<br/>";
echo "A las: ".$verificar->getHora()." horas";
echo "<br/>";
echo "El auto con placa ".$verificar->getPlaca();
echo "<br/>";
if ($pico_placa->verificar_info() == 1)
	echo "<u>No puede estar en la carretera</u>";
else
	echo "<u>Si puede estar en la carretera</u>";
echo "</h3>";
echo "<hr/>";

//-------Ejemplo#4-------//
$verificar->setPlaca('PCB-1046');
$verificar->setFecha('16-11-2017');
$verificar->setHora('18:31:00');
$pico_placa->setVerificar($verificar);

echo "<h3>";
echo "En la fecha: ".$verificar->getFecha();
echo "<br/>";
echo "A las: ".$verificar->getHora()." horas";
echo "<br/>";
echo "El auto con placa ".$verificar->getPlaca();
echo "<br/>";
if ($pico_placa->verificar_info() == 1)
	echo "<u>No puede estar en la carretera</u>";
else
	echo "<u>Si puede estar en la carretera</u>";
echo "</h3>";
echo "<hr/>";
echo "<a href='index.php'><button>Volver al Inicio</button></a>";
?>