<?php
class Usuario {
    // Protected permite que las clases hijas accedan a los atributos
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo) {
        // Validación obligatoria de formato de email
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Si falla, lanzamos la excepción que atrapará el index.php
            throw new Exception("Correo inválido: $correo");
        }
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Getters básicos exigidos por la práctica
    public function getNombre() { return $this->nombre; }
    public function getCorreo() { return $this->correo; }
}