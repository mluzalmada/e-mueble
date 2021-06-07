<?php
include_once '../control/ManejadorMueble.php';

$ManejadorMueble = new ManejadorMueble();
$Muebles = $ManejadorMueble->getColeccion();
include_once '../gui/navbar.php';
?>

<html>
    <head>
        <meta charset="UTF-8">      
        <link rel="stylesheet" href="../lib/bootstrap-4.1.1-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../lib/open-iconic-master/font/css/open-iconic-bootstrap.css" />
        <link rel="stylesheet" href="../lib/datatable/dataTables.bootstrap4.min.css" />
        <script type="text/javascript" src="../lib/JQuery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="../lib/bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../lib/datatable/jquery.dataTables.min.js"></script>  
        <script type="text/javascript" src="../lib/datatable/dataTables.bootstrap4.min.js"></script>    
        <title>Muebles</title>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">

                    <h3>Muebles</h3>
                </div>
                <div class="card-body">
                    <p>
                        <a href="mueble.crear.php">
                            <button type="button" class="btn btn-success">
                                <span class="oi oi-plus"></span> Nuevo Mueble
                            </button>
                        </a>
                    </p>
                    <table class="table table-hover table-sm" id="tablaMuebles">
                        <thead>
                            <tr class="table-warning">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Largo</th>
                                <th>Ancho</th>
                                <th>Medida</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($Muebles as $Mueble) { ?>
                                    <td><?= $Mueble->getId(); ?></td>
                                    <td><?= $Mueble->getNombre(); ?></td>
                                    <td><?= $Mueble->getDescripcion(); ?></td>
                                    <td><?= $Mueble->getLargo(); ?></td>
                                    <td><?= $Mueble->getAncho(); ?></td>
                                    <td><?= $Mueble->getMedida(); ?></td>

                                    <td>
                                        <a title="Modificar" href="mueble.modificar.php?id=<?= $Mueble->getId(); ?>">
                                             <button type="button" class="btn btn-outline-warning">
                                                <span class="oi oi-pencil"></span>
                                            </button>
                                        </a>
                                        &nbsp;
                                        <a title="Eliminar" href="mueble.eliminar.php?id=<?= $Mueble->getId(); ?>">
                                             <button type="button" class="btn btn-outline-danger">
                                                <span class="oi oi-trash"></span>
                                            </button>
                                        </a>  
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
         <script type="text/javascript">
            $(document).ready(function () {
                $('#tablaMuebles').DataTable({
                    language: {
                        url: '../lib/datatable/es-ar.json'
                    }
                });
            });
        </script>
    </body>
</html>