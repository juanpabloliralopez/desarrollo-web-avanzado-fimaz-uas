<?php

// solo requerí a admin por que usuario ya esta enlazado a esta
require_once 'Admin.php';

$admin = new Admin("Juan Pablo Lira Lopez", "juanpabl0lira1717@gmail.com");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 2 - Lira</title>
</head>
<body>

    <div class="card">
        <h1>Evidencia de Herencia</h1>
        <p><strong>Nombre:</strong> <?php echo $admin->getNombre(); ?></p>
        <p><strong>Correo:</strong> <?php echo $admin->getCorreo(); ?></p>
        
        <p><strong>Rol del sistema:</strong> <span class="rol"><?php echo $admin->getRol(); ?></span></p>
    </div>
</body>
</html>