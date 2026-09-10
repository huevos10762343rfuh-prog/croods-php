<?php
$servidor ="localhost";
$usuario = "root";
$clave = "";
$basedatos = "tienda"; 

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$basedatos;charset=utf8",
        $usuario,
        $clave
    );

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>