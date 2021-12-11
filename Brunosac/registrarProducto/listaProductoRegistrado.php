<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../conexion/db.php');
    $sql = "select * from registrpProducto ORDER BY registrpproducto.nombre ASC";

    //SELECT * FROM `registrpproducto` ORDER BY `registrpproducto`.`nombre` ASC
    $result = mysqli_query($conexion, $sql);

    ?>
    <div class="listaProductoRegistrado">

        <nav class="menu">
            <ul>
                <li> <a href="../entraProducto/listaProductos.php">Regresar</a></li>
                <li> <a href="addRegProducto.php">Registrar Nuevo Producto</a></li>

                <li><a href="excel.php">Exportar registro<img class="iconos" src="../img/xls.png"></a></li>
            </ul>
        </nav>


        <div class="logo"><img src="../img/logo.png"></div>
        <p class="titulo">Lista de productos registrados</p>
        <!-- <a href="../entraProducto/listaProductos.php" class="reg">Regresar</a>
        <a href="addRegProducto.php" class="add">Registrar Nuevo Producto</a>
        <a href="excel.php" class="expor">Exportar registro</a> -->

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Accion</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $mostrar['idRegPro'] ?></td>
                        <td><?php echo $mostrar['codigo'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['precio'] ?></td>
                        <td>
                            <a class="edit" href="editRegProducto.php?id=<?php echo $mostrar['idRegPro'] ?>">Editar</a>
                            <!-- <a class="delete" href="delteRegProducto.php?id=<?php // echo $mostrar['idRegPro']
                                                                                    ?>">Eliminar</a> -->
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>