<?php 

include('../conexion/db.php');
$id=$_POST['txtidEntProd'];
$dater=$_POST['txtdate'];
$idRegPro=$_POST['txtidRegPro'];
$desc=$_POST['txtdesc'];
$cant=$_POST['txtcant'];
$idProve=$_POST['txtidProve'];
$dig=$_POST['txtdig'];


echo $id."<br>";
echo $dater."<br>";
echo $idRegPro."<br>";
echo $desc."<br>";
echo $cant."<br>";
echo $idProve."<br>";
echo $dig."<br>";

if($id !=null || $dater !=null || $idRegPro !=null || $desc !=null || $cant !=null || $idProve !=null || $dig !=null){
    
$sql= " UPDATE entradaProducto SET fecha='".$dater."',idRegPro='".$idRegPro."',descripcion='".$desc."',cantidad='".$cant."',idProveedor='".$idProve."',numeroFactura='".$dig."' WHERE idEntProd='".$id."'";
mysqli_query($conexion,$sql);

if($id=1){
  //header("location:listaProductos.php");
  };
};





?>


