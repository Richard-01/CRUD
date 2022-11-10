<?php
    include "Model/conexion.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="DataTables/datatables.min.css">

</head>

<body>
    <h1 class="text-center p-2">Prueba Tecnica</h1>
<!-- Modal de vender -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Vender producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form" action="Controller/ActualizarStock.php" method="post">
                        <div class="mb-1">
                            <input type="text" id="idproducto" name="idproducto" class="form-control" required>
                        </div>
                        <div class="mb-1">
                            <input type="hidden" id="stock" name="cant" class="form-control" required>
                        </div>
                        <div class="mb-1">
                            <label for="Nombre" class="form-label">Stock</label>
                            <input type="number" id="stockCliente" name="stock" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-success" name="btnActualizar" value="oklisto">Vender</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- fin modal -->

<!-- modal editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editar producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form" action="./Controller/editarProductos.php" method="post">
                        <?php
                            $sql = $conexion->query("SELECT * FROM productos WHERE id=4");
                            while($datos=$sql->fetch_object()){
                        ?>
                        <div class="mb-1">
                            <input type="hidden" id="idproducto" name="idproducto" class="form-control" required">
                        </div>
                        <div class="mb-1">
                            <label for="Nombre" class="form-label">Nombre del producto</label>
                            <input type="text" name="nombre" class="form-control" required value="<?= $datos->nombre_producto ?>">
                        </div>
                        <div class="mb-1">
                            <label for="Nombre" class="form-label">Referencia</label>
                            <input type="text" name="referencia" class="form-control" required value="<?= $datos->referencia ?>">
                        </div>
                        <div class="mb-1">
                            <label for="Nombre" class="form-label">Precio</label>
                            <input type="number" name="precio" class="form-control" required value="<?= $datos->precio ?>">
                        </div>
                        <div class="mb-1">
                            <label for="Nombre" class="form-label">Peso</label>
                            <input type="number" name="peso" class="form-control" required value="<?= $datos->peso ?>">
                        </div>
                        <div class="mb-1">
                            <label for="Correo" class="form-label">Categoria</label>
                            <input type="text" name="categoria" class="form-control" required value="<?= $datos->categoria ?>">
                        </div>
                        <div class="mb-1">
                            <label for="Nombre" class="form-label">Stock</label>
                            <input type="number" id="stockCliente" name="stock" class="form-control" required value="<?= $datos->stock ?>">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-primary" id="btnActualizar" name="btnActualizar" value="oklisto">Actualizar campos</button>
                        </div>
                    <?php
                    }
                    ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- fin modal -->

<!-- Registro -->
    <div class="container-fluid row">
        <div class="col-4 p-4">
            <form method="POST">
                <h3 class="text-center p-2">Registro de productos</h3>
                <?php
                include "Model/conexion.php";
                include "Controller/editarProductos.php";
                include "Controller/registroProductos.php";
                ?>
                <div class="mb-1">
                    <label for="Nombre" class="form-label">Nombre del producto</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="mb-1">
                    <label for="Nombre" class="form-label">Referencia</label>
                    <input type="text" name="referencia" class="form-control" required>
                </div>
                <div class="mb-1">
                    <label for="Nombre" class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control" required>
                </div>
                <div class="mb-1">
                    <label for="Nombre" class="form-label">Peso</label>
                    <input type="number" name="peso" class="form-control" required>
                </div>
                <div class="mb-1">
                    <label for="Correo" class="form-label">Categoria</label>
                    <input type="text" name="categoria" class="form-control" required>
                </div>
                <div class="mb-1">
                    <label for="Correo" class="form-label">Stock</label>
                    <input type="text" name="stock" class="form-control" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary " name="btnRegistrar" value="oklisto">Registrar</button>
                </div>
            </form>
        </div>
<!--Fin registro-->

<!-- informe -->
        <div class="col-8 p-4">
            <h3 class="text-center p-2">Informe productos</h3>
            <?php
            include "Controller/eliminarProductos.php";
            ?>
            <table class="table" id="example">
                <thead class="bg-info">
                    <tr>
                        <th scope="col-2">Id</th>
                        <th scope="col-2">Producto</th>
                        <th scope="col-2">Referecia</th>
                        <th scope="col-2">precio</th>
                        <th scope="col-2">peso</th>
                        <th scope="col-2">categoria</th>
                        <th scope="col-2">stock</th>
                        <th scope="col-2">fecha</th>
                        <th scope="col-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = $conexion->query("SELECT * FROM productos");

                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre_producto ?></td>
                            <td><?= $datos->referencia ?></td>
                            <td><?= $datos->precio ?></td>
                            <td><?= $datos->peso ?></td>
                            <td><?= $datos->categoria ?></td>
                            <td><?= $datos->stock ?></td>
                            <td><?= $datos->fecha ?></td>
                            <td>
                                <a href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa-solid fas fa-edit" width="7" height="7"></i></a>
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small  btn-danger"><i class="fa-solid fas fa-trash-alt"></i></a>
                                <button type="button" id="btnmodal" class="btn btn-success" data-nom="<?= $datos->id ?>" data-cant="<?= $datos->stock ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fas fa-donate"></i> Vender
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
<!-- fin informe -->
    </div>
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/31b8330cb0.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/Validaciones.js"></script>
</body>

</html>