<?php
if (!empty($_POST["btnRegistrar"])) {
    if (
        !empty($_POST["nombre"]) and !empty($_POST["referencia"] and !empty($_POST["precio"])) and !empty($_POST["peso"]) and
        !empty($_POST["categoria"]) and !empty($_POST["stock"])
    ) {
        $nombre = $_POST["nombre"];
        $referencia = $_POST["referencia"];
        $peso = $_POST["peso"];
        $categoria = $_POST["categoria"];
        $stock = $_POST["stock"];
        $precio = $_POST["precio"];

        $sql = $conexion->query("INSERT INTO productos(nombre_producto,referencia,peso,categoria,stock,precio) 
                                VALUES ('$nombre','$referencia',$peso,'$categoria','$stock','$precio')");

        if ($sql == 1) {
            echo '<div  class="alert alert-success alert-dismissible fade show" role="alert">
            Registro Exitoso
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        } else {
            echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
            Error al Registrar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        //echo "Todo ok";
    } else {
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        Algun campo esta vacio
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
}