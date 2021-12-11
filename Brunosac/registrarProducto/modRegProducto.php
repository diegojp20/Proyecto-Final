<?php 

include('../conexion/db.php');
$id=$_POST['txtid'];


$codigo=$_POST['txtcodigo'];
$nombre=$_POST['txtnombre'];
$precio=$_POST['txtprecio'];
$stock=0;


if($codigo !=null || $nombre !=null){
    
$sql= " UPDATE registrpProducto SET codigo='".$codigo."',nombre='".$nombre."',precio='".$precio."' WHERE idRegPro='".$id."'";
mysqli_query($conexion,$sql);

$sql= " UPDATE inventario SET codigo='".$codigo."',nombre='".$nombre."',precio='".$precio."' WHERE idInventario='".$id."'";
mysqli_query($conexion,$sql);




if($codigo=1){
   header("location:listaProductoRegistrado.php");
  };
};

?>


