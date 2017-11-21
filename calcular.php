<?php
require_once 'Datos.php';
require_once 'verificar.php';
require_once 'PicoPlaca.php';

error_reporting(0);

$datos = new Datos();

$verificar = new Verificar();
$pico_placa = $datos->cargarDatos();;

$verificar->setPlaca($_POST['placa']);
$verificar->setFecha($_POST['fecha']);
$verificar->setHora($_POST['hora']);
$pico_placa->setVerificar($verificar);


echo "<h2>RESULTADOS</h2><hr/>";
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