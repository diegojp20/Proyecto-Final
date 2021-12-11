<?php 

include('../conexion/db.php');
$dater=$_POST['txtdate'];
$idRegPro=$_POST['txtidRegPro'];
$desc=$_POST['txtdesc'];
$cant=$_POST['txtcant'];
$idProve=$_POST['txtidProve'];
$dig="000000";
$rowcount=0;
$sql_n = "SELECT * FROM salidas";
if ($result=mysqli_query($conexion,$sql_n)) {
    $rowcount=mysqli_num_rows($result);
}
$numeroF=$dig.($rowcount+1);

echo $dater."<br>";
echo $idRegPro."<br>";
echo $desc."<br>";
echo $cant."<br>";
echo $idProve."<br>";
echo $numeroF."<br>";

// 

$sql_C = "select * from registrpProducto";
$resl_C = mysqli_query($conexion, $sql_C);

$canAc = 0;
$idInventario = 0;

echo '<br>';
$sql_EP = "select * from inventario";
$resl_EP = mysqli_query($conexion, $sql_EP);

while ($mostrar = mysqli_fetch_array($resl_EP)) {
  if ($idRegPro == $mostrar['idInventario']) {

    $idInventario = $mostrar['idInventario'];
    $canAc = $mostrar['stock']-$cant;
    echo "stock Actual : ".$mostrar['stock']."<br>";
    break;
  }
}



//


if($dater !=null || $idRegPro !=null || $desc !=null || $cant !=null || $idProve !=null || $numeroF !=null){
    
$sql="INSERT INTO salidas(fecha,idRegPro,descripcion,cantidad,idCliente,numeroFactura)VALUES('".$dater."','".$idRegPro."','".$desc."','".$cant."','".$idProve."','".$numeroF."')";
mysqli_query($conexion,$sql);

$sqlInv = "UPDATE inventario SET stock = '".$canAc."' WHERE inventario.idInventario = '".$idInventario."'";
mysqli_query($conexion,$sqlInv);

if($cant=1){
    header("location:listaSalidad.php");
  };
};


?>