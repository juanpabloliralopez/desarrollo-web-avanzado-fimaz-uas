<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

$lista_usuarios = [];
$error_mensaje = "";

try {
    $lista_usuarios[] = new Admin("Juan Pablo Lira Lopez", "juanpabl0lira1717@uas.edu.mx");
    $lista_usuarios[] = new Alumno("Diego Garcia Carrrazco", "diego_garcia20077@siia.uas.mx", "676767676");
    // este es el usuario con error para la excepcion
    $lista_usuarios[] = new Alumno("Malpica", "malpica_200_22", "20203030");

} catch (Exception $e) {
    // aqui captura el error y lo guarda
    $error_mensaje = "Atención: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen Parcial 1 - Lira</title>
</head>
<body>

    <h1>Lista de usuarios registrados en fimaz</h1>

    <?php if ($error_mensaje != ""): ?>
        <p><b>Error capturado:</b> <?php echo $error_mensaje; ?></p>
    <?php endif; ?>

    <p><b>Lista</b></p>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th>Matrícula</th>
        </tr>

        <?php foreach ($lista_usuarios as $u): ?>
            <tr>
                <td><?php echo $u->getNombre(); ?></td>
                <td><?php echo $u->getCorreo(); ?></td>
                <td><?php echo $u->getRol(); ?></td>
                <td>
                    <?php 
                    if (method_exists($u, 'getMatricula')) {
                        echo $u->getMatricula();
                    } else {
                        echo "---";
                    }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>