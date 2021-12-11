<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
    <div class="logo"><img  src="img/logo.png" ></div>
        <form class="formUser" action="validar.php" method="post">
            <p>Ingresar</p>
            <label for="usuario">Usuario:</label><br>
            <input type="text" id="correo" name="usuario" ><br>
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="contrasena" ><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
   
</body>
</html>