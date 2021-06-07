<?php
include_once '../control/ManejadorMueble.php';
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
        <title>Crear Mueble</title>
    </head>
    <body>

        <div class="container">
            <form action="mueble.crear.procesar.php" method="post"> 
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Mueble</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputNombre">Nombre</label>
                            <input id="inputNombre" type="text" name="mue_nombre" class="form-control" required>
                        </div>     
                        <div class="form-group">
                            <label for="inputDescripcion">Descripción</label>
                            <input id="inputDescripcion" type="text" name="mue_descripcion" class="form-control" required>
                        </div>   
                        <div class="form-group">
                            <label for="inputLargo">Largo</label>
                            <input id="inputLargo" type="number" name="mue_largo" step="0.01" class="form-control" required>
                        </div> 
                        <div class="form-group">
                            <label for="inputAncho">Ancho</label>
                            <input id="inputAncho" type="number" name="mue_ancho" step="0.01" class="form-control" required>
                        </div> 
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-outline-success">
                            Confirmar
                        </button>
                        <a href="muebles.php">
                            <button type="button" class="btn btn-outline-danger">
                                Cancelar
                            </button>
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </body>
</html>
