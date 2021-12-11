<?php 

include('../conexion/db.php');
$codigo=$_POST['txtcodigo'];
$nombre=$_POST['txtnombre'];
$precio=$_POST['txtprecio'];
$stock=0;

echo $precio;


if($codigo !=null || $nombre !=null || $precio !=null){
    echo "ok";
$sql="INSERT INTO registrpProducto(codigo,nombre,precio)VALUES('".$codigo."','".$nombre."','".$precio."')";
mysqli_query($conexion,$sql);


$sqlIv="INSERT INTO inventario(codigo,nombre,precio,stock)VALUES('".$codigo."','".$nombre."','".$precio."','".$stock."')";
mysqli_query($conexion,$sqlIv);

if($codigo=1){
    header("location:listaProductoRegistrado.php");
  };
};

?>