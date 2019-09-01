<?php 

include'vendor/autoload.php';

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

//Ruta del Recurso
$connector = new FilePrintConnector("\\\\192.168.1.6\\BIXOLON-imp");

//Conexión al Recurso(Impresora)
$printer = new Printer($connector);

//Enviar los Datos de Impresión
$printer -> text("Impresión de Prueba\n");

$printer -> cut();
$printer -> close();



 ?>