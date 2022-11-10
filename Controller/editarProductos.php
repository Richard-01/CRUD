<?php


if (!empty($_POST["btnActualizar"])) {
    if (
        !empty($_POST["idproducto"]) and !empty($_POST["nombre"]) and !empty($_POST["referencia"] and !empty($_POST["precio"])) and !empty($_POST["peso"]) and
        !empty($_POST["categoria"]) and !empty($_POST["stock"])
    ) {
        include "../Model/conexion.php";
        $idproducto = $_POST["idproducto"];
        $nombre = $_POST["nombre"];
        $referencia = $_POST["referencia"];
        $peso = $_POST["peso"];
        $categoria = $_POST["categoria"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];

        $sql = $conexion->query("UPDATE productos SET nombre_producto='$nombre',referencia='$referencia', peso=$peso, categoria='$categoria',
                                 stock='$stock', precio='$precio' WHERE id=$idproducto");

        if ($sql == 1) {
            header("location: ../index.php");
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
}