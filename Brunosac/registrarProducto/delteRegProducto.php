<?php  
include('../conexion/db.php');

$id=$_GET['id'];

$sql= "DELETE FROM registrpProducto WHERE idRegPro='".$id."'";
mysqli_query($conexion,$sql);
header("location:listaProductoRegistrado.php");
?>