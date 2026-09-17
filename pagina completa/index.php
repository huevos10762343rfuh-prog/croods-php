<?php
session_start();
require "controladores\conexion.php";
$resultado = $conexion ->query("SELECT * FROM usuarios");

$lol = $_GET["lol"] ?? null;
var_dump($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h2>guardar usuario</h2>
    <form action="guardado_de_usuarios.php" method="POST">
        <label for="nombre">input your username</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="password">input your password</label>
        <input type="password" name="password" id="password" required>
        <label for="rank">insert your rank</label>
        <input type="number" name="rank" id="rank" required>
        <button class="btn-submit"type="submit">save user</button>
    </form>

    <h2>iniciar sesion</h2>
    <form action="login.php" method="POST">
        <input type="text" name="nombre" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <button class="btn-submit"type="submit"> log in</button>
    </form>

</body>
</html>