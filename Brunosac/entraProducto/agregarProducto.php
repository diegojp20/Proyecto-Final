<?php  
include('../conexion/db.php');

$sql_P="select * from proveedores";
$resl_P=mysqli_query($conexion,$sql_P);

$sql_R="select * from registrpProducto";
$resl_R=mysqli_query($conexion,$sql_R);



//lista
// UPDATE `inventario` SET `stock` = '90' WHERE `inventario`.`codigo` = "A01"

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
<div class="agregarProducto">
  

    <div class="logo"><img  src="../img/logo.png" ></div>
    <form action = "nuevoProducto.php" method="post" class="formUser">
        <label>Provedor</label><br>
        <select name="txtidProve" class="option" required>
        <?php while($mostrar=mysqli_fetch_array($resl_P)){
          ?>
            <option value=<?php echo $mostrar['idProveedor']?>><?php echo $mostrar['razonSocial']?></option>
            <?php
          }
?>
        </select><br>
        <label>fecha</label><br>
        <input type="text" name="txtdate" value="<?php echo date("Y/m/d") ?>" class="noMD" readonly><br>
        <label>Producto</label>  <br>
        <select name="txtidRegPro" class="option" required>
        <?php while($mostrar=mysqli_fetch_array($resl_R)){
          ?>
            <option value=<?php echo $mostrar['idRegPro']?>><?php echo $mostrar['nombre']?></option>
            <?php
          }
?>
        </select>
        
        <a href="../registrarProducto/addRegProducto.php" class="nuevoReg">producto Nuevo</a><br>
        <label>descripcion</label><br>
        <input type="text" name="txtdesc" required><br>
        <label>cantidad</label><br>
        <input type="number" name="txtcant" min="1" max="40" required><br>
        <input type="submit" value="Agregar" class="boton">
        <a href="listaProductos.php" class="regresar">Regresar</a>
    </form>
    <div>
   
    </div>
    </div>
</body>
</html>



