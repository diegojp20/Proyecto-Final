<?php

include('../conexion/db.php');
$id=$_GET['id'];

$sql="select * from registrpProducto where idRegPro='".$id."'";
$result=mysqli_query($conexion,$sql);
  while($fila=mysqli_fetch_array($result)){

?>




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

<div class="editRegProducto">
<div class="logo"><img  src="../img/logo.png" ></div>
<form action = "modRegProducto.php" method="post" class="formUser">
 
        <label>id</label><br>
        <input type="texto" name="txtid" value="<?php echo $fila['idRegPro'] ?>" readonly class="noMD"><br>
        <label>codigo</label><br>
        <input type="texto" name="txtcodigo" value="<?php echo $fila['codigo'] ?>" required><br>
        <label>nombre</label><br>
        <input type="texto" name="txtnombre" value="<?php echo $fila['nombre'] ?>" required><br>
        <label>precio</label><br>
        <input type="number" name="txtprecio" step="any" value="<?php echo $fila['precio'] ?>" required ><br>
        <input type="submit" name="" value="Actualizar" class="boton">
        <a href="listaProductoRegistrado.php" class="regresar">Regresar</a>
    </form>
    <?php  } ?>
</div>
  
</body>
</html>