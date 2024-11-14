<?php
include 'conexion.php';

$mostrar = "SELECT * FROM boletas";
$resultado_bd = mysqli_query($conexion, $mostrar);
