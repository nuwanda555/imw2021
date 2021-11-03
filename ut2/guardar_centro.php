<?php
    include "conectar.php";

    $codigo=$_REQUEST["codigo"];
    $nombre=$_REQUEST["nombre"];
    $ciudad=$_REQUEST["ciudad"];

    $sql="insert into centros (Codigo,Denominacion,Localidad) values ($codigo,'$nombre','$ciudad')";
    $resultado= $mysqli->query($sql);
    header('Location: centros.php');
?>
 