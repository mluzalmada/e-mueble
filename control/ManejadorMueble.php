<?php

include_once '../modelo/BDConexion.Class.php';
include_once '../modelo/Mueble.Class.php';

/**
 * Description of ManejadorMueble
 *
 * @author fabricio
 */
class ManejadorMueble {

    private $query;

    /**
     *
     * @var mysqli_result
     */
    private $datos;

    /**
     *
     * @var Mueble[] 
     */
    protected $coleccion;

    function __construct() {
        $this->setColeccion();
    }

//Metodo que crea la coleccion Muebles
    function setColeccion() {
        $this->query = "SELECT * FROM MUEBLE";
        $this->datos = BDConexion::getInstancia()->query($this->query);

        for ($x = 0; $x < $this->datos->num_rows; $x++) {
            $this->addElemento($this->datos->fetch_object("Mueble"));
        }
        unset($this->query);
    }

    function addElemento($elemento_) {
        $this->coleccion[] = $elemento_;
    }

    /**
     * 
     * @return Mueble[]
     */
    function getColeccion() {
        return $this->coleccion;
    }

    //Funcion para Alta de Muebles
    function alta($datos) {
        //Creo objeto sin enviar ID y enviando todos los datos del formulario
        $Mueble = new Mueble(null, $datos);

        //Se arma la query SQL
        $this->query = "INSERT INTO Mueble "
                . "VALUES (NULL, '{$Mueble->getNombre()}', '{$Mueble->getDescripcion()}' , "
                . "{$Mueble->getLargo()}, {$Mueble->getAncho()} )";
        $consulta = BDConexion::getInstancia()->query($this->query);
        unset($this->query);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    //Función para baja de Mueble
    function baja($id_) {
        $this->query = "DELETE FROM MUEBLE WHERE mue_id = '{$id_}'";
        $consulta = BDConexion::getInstancia()->query($this->query);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

    //Funcion para Modificación de Muebles
    function modificacion($datos, $id_) {
        $Mueble = new Mueble(null, $datos);
        $this->query = "UPDATE MUEBLE "
                . "SET mue_nombre = '{$Mueble->getNombre()}', "
                . "mue_descripcion ='{$Mueble->getDescripcion()}', "
                . "mue_largo = {$Mueble->getLargo()}, "
                . "mue_ancho = {$Mueble->getAncho()} "
                . "WHERE mue_id = '{$id_}'";
        $consulta = BDConexion::getInstancia()->query($this->query);
        unset($this->query);
        if ($consulta) {
            return true;
        } else {
            return false;
        }
    }

}
