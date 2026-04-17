<?php
//archivo index - practica 1 - lira lopez //

// Aqui inclui el archivo de la clase Usuario para que hablen el mismo idioma
require_once 'Usuario.php';

// Cree una instancia de la clase usuario y de ahi se envian los datos al constructor que serian el nombre y el correo
$usuario = new Usuario("Juan Pablo Lira Lopez", "juanpabl0lira1717@gmail.com");
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Práctica 1 - Lira</title>

</head>

<body>

    <h1>Información del Usuario</h1>

    <p><strong>Nombre:</strong> <?php echo $usuario->getNombre(); ?></p>

    <p><strong>Correo:</strong> <?php echo $usuario->getCorreo(); ?></p>

</body>

</html>