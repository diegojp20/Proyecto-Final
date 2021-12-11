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


    $sql = "select * from entradaProducto E LEFT OUTER JOIN registrpProducto R on E.idRegPro = R.idRegPro
    INNER JOIN proveedores P on E.idProveedor = P.idProveedor  ORDER BY E.idEntProd ASC";
    $result = mysqli_query($conexion, $sql);


    ?>
    <div class="entraProducto">


        <nav class="menu">
            <ul>
                <li> <a href="../inventario/listaiInventario.php">Lista Inventario</a></li>
                <li><a href="../salidaProducto/listaSalidad.php">Lista Salida de productos</a></li>
                <li><a href="agregarProducto.php">Entrar producto</a></li>
                <li><a href="../Kardex/kardex.php">Kardex</a></li>
                <li><a href="../registrarProducto/listaProductoRegistrado.php">Lista de productos registrados</a></li>
            </ul>
        </nav>

        <div class="logo"><img src="../img/logo.png"></div>
        <p class="titulo">Lista de Entrada de productos</p>

        <!-- <a class="add" href="../inventario/listaiInventario.php">Lista Inventario</a>

        <a class="add" href="../salidaProducto/listaSalidad.php">Lista Salida de productos</a>

        <a class="add" href="agregarProducto.php">Entrar producto</a>
        <a href="../registrarProducto/listaProductoRegistrado.php" class="listaRP">Lista de productos registrados</a>
 -->

        <table>
            <thead>
                <tr>
                    <th>razonSocial</th>
                    <th>ruc</th>
                    <th>numeroFactura</th>
                    <th>producto</th>
                    <th>fecha ingreso</th>
                    <th>descripcion</th>
                    <th>cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $mostrar['razonSocial'] ?></td>
                        <td><?php echo $mostrar['ruc'] ?></td>
                        <td><?php echo $mostrar['numeroFactura'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['descripcion'] ?></td>
                        <td><?php echo $mostrar['cantidad'] ?></td>
                        <!-- <td>
                            <a class="delete" href="editarProducto.php?id=<?php echo $mostrar['idEntProd'] ?>">Editar</a>
                        </td>  -->
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>