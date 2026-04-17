<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

echo "<h1>Práctica 3: Lira Lopez</h1>";

try {
    // probamos con datos validos
    $admin = new Admin("Canelita", "canelitaanimalcrossing@uas.edu.mx");
    echo "<p> Admin creado: " . $admin->getNombre() . " (" . $admin->getRol() . ")</p>";

    $alumno = new Alumno("Diego Garcia", "diego.garcia.brainrot@uas.edu.mx", "67693445");
    echo "<p> Alumno creado: " . $alumno->getNombre() . " - Matrícula: " . $alumno->getMatricula() . "</p>";

    // aqui probamos con datos invalidos
    echo "<h3>Probando validación de correo...</h3>";
    $usuarioError = new Usuario("Pepe", "correo-mal-formado");

} catch (Exception $e) {
    // Capturamos el error y mostramos el mensaje controlado
    echo "<p style='color: red; font-weight: bold;'>Capturamos un error: " . $e->getMessage() . "</p>";
}
?>