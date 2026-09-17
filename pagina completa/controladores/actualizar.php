<?php 
require "conexiones.php";
$id = $_GET["id"] ?? null;
//''
echo $id;


$id = $_POST["id"];
$nombre = $_POST["nombre"];
$stock = $_POST["stock"];
$precio  = $_POST["precio"];

$consulta = $conexion ->prepare("UPDATE productos  SET nombre = :nombre, stock = :stock , precio = :precio WHERE id = :id");
$consulta -> execute ([
   ':id' => $id, 
   ':nombre' => $nombre,
   ':stock' => $stock, 
   ':precio' => $precio,
]);

   header("Location: pagina.php? res=datosactualizados ");
?>