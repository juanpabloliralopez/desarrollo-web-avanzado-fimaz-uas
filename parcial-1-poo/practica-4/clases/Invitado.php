<?php
require_once 'Usuario.php';

class Invitado extends Usuario {
    private $empresa; // Atributo exclusivo de Invitado

    public function __construct($nombre, $correo, $empresa) {
        // Reutilizamos el constructor del padre
        parent::__construct($nombre, $correo);
        $this->empresa = $empresa;
    }

    public function getEmpresa() { return $this->empresa; }

    public function getRol() { return "Invitado"; }
}