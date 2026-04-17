<?php
class Usuario {
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo) {
        // aqui se valida el formato del correo
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Lanzamos un mensaje si el correo no es correcto
            throw new Exception("Error: El correo electrónico '$correo' no cumple con un formato válido.");
        }
        
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getNombre() { return $this->nombre; }
    public function getCorreo() { return $this->correo; }
}
?>