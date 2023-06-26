<?php

include_once "conexibd.php";

$sql ="CREATE TABLE reserva (doc int (20), name varchar (30), email varchar (30) , tell int (20), fcen data (10) , fcsa data (10) , nuha int (10), nuad int (20), nuni int (20), des varchar (30), alm varchar (30), serha varchar (30),  tipa varchar (30) )"; //cambia según tarea 

if (mysqli_query($conn, $sql)) 
{
    echo " TABLA creada";
} else {
    echo" Error en la base de datos, no se creo..! ";
}