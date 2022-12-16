<?php
use OzdemirBurak\JsonCsv\File\Csv;
require 'vendor/autoload.php';

$formatos_permitidos = array('csv');
$archivo = $_FILES['ficheroUsuario']['tmp_name'];
$nombre_archivo = $_FILES['ficheroUsuario']['name'];
$extension = pathinfo($nombre_archivo, PATHINFO_EXTENSION);
$info = pathinfo($nombre_archivo)['extension'];


if(!in_array($extension, $formatos_permitidos) ) {
    echo 'Error formato no permitido !!';
}else{
    move_uploaded_file($archivo, "METAL.csv".$info);
}

$csv_filename = 'METAL.csv';
$csv = new Csv($csv_filename);
echo 'Loaded CSV file: ' . $csv_filename . '<br>';
// Convert CSV to JSON then JSON to Array.
$array = json_decode($csv->convert(), true);

$mongo_location = 'mongodb://localhost:27017';
$mongo = new MongoDB\Driver\Manager($mongo_location);
echo 'Connected to ' . $mongo_location . '<br>';

$mongo_bulk_write = new MongoDB\Driver\BulkWrite();
foreach ($array as $doc) {
  $mongo_bulk_write->insert($doc);
}
$mongo->executeBulkWrite('Reciclaje.PET', $mongo_bulk_write);
echo 'Populated MongoDB database';

?>