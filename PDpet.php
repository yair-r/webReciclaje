<?php session_start();
    include "./CC/conex.php";
    include "./CC/crud.php";
    
    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminarPet($id);

    if ($respuesta->getDeletedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'delete';
        header("location:../Fusion/mPET.php");
    } else {
        print_r($respuesta);
    }

?>
