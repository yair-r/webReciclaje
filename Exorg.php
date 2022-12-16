<?php
include "/xampp/htdocs/Fusion/CC/crud.php";

unlink('C:\Users\Sthj\Downloads\data.csv');

header('Content-Type: application/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename=data.csv');
header('Pragma: no-cache');

$crud= new Crud();
$datos = $crud->mostrarDatosOrg();

foreach ($datos as $item)
    echo '"' . $item['municipio'] . '","'  . $item['estado'] . '","' . $item['pais']
        . '","' . $item['toneladas']
        . '","' . $item['fechareciclado'] . "\"\n"; 
?>