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
    .web {
        width: 100%;
        max-width: 1200px;
        margin: 0px auto;
        overflow: auto;
    }

    .web .logo {
        max-width: 500px;
        margin: 50px auto 100px;
    }

    .web img {
        display: block;
        width: 100%;
    }

    .formfecha {
        width: 800px;
        margin: 0px auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
    }

    .formfecha .btcCente {
        display: block;
        position: relative;

    }

    .formfecha .FTitle {
        text-align: center;
        font-size: 20px;
        text-transform: capitalize;


    }

    .formfecha .botonCons {
        display: block;
        width: 200px;
        margin: 0px auto;
        padding: 15px;
        font-size: 18px;
        cursor: pointer;
        background-color: #028ce7;
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    .formfecha label {
        display: block;
        margin-bottom: 10px;
        text-transform: uppercase;
        font-weight: 700;

    }

    #mostrarContenido {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin: 50px auto;
    }

    #mostrarContenido .FechaIngreso,
    #mostrarContenido .FechaSalida {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 70px 50px;
    }

    #mostrarContenido .post {
        display: block;
        text-align: center;
        grid-column: span 3;
        grid-row: span 1;
        padding: 20px 0px;
        font-size: 18px;
        font-weight: 700;


    }

    #mostrarContenido .title {
        display: block;
        text-align: center;
        font-weight: 700;
        padding: 14px 5px;
        color: #fff;
        grid-row: span 1;
        /* background-color: #89c2d9; */
    }

    #mostrarContenido>div>div {
        display: block;
    }

    #mostrarContenido .FechaIngreso>div,
    #mostrarContenido .FechaSalida>div {
        text-align: center;
        padding: 15px 0px 0px 0px
    }

    .FechaIngreso .title {
        background-color: #71ab46;

    }

    .FechaSalida .title {
        background-color: #ef7c33;
    }

    #mostrarContenido .proctud {
        text-align: left !important;
    }
</style>

<body>
    <div class="web">
        <nav class="menu">
            <ul>
                <li> <a href="../entraProducto/listaProductos.php" class="regresar">Regresar</a></li>
            </ul>
        </nav>


        <div class="logo"><img src="../img/logo.png">
        </div>
        <form action="nuevoProducto.php" method="post" class="formfecha">
            <div class="FTitle">
                <label>fecha inicio</label>
                <input type="date" name="iniF" value="2021-11-01" id="entrada">
            </div>
            <div class="FTitle">
                <label>fecha fin</label>
                <input type="date" name="finF" value="2021-12-10" id="salida">
            </div>

            <div class="btcCente">
                <input type="button" value="ver productos" class="botonCons" onclick="saludame();">
            </div>

        </form>
        <div id="mostrarContenido">

            <div class='FechaIngreso'>
                <section class='post'>Entrada productos</section>
                <div class='title'>Fecha</div>
                <div class='title'>Producto</div>
                <div class='title'>Cantidad</div>
            </div>
            <div class='FechaSalida'>
                <section class='post'>Salida productos</section>
                <div class='title'>Fecha</div>
                <div class='title'>Producto</div>
                <div class='title'>Cantidad</div>
            </div>
        </div>


    </div>

</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/fechas.js"> </script>




</html>