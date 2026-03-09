<?php
require_once 'Usuario.php';

class Alumno extends Usuario {
    private $matricula; // Atributo exclusivo de Alumno

    public function __construct($nombre, $correo, $matricula) {
        // Reutilizamos el constructor del padre (validación de correo)
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }

    public function getMatricula() { return $this->matricula; }
    
    public function getRol() { return "Alumno"; }
}