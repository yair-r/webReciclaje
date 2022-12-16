<?php 
	include "./CC/conex.php";
	include "./CC/crud.php";
    include "/xampp/htdocs/Fusion/navbar.php";
	$crud = new Crud();
	$id = $_POST['id'];
	$datos = $crud->obtenerDocumentoVi($id);
	$idMongo = $datos->_id;
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Editar Registro Existente</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edite los campos a cambiar dentro del registro</li>
                </ol>
                <div class="row">
                    <div class="col">
                        <hr>
                        <div class="card mb-4">
                        <div class="card-body">
                            <form action="./PEvid.php" method="POST">
                                <input type="text" hidden value="<?php echo $idMongo ?>" name="id">
                                <label for="municipio">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" value="<?php echo $datos->municipio?>">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $datos->estado?>">
                                <label for="pais">Pais</label>
                                <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $datos->pais?>">
                                <label for="preciokilo">Precio x kilo</label>
                                <input type="text" class="form-control" id="preciokilo" name="preciokilo" value="<?php echo $datos->preciokilo?>">
                                <label for="toneladas">Toneladas recicladas</label>
                                <input type="text" class="form-control" id="toneladas" name="toneladas" value="<?php echo $datos->toneladas?>">
                                <label for="toneladas">Fecha de Reciclado</label>
                                <input type="date" name="fechareciclado" id="fechareciclado" class="form-control" value="<?php echo $datos->fechareciclado?>">
                                <button class="btn btn-warning my-3">
                                    <i class="fa-solid fa-floppy-disk"></i> Editar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "/xampp/htdocs/Fusion/scripts.php";?> 