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

    $sql = "select * from salidas S LEFT OUTER JOIN registrpProducto R on S.idRegPro = R.idRegPro
INNER JOIN cliente C on S.idCliente = C.idCliente ORDER BY S.idSalida ASC";
    $result = mysqli_query($conexion, $sql);

    ?>
    <div class="salidaProducto">
        <nav class="menu">
            <ul>
                <li> <a href="../entraProducto/listaProductos.php">Regresar</a></li>
                <li> <a href="salidaProducto.php">Salida productos</a></li>
                <li><a href="excel.php">Exportar Inventario<img class="iconos" src="../img/xls.png"></a></li>
            </ul>
        </nav>
        <div class="logo"><img src="../img/logo.png"></div>
        <p class="titulo">Salida de productos</p>

        <!-- <a class="add" href="salidaProducto.php">Salida productos</a>
        <a href="../entraProducto/listaProductos.php" class="listaRP">Regresar</a> -->
        <table>
            <thead>
                <tr>


                    <th>RS. Cliente</th>
                    <th>Ruc</th>
                    <th>N. Factura</th>
                    <th>Producto</th>
                    <th>fecha </th>
                    <th>descripcion</th>
                    <th>precio</th>
                    <th>cantidad</th>
                    <th>Total</th>
                    <th>Remitente</th>
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
                        <td><?php echo $mostrar['precio'] ?></td>
                        <td><?php echo $mostrar['cantidad'] ?></td>
                        <td><?php echo "S/ " . $mostrar['precio'] * $mostrar['cantidad'] ?></td>
                        <td>
                            <a href="../remitente/generarRemitente.php?id=<?php echo $mostrar['idSalida'] ?>" class="verRM">ver</a>
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