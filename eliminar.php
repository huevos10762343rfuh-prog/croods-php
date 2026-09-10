<?php
require "conexiones.php";
$id = $_GET["id"] ?? null;

$consulta = $conexion ->prepare("DELETE FROM productos WHERE id = :id ");
$consulta -> execute ([
   ':id' => $id 
]);

header("location: index.php?pos=dato eliminado ");
?>