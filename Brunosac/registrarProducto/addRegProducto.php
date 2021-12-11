
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
<div class="addRegProducto">
<div class="logo"><img  src="../img/logo.png" ></div>
<form action = "newRegProducto.php" method="post" class="formUser">
    <p>Registrar producto</p>
        <label>codigo</label><br>
        <input type="texto" name="txtcodigo" required><br>
        <label>nombre</label><br>
        <input type="text" name="txtnombre" required><br>
        <label>precio</label><br>
        <input type="number" name="txtprecio" step="any" required ><br>
        <input type="submit" name="" value="Agregar" class="boton">
        <a href="listaProductoRegistrado.php" class="regresar">Regresar</a>
    </form>
</div>
</body>
</html>