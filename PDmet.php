<?php session_start();
    include "./CC/conex.php";
    include "./CC/crud.php";
    
    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminarMet($id);

    if ($respuesta->getDeletedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'delete';
        header("location:../Fusion/mMETAL.php");
    } else {
        print_r($respuesta);
    }

?>
