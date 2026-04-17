<?php
require_once 'Usuario.php';

class Admin extends Usuario {
    // use get rol para que el sistema retorne a admin y que se establezca el rol a administrador :)
    public function getRol() {
        return "Administrador";
    }
}