<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$password = $_POST['password'];
$rank = (int)$_POST;['rank']


if(empty($nombre)|| empty($password) || empty($rank)){
    die("todos los campos son obligatorios");
}

$passwordhash = password_hash($password, PASSWORD_DEFAULT);

$consulta = $conexion->prepare("INSERT INTO usuarios (nombre, password, rank) VALUES (:nombre, :password, :rank)");
$consulta -> execute([
    ':nombre' => $nombre,
    ':password' => $password,
    ':rank' => $rank
]);
header("Location: pagina.php? lol= se subio correctamente ");
?>