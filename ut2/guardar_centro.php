<?php
    include "conectar.php";

    $codigo=$_REQUEST["codigo"];
    $nombre=$_REQUEST["nombre"];
<<<<<<< HEAD
    $localidad=$_REQUEST["localidad"];

    $sql="insert into centros (Codigo,Denominacion,Localidad) values ($codigo,'$nombre','$localidad')";
    $resultado= $mysqli->query($sql);
    header('Location: centros.php');
?>
?>
=======
    $ciudad=$_REQUEST["ciudad"];

    $sql="insert into centros (Codigo,Denominacion,Localidad) values ($codigo,'$nombre','$ciudad')";
    $resultado= $mysqli->query($sql);
    header('Location: centros.php');
?>
>>>>>>> 805f74923bba50b41a6db7bb2ec1b8755a15b76f
 