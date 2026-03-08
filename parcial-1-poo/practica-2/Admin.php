<?php

//clase admin - lira lopez //

// enlace la clase usuario 
require_once 'Usuario.php';

// aquí creé la clase admin que extiende de usuario
class Admin extends Usuario {

//implemente el metodo getrol, unico de admin
public function getRol() {
    return "Administrador";
    }
}

?>