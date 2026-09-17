<?php
require "conexion.php";
session_start();

$nombre = trim($_POST['nombre'] ?? '');
$password = $_POST['password'] ?? '';

if(empty($nombre) || empty($password)){
    die("todos los campos son obligatorios");
}

$estd = $conexion->prepare('SELECT * FROM usuarios WHERE nombre = ?');
$estd->execute([$nombre]);
$user = $estd->fetch();

if (!$user) {
    die("Usuario o contraseña incorrectos");
}

if (password_verify($password, $user["contraseña"])){
    $_SESSION["nombre"] = $nombre;
    $_SESSION["rank"] = $user['rank'];
    header("Location: pagina.php");
    exit;
} else {
    header("Location: index.php?error=1");
    exit();
}
?>