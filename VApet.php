<?php 
	include "./CC/conex.php";
    include "/xampp/htdocs/Fusion/navbar.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Revision de Reciclaje</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Pagina de inicio para el manejeo y control de datos sobre el reciclaje; asi como su precio en ciertos municipios</li>
                </ol>
                <div class="row">
                    <div class="col">
                        <hr>
                        <div class="card mb-4">
                        <div class="card-body">
                            <form action="./PIpet.php" method="post">
                                <label for="municipio">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado">
                                <label for="pais">Pais</label>
                                <input type="text" class="form-control" id="pais" name="pais">
                                <label for="preciokilo">Precio x kilo</label>
                                <input type="text" class="form-control" id="preciokilo" name="preciokilo">
                                <label for="toneladas">Toneladas recicladas</label>
                                <input type="text" class="form-control" id="toneladas" name="toneladas">
                                <label for="toneladas">Fecha de reciclado</label>
                                <input type="date" name="fechareciclado" id="fechareciclado" class="form-control">
                                <button class="btn btn-primary my-3">
                                    <i class="fa-solid fa-floppy-disk"></i> Agregar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "/xampp/htdocs/Fusion/scripts.php";?>  