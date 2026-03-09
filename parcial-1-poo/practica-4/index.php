<?php
// Importamos las clases
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';

$usuarios = []; // Aquí guardaremos a los usuarios 
$error = "";    // Aquí guardaremos el mensaje si falla el correo

try {
    // Creamos los objetos que se piden 
    $usuarios[] = new Admin("Juan Pablo Lira", "juan.lira777@uas.edu.mx");
    $usuarios[] = new Alumno("Diego Garcia", "diego@brainrot.uas.mx", "20241001");
    $usuarios[] = new Invitado("Thalia", "thalia2345@amoralamexicana.com", "AMAZON");

    $usuarios[] = new Alumno("Pedro", "correo_pedro", "001000");

} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Practica 4 - Lira </title>
</head>
<body>

    <h2>Practica 4 - Lira</h2>

    <?php if ($error): ?>
            <b>Error capturado:</b> <?php echo $error; ?>
        </p>
    <?php endif; ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr style="background-color: #eee;">
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Matricula</th>
                <th>Empresa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?php echo $u->getNombre(); ?></td>
                    <td><?php echo $u->getCorreo(); ?></td>
                    <td><?php echo $u->getRol(); ?></td>
                    <td>
                        <?php 
                        // Si es alumno, mostrar matricula, si no una rayita
                        if (method_exists($u, 'getMatricula')) {
                            echo $u->getMatricula();
                        } else {
                            echo "—";
                        }
                        ?>
                    </td>
                    <td>
                        <?php 
                        // Si es invitado, mostrar empresa, si no una rayita
                        if (method_exists($u, 'getEmpresa')) {
                            echo $u->getEmpresa();
                        } else {
                            echo "—";
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>