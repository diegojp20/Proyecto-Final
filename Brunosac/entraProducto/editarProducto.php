<?php

include('../conexion/db.php');
$id=$_GET['id'];

$sql_edit="select * from entradaProducto E LEFT OUTER JOIN registrpProducto R on E.idRegPro = R.idRegPro
INNER JOIN proveedores P on E.idProveedor = P.idProveedor WHERE E.idEntProd='".$id."'";
$res_edit=mysqli_query($conexion,$sql_edit);
$valor;

?>

<?php while($mostrar=mysqli_fetch_array($res_edit)){
$valor_edit=$mostrar;
         }; ?>


<?php  

echo '<div id="numP" style="display: none;">'.$valor_edit['idProveedor'].'</div>';
echo '<div id="numS" style="display: none;">'.$valor_edit['idRegPro'].'</div>';

$sql_P="select * from proveedores";
$resl_P=mysqli_query($conexion,$sql_P);

$sql_R="select * from registrpProducto";
$resl_R=mysqli_query($conexion,$sql_R);



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
<div class="editarProducto">
<div class="logo"><img  src="../img/logo.png" ></div>
<form action = "modificarProducto.php" method="post" class="formUser">
<label>Provedor</label><br>
        <select name="txtidProve" class="option" id="idProveedor" required>
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
        <select name="txtidRegPro" class="option" id="RegPro" required>
        <?php while($mostrar=mysqli_fetch_array($resl_R)){
          ?>
            <option value=<?php echo $mostrar['idRegPro']?>><?php echo $mostrar['nombre']?></option>
            <?php
          }
?>
        </select><br>
        <label>descripcion</label><br>
        <input type="text" name="txtdesc" value="<?php echo $valor_edit['descripcion']; ?>" required><br>
        <label>cantidad</label><br>
        <input type="number" name="txtcant" min="1" max="10" value="<?php echo $valor_edit['cantidad']; ?>" required><br>
        <input type="submit" name="" value="Actualizar" class="boton">

        <input type="text" name="txtidEntProd" value="<?php echo $valor_edit['idEntProd'] ?>"  style="display: none;">
        <input type="text" name="txtdig" value="<?php echo $valor_edit['numeroFactura'] ?>"  style="display: none;">

        <a href="../entraProducto/listaProductos.php" class="regresar">Regresar</a>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
numP=$('#numP').text();
numS=$('#numS').text();

$("#idProveedor > option[value="+numP+"]").attr("selected",true);
$("#RegPro > option[value="+numS+"]").attr("selected",true);


</script>
</body>
</html>