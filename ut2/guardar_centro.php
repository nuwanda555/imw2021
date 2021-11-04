<?php
    include "conectar.php";

    $codigo=$_REQUEST["codigo"];
    $nombre=$_REQUEST["nombre"];
    $localidad=$_REQUEST["localidad"];

    $sql="insert into centros (Codigo,Denominacion,Localidad) values ($codigo,'$nombre','$localidad')";
    $resultado= $mysqli->query($sql);
    header('Location: centros.php');
?>
?>
 