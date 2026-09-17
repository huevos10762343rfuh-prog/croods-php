<?php 
session_start();
require "<controladores/conexiones.php";
$resultado = $conexion ->query("SELECT * FROM productos");

$res = $_GET["res"] ?? null;
$pos = $_GET["pos"] ?? null;
$lol = $_GET["lol"] ?? null;

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
    <h1>crud toma 1</h1>
    <h2>productos</h2>
        <?php if($res == "datosactualizados"): ?>
            <p class="res">El producto se actualizó correctamente</p>
        <?php endif; ?>
        <?php if($pos == "datosactualizados"): ?>
            <p class="res">El producto se actualizó correctamente</p>
        <?php endif; ?>
        <?php if($lol == "datosactualizados"): ?>
            <p class="res">El producto se actualizó correctamente</p>
        <?php endif; ?>
    <div class="contenedor1">
        <div class="contenedor2">
            <?php foreach ($resultado as $producto): ?>
                <h3>nombre del corte:<?= $producto['nombre'] ?></h3>
                <p>cantidad de kilos disponibles:<?= $producto['stock'] ?></p>
                <p>precio x kilo:<?= $producto['precio'] ?></p>
                <a href="editar.php?id=<?= $producto['id'] ?>">editar</a>
                <a href="eliminar.php?id=<?= $producto['id'] ?>">eliminar</a>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
   
    <h2>ingreso de mas productos</h2>
    <form class="form"action="guardar.php" method="POST">
        <label for="nombre">ingrese el nombre de su producto</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="stock">ingrese el stock</label>
        <input type="number" name="stock" id="stock" required>             
        <label for="precio">ingrese el precio de su producto</label>
        <input type="number"  name="precio" id="precio" required>
        <button class="btn-submit"type="submit">enviar</button>                
    </form>
</body>
</html>