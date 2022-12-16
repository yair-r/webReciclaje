<?php session_start();
    include "./CC/conex.php";
    include "./CC/crud.php";

    $crud = new Crud();

    $id = $_POST['id'];
    $datos = array(
        "municipio" => $_POST['municipio'],
        "estado" => $_POST['estado'],
        "pais" => $_POST['pais'],
        "preciokilo" => $_POST['preciokilo'],
        "toneladas" => $_POST['toneladas'],
        "fechareciclado" => $_POST['fechareciclado']
    );

    $respuesta = $crud->actualizarRP($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../Fusion/mRP.php");
    } else {
        print_r($respuesta);
    }

?>