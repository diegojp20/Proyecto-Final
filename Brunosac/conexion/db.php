
<?php

$conexion = mysqli_connect("localhost", "root", "", "brunosac");

if (mysqli_connect_errno()) {

    exit();
}

if (mysqli_ping($conexion)) {
} else {
}

?>