<?php
include_once '../control/ManejadorMueble.php';
include_once '../gui/navbar.php';

$ManejadorMueble = new ManejadorMueble();
$id = $_GET["id"];
$Mueble = new Mueble($id);

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
        <title>Actualizar Mueble</title>
    </head>
    <body>

        <div class="container">
            <form action="mueble.modificar.procesar.php" method="post"> 
                <div class="card">
                    <div class="card-header">
                        <h3>Actualizar Mueble</h3>
                        <p>
                            Complete los campos a continuaci&oacute;n. 
                            Luego, presione el bot&oacute;n <b>Confirmar</b>.<br />
                            Si desea cancelar, presione el bot&oacute;n <b>Cancelar</b>.
                        </p>
                    </div>
                    <div class="card-body">
                        <h4>Propiedades</h4>
                        <div class="form-group">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" value="<?= $Mueble->getNombre(); ?>" name="mue_nombre" class="form-control" id="inputNombre" required>
                        </div>
                        <div class="form-group">
                            <label for="inputDescripcion">Descripcion</label>
                            <input type="text" value="<?= $Mueble->getDescripcion(); ?>" name="mue_descripcion" class="form-control" id="inputDescripcion" required>
                        </div>
                        <div class="form-group">
                            <label for="inputLargo">Largo</label>
                            <input type="text" value="<?= $Mueble->getLargo(); ?>" name="mue_largo" class="form-control" id="inputLargo" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAncho">Ancho</label>
                            <input type="text" value="<?= $Mueble->getAncho(); ?>" name="mue_ancho" class="form-control" id="inputAncho" required>
                        </div>

                        <input type="hidden" name="id" value="<?= $Mueble->getId(); ?>" >

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-success">
                            <span class="oi oi-check"></span> Confirmar
                        </button>
                        <a href="muebles.php">
                            <button type="button" class="btn btn-outline-danger">
                                <span class="oi oi-x"></span> Cancelar
                            </button>
                        </a>
                    </div>
                </div>
            </form>

        </div>        
    </body>
</html>
