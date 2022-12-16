<?php session_start();

    include "./CC/conex.php";
    include "./CC/crud.php";

    $Crud = new Crud();
    $datos = array(
        "municipio" => $_POST['municipio'],
        "estado" => $_POST['estado'],
        "pais" => $_POST['pais'],
        "preciokilo" => $_POST['preciokilo'],
        "toneladas" => $_POST['toneladas'],
        "fechareciclado" => $_POST['fechareciclado']
    );

    $respuesta = $Crud->insertarDatosVi($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../Fusion/mVID.php"); 
    } else {
        print_r($respuesta);
    }
?>

