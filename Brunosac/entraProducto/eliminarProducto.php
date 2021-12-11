<?php  
include('../conexion/db.php');

$id=$_GET['id'];

$sql= "DELETE FROM productoEntrada WHERE idEntProd='".$id."'";
mysqli_query($conexion,$sql);
header("location:listaProductos.php");
?>