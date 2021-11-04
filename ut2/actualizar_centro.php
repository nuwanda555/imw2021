<?php
    include "conectar.php";

    $codigo=$_REQUEST["codigo"];
    $denominacion=$_REQUEST["denominacion"];
    $localidad=$_REQUEST["localidad"];

    $sql="update centros set Denominacion='$denominacion',Localidad='$localidad' where codigo=$codigo";


    $resultado= $mysqli->query($sql);
    header('Location: centros.php');
?>
 