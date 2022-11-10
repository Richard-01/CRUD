<?php


$idproducto = $_POST["idproducto"];
$stock = $_POST["stock"];
$cant = $_POST["cant"];

if (
    !empty($_POST["idproducto"]) and !empty($_POST["stock"]) and !empty($_POST["cant"])
) {

    $idproducto = $_POST["idproducto"];
    $stock = $_POST["stock"];

    $cant = $_POST["cant"]; ///Parametro base de datos

    $cantNueva = $cant - $stock;

    if ($stock <= $cant) {

        include "../Model/conexion.php";
        $sql = $conexion->query("UPDATE productos SET stock='$cantNueva' WHERE id=$idproducto");
    } 
    if ($sql == 1) {
        $sql = $conexion->query("INSERT INTO venta(id_producto,stock) 
                                VALUES ('$idproducto','$stock')");
        header("location:../index.php");
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Error al registrar
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
} else {
    echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        Algun campo esta vacio
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
}