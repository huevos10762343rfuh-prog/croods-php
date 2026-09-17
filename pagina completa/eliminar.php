<?php
require "controladores/conexiones.php";
$id = $_GET["id"] ?? null;

$consulta = $conexion ->prepare("DELETE FROM productos WHERE id = :id ");
$consulta -> execute ([
   ':id' => $id 
]);

header("Location: pagina.php?pos=dato eliminado ");
?>