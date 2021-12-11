<?php


//select * from entradaProducto E LEFT OUTER JOIN registrpProducto R on E.idRegPro = R.idRegPro INNER JOIN proveedores P on E.idProveedor = P.idProveedor WHERE E.idRegPro=1


//SELECT * FROM `entradaproducto` WHERE fecha BETWEEN '2021-10-01 00:00:00' AND '2021-10-18 00:00:00' 

//select * from salidas S LEFT OUTER JOIN registrpProducto R on S.idRegPro = R.idRegPro INNER JOIN cliente C on S.idCliente = C.idCliente WHERE S.idRegPro=14


//SELECT * FROM `salidas` WHERE fecha BETWEEN '2021-10-01 00:00:00' AND '2021-10-18 00:00:00' 
include('../conexion/db.php');

$incio = $_POST['fechaEntrada'];
$fin = $_POST['fechaSalida'];


//CONSULTAR
$sql = "select * from entradaProducto E LEFT OUTER JOIN registrpProducto R on E.idRegPro = R.idRegPro INNER JOIN proveedores P on E.idProveedor = P.idProveedor WHERE fecha BETWEEN '" . $incio . " ' AND '" . $fin . "  '" . "ORDER BY E.idEntProd ASC";
$resultados = mysqli_query($conexion, $sql);
echo "<div class='FechaIngreso'>";
echo "<section class='post'>Entrada productos</section>";
echo "<div class='title'>Fecha</div>" . "<div class='title'>Producto</div>" . "<div class='title'>Cantidad</div>";
while ($consulta = mysqli_fetch_array($resultados)) {
    echo "<div>" . $consulta['fecha'] . "</div>" . "<div class='proctud'>" . $consulta['nombre'] . "</div>" . "<div class='canti'>" . $consulta['cantidad'] . "</div>";
}
echo "</div>";

$sql2 = "select * from salidas S LEFT OUTER JOIN registrpProducto R on S.idRegPro = R.idRegPro INNER JOIN cliente C on S.idCliente = C.idCliente WHERE fecha BETWEEN '" . $incio . " ' AND '" . $fin . " ' " . "ORDER BY S.idSalida ASC";
$resultados2 = mysqli_query($conexion, $sql2);


echo "<div class='FechaSalida'>";
echo "<section class='post'>Salida productos</section>";
echo "<div class='title'>Fecha</div>" . "<div class='title'>Producto</div>" . "<div class='title'>Cantidad</div>";
while ($consulta2 = mysqli_fetch_array($resultados2)) {
    echo "<div>" . $consulta2['fecha'] . "</div>" . "<div class='proctud'>" . $consulta2['nombre'] . "</div>" . "<div class='canti'>" . $consulta2['cantidad'] . "</div>";
}
echo "</div>";
