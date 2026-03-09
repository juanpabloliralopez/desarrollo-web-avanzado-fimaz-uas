<?php
require_once 'Usuario.php';

class Admin extends Usuario {
    // Polimorfismo: implementamos getRol de manera específica
    public function getRol() {
        return "Administrador";
    }
}