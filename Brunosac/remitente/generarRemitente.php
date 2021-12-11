<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<style>
    .remitente {
        width: 700px;
        overflow: auto;
        margin: 0px auto;
    }

    .remitente .deu .logo {
        margin: 50px;
    }

    .remitente .deu .logo img {
        width: 100%;
        display: block;
    }

    .remitente .deu .direc p {
        text-align: center;
        font-size: 25px;
    }

    .remitente .colCli {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    .remitente .transporte {
        margin-top: 50px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .remitente .transporte>div {
        padding: 15px;
        text-align: center;
        border: 1px solid black;
    }

    .remitente .transporte div:nth-child(1) {

        border-right: none;
        border-bottom: none;
    }

    .remitente .transporte div:nth-child(2) {

        text-align: center;
        border-bottom: none;
    }

    .remitente .transporte div:nth-child(3) {

        border-left: none;
        border-bottom: none;
    }

    .remitente .transporte div:nth-child(4) {
        border-right: none;
    }


    .remitente .transporte div:nth-child(6) {

        border-left: none;

    }
</style>
<?php

include('../conexion/db.php');
$id = $_GET['id'];

$sql = "SELECT * FROM salidas S LEFT OUTER JOIN registrpProducto R on S.idRegPro = R.idRegPro INNER JOIN cliente C on S.idCliente = C.idCliente WHERE S.idSalida=$id";
$result = mysqli_query($conexion, $sql);

?>

<body>


    <div class="remitente">
        <nav class="menu">
            <ul>
                <li> <a href="../entraProducto/listaProductos.php" class="regresar">Regresar</a></li>
            </ul>
        </nav>
        <div class="deu">
            <div class="logo"><img src="../img/logo.png"></div>
            <div class="direc">
                <p><strong>Direccion:</strong> Av Antonio José de Sucre 902, Pueblo Libre 15084</p>
            </div>
        </div>
        <div class="colCli">
            <?php while ($mostrar = mysqli_fetch_array($result)) {
            ?>

                <div class="cliente">


                    <p><strong>Fecha de inicio del translado:</strong> </p>
                    <p><?php echo $mostrar['fecha'] ?></p>
                    <p><strong>Destinatario:</strong></p>
                    <p><?php echo $mostrar['razonSocial'] ?></p>
                    <p><strong>Ruc:</strong></p>
                    <p><?php echo $mostrar['ruc'] ?></p>

                </div>
                <div class="ordenClien">

                    <p><strong>Guia de remision Transportista:</strong></p>
                    <p><?php echo $mostrar['numeroFactura'] ?></p>

                    <p><strong>Punto de partida:</strong></p>
                    <p>Av Antonio José de Sucre 902, Pueblo Libre 15084</p>
                    <p><strong>Punto de Llegada:</strong></p>
                    <p><?php echo $mostrar['direccion'] ?></p>
                </div>

        </div>


        <div class="transporte">
            <div>
                <p><strong>Producto</strong>
                <p>

            </div>
            <div>
                <p><strong>Description</strong>
                <p>

            </div>
            <div>
                <p><strong>Cantidad</strong> </p>

            </div>
            <div>
                <p><?php echo $mostrar['nombre'] ?></p>

            </div>
            <div>
                <p><?php echo $mostrar['descripcion'] ?></p>
            </div>
            <div>
                <p><?php echo $mostrar['cantidad'] ?></p>
            </div>
        </div>
    <?php
            }
    ?>
    </div>
</body>

</html>