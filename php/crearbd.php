<?php

include_once "conexibd.php";

$sql = "CREATE DATABASE crdhotel"; //cambia según tarea 

if(mysqli_query($conn,$sql)) {
    echo "Base datos creada";
} else {
    echo"Error en la base de datos, no se creo..! ";
}



?>