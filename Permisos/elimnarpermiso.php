<?php
    require_once '../conexion.php';
    $id = $_GET['id'];
    $consulta = "DELETE FROM roles WHERE id_rol = $id";
    mysqli_query($mysqli, $consulta);
    header("Location: index.php");
?>