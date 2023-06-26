<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "crdhotel";
/*$baseDeDatos = "crdhotel";*/


$conn = mysqli_connect($servidor, $usuario, $clave, $bd);

if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// echo "Conexión exitosa a la base de datos";

?>