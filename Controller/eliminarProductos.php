<?php

include "Model/conexion.php";

if(!empty($_GET["id"])){
    
    $id=$_GET["id"];

    $sql=$conexion->query("DELETE FROM productos WHERE id=$id");

    if($sql==1){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Eliminado Corretamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
    }else{
        echo '<div  class="alert alert-danger alert-dismissible fade show" role="alert">
        Error al Eliminar
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'; 
    }
}

?>