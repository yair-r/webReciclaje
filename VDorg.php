<?php session_start();
	include "./CC/conex.php";
	include "./CC/crud.php";
	$crud = new Crud();
	$id = $_POST['id'];
    $datos = $crud->obtenerDocumentoOrg($id);
    include "/xampp/htdocs/Fusion/navbar.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Eliminar Registro</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Seccion para eliminar un registro de la base de datos; confirme por favor los datos antes de confirmar la eliminacion</li>
                </ol>
                <div class="row">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Registro seleccionado
                            </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <th>Municipio</th>
                                    <th>Estado</th>
                                    <th>Pais</th>
                                    <th>Precio x kilo</th>
                                    <th>Toneladas</th>
                                    <th>Fecha Reciclado</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <?php echo $datos->municipio; ?> </td>
                                        <td> <?php echo $datos->estado; ?> </td>
                                        <td> <?php echo $datos->pais; ?> </td>
                                        <td> <?php echo $datos->toneladas; ?> </td>
                                        <td> <?php echo $datos->fechareciclado; ?> </td>                         
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                    <div class="alert alert-danger" role="alert">
                        <p>¿Esta seguro de eliminar este registro?</p>
                        <p>
                            Una vez eliminado no podra ser recuperado!!
                        </p>
                    </div>
                    <form action="./PDorg.php" method="POST">
                        <input type="text" name="id" value="<?php echo $datos->_id; ?>" hidden>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i> Eliminar
                        </button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "/xampp/htdocs/Fusion/scripts.php";?>  