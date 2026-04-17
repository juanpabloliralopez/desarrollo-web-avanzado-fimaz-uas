<?php

//Clase Usuario - Práctica 2 - Lira Lopez //

class Usuario {
    // cambie los atributos privados a protected para que admin pueda usarlos
    protected $nombre;
    protected $correo;

    // Aqui aplique el metodo constructor para inicializar los datos del usuario
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Método Getter para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Método Getter para obtener el correo
    public function getCorreo() {
        return $this->correo;
    }

    // Método Setter para modificar el nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Método Setter para modificar el correo
    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}

?>