<?php session_start();
	include "./CC/conex.php";
	include "./CC/crud.php";
	$crud = new Crud();
	$datos = $crud->mostrarDatosAl();
    include "/xampp/htdocs/Fusion/navbar.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Revision del Reciclaje de Aluminio</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">En este apartado se puede revisar los diversos registros realizados sobre el reciclaje de aluminio</li>
                </ol>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary " href="./VAalum.php" role="button"> Agregar nuevo registro</a>
                        <hr>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabla de registros de reciclaje Aluminio
                            </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>Municipio</th>
                                        <th>Estado</th>
                                        <th>Pais</th>
                                        <th>Precio x kilo</th>
                                        <th>Toneladas</th>
                                        <th>Fecha Reciclado</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>         
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Municipio</th>
                                        <th>Estado</th>
                                        <th>Pais</th>
                                        <th>Precio x kilo</th>
                                        <th>Toneladas</th>
                                        <th>Fecha Reciclado</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($datos as $item) {?>
                                    <tr>
                                        <td> <?php echo $item->municipio; ?> </td>
                                        <td> <?php echo $item->estado; ?> </td>
                                        <td> <?php echo $item->pais; ?> </td>
                                        <td> <?php echo $item->preciokilo; ?> </td>
                                        <td> <?php echo $item->toneladas; ?> </td>
                                        <td> <?php echo $item->fechareciclado; ?> </td>
                                        <td class="text-center">
                                            <form action="./VEalum.php" method="POST">
                                                <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                                    <button class="btn btn-warning">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </button>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <form action="./VDalum.php" method="POST">
                                                <input type="text" hidden value="<?php echo $item->_id ?>" name="id">
                                                    <button class="btn btn-danger">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "/xampp/htdocs/Fusion/scripts.php";?>  