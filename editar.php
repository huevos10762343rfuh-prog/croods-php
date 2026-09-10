<?php 
require "conexiones.php";
$id = $_GET["id"] ?? null;
//''
echo $id;

$consulta = $conexion ->prepare("SELECT * FROM productos WHERE id = :id");
$consulta -> execute ([
   ':id' => $id 
]);
$producto = $consulta ->fetch();
var_dump($producto);

?>
<!--<h2>actualizacion de producto</h2>
    <form class="form"action="actualizar.php" method="POST">
        <input type = "number" name="id" hidden VALUE="<?= "$id" ?>" readonly>
        <label for="nombre">ingrese el nombre de su producto</label>
        <input type="text" name="nombre" id="nombre" value="<?=$producto["nombre"]?>"required>
        <label for="stock">ingrese el stock</label>
        <input type="number" name="stock" id="stock" value=" <?=$producto["stock"]?>" required>             
        <label for="precio">ingrese el precio de su producto</label>
        <input type="number"  name="precio" id="precio" value="<?=$producto["precio"]?>" required>
        <button class="btn-submit"type="submit">enviar</button>                
    </form>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>editar producto</title>
</head>
<body>
    <h2>actualizacion de producto</h2>
    <form class="form" action="actualizar.php" method="POST">
        <input type="number" name="id" hidden value="<?= $id ?>" readonly>
        <label for="nombre">ingrese el nombre de su producto</label>
        <input type="text" name="nombre" id="nombre" value="<?= $producto["nombre"] ?>" required>
        <label for="stock">ingrese el stock</label>
        <input type="number" name="stock" id="stock" value="<?= $producto["stock"] ?>" required>             
        <label for="precio">ingrese el precio de su producto</label>
        <input type="number" name="precio" id="precio" value="<?= $producto["precio"] ?>" required>
        <button class="btn-submit" type="submit">enviar</button>                
    </form>
</body>
</html>