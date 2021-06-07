<?php

include_once 'BDConexion.Class.php';

class Mueble {

    private $mue_id;
    private $mue_nombre;
    private $mue_descripcion;
    private $mue_medida;
    private $mue_largo;
    private $mue_ancho;
    private $query;

    /**
     *
     * @var mysqli_result
     */
    private $datos;

    function __construct($id = null, $datos = null) {
        //Si vienen datos de formulario (Alta) setea valores de Objeto
        if (isset($datos) and ! isset($id)) {
            $this->setNombre($datos['mue_nombre']);
            $this->setDescripcion($datos['mue_descripcion']);
            $this->setAncho($datos['mue_ancho']);
            $this->setLargo($datos['mue_largo']);
        } else {
            //Sino viene un nuevo Objeto, lo recupero (para Modificar)
            if (isset($id)) {
                $this->recuperaObjeto($id);
            } else {
                return false;
            }
        }
    }

    function recuperaObjeto($id) {
        $this->mue_id = $id;

        $this->query = "SELECT * FROM MUEBLE WHERE mue_id = {$this->mue_id}";

        $this->datos = BDConexion::getInstancia()->query($this->query);
        $this->datos = $this->datos->fetch_assoc();

        foreach ($this->datos as $atributo => $valor) {
            $this->{$atributo} = $valor;
        }
        unset($this->query);
        unset($this->datos);
    }

    function setMedida() {
        $this->mue_medida = $this->mue_largo * $this->mue_ancho;
    }

    function setLargo($largo_) {
        $this->mue_largo = $largo_;
    }

    function setAncho($ancho_) {
        $this->mue_ancho = $ancho_;
    }

    function setId($id_) {
        $this->mue_id = $id_;
    }

    function setNombre($nombre_) {
        $this->mue_nombre = $nombre_;
    }

    function setDescripcion($descripcion_) {
        $this->mue_descripcion = $descripcion_;
    }

    function getId() {
        return $this->mue_id;
    }

    function getNombre() {
        return $this->mue_nombre;
    }

    function getDescripcion() {
        return $this->mue_descripcion;
    }

    function getMedida() {
        $this->setMedida();
        return $this->mue_medida;
    }

    function getLargo() {
        return $this->mue_largo;
    }

    function getAncho() {
        return $this->mue_ancho;
    }

}
