<?php
require_once 'Usuario.php';

class Alumno extends Usuario {
    
//solo el alumno podra ver la matricula
    private $matricula;

    public function __construct($nombre, $correo, $matricula) {
        parent::__construct($nombre, $correo);
                $this->matricula = $matricula;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    // el alumno tiene su propio getRol para que regrese el texto Alumno
    public function getRol() {
        return "Alumno";
    }
}