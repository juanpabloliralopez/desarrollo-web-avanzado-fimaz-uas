<?php
class Usuario {
    // Use protected para que admin y alumno puedan usarlos
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo) {
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Si el correo esta mal, lanzamos la excepcion, aplique la misma formula que la practica pasada
            throw new Exception("Lo siento, el correo '$correo' no tiene un formato valido.");
        }
        
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }
}