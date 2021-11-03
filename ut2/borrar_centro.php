<?php
    include "conectar.php";

    $codigo=$_GET["codigo"];
    $sql="delete from centros where codigo=$codigo";
    $resultado= $mysqli->query($sql);

    header('Location: centros.php');
?>
 

  
    
    
    

    
    

    
    

    
    
</body>
</html>