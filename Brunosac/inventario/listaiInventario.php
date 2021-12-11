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

    $sql = "select * from inventario";
    $result = mysqli_query($conexion, $sql);
    $numeroF = 1;

    $sql_n = "SELECT * FROM inventario";
    if ($result = mysqli_query($conexion, $sql_n)) {
        $numeroF = mysqli_num_rows($result);
    }

    ?>

    <div class="inventarios">
        <div class="cantIv" style="display: none;">



            <?php echo $numeroF; ?>
        </div>
        <nav class="menu">
            <ul>
                <li> <a href="../entraProducto/listaProductos.php">Regresar</a></li>
                <li> <a href="../salidaProducto/listaSalidad.php">Lista Salida de productos</a></li>

                <li><a href="excel.php">Exportar Inventario <img class="iconos" src="../img/xls.png"></a></li>
                <li><a href="backup.php">Realizar un Backup <img class="iconos" src="../img/backup.png"></a></li>
            </ul>
        </nav>
        <div class="logo"><img src="../img/logo.png"></div>
        <p class="titulo">Lista de Inventarios</p>
        <!-- <a class="add" href="../entraProducto/listaProductos.php">Lista Entradas de productos</a>
        <a class="add" href="../salidaProducto/listaSalidad.php">Lista Salida de productos</a>
        <a href="excel.php" class="expor">Exportar Inventario</a> -->
        <table>
            <thead>
                <tr>
                    <th>Codigo producto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Alerta Stock</th>
                </tr>
            </thead>
            <tbody class="stock">
                <?php while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $mostrar['codigo'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td>S/ <?php echo $mostrar['precio'] ?></td>
                        <td><?php echo $mostrar['stock'] ?></td>
                        <th>
                            <?php
                            if ($mostrar['stock'] <= 20) {
                                echo '<div><a href="registro.php" class="registro">registro envio<a></div>';
                            } else {
                                echo "<div>Nomal</div>";
                            };
                            ?>
                        </th>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <!-- <script src="../js/inventario.js"></script> -->
</body>

</html>