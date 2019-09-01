<?php 

/*
include'vendor/autoload.php';

date_default_timezone_set('America/Lima');

use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;

//Ruta del Recurso
$connector = new FilePrintConnector("\\\\192.168.1.6\\BIXOLON-imp");

//Conexión al Recurso(Impresora)
$printer = new Printer($connector);

//Datos de Impresión

$cab = json_decode($_REQUEST['cab'],TRUE);

//var_dump($cab);


//Enviar los Datos de Impresión
$printer -> setJustification(Printer::JUSTIFY_CENTER);
$printer -> text("POLLERIA EL FOGON\n");
$printer -> text("VENTA N-".$cab['id']."\n");
$printer -> text(date('d/m/Y H:i:s')."\n");
$printer -> setJustification(); // Reset
$printer -> text("Cantidad:\n");
$printer -> text($cab['cantidad']."\n");
$printer -> text("Producto:\n");
$printer -> text($cab['nombre']."\n");
$printer -> text("Precio:\n");
$printer -> text($cab['precio_unidad']."\n");
$printer -> text("Total:\n");
$printer -> text($cab['total']."\n");

$printer -> cut();
$printer -> close();

*/

echo "hola";

 ?>