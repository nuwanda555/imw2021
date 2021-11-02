<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>PHP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style>
      .container {
         border: 4px solid orange;
         border-radius: 20px;
         margin: 40px;
         padding: 30px;
      }

      th {
        background-color: lightblue;
      }

  </style>

</head>


<script>
</script>



<body>
   <div class="container">
   <table class="table table-striped table-bordered">
        <tr><th>Codigo</th><th>Nombre</th><th>Ciudad</th><th></th></tr>
   
    <?php
        $servidor="cifpzonzamas.org";
        $usuario="institu3_neptuno";

        $password=file_get_contents("claves.txt");  //saco la clave de un fichero
        $bd="institu3_neptuno";   

    
        $mysqli = new mysqli($servidor,$usuario,$password,$bd);
        $mysqli->set_charset("utf8");

        if ($mysqli->connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }
        
        $sql="select  Codigo,Denominacion,Localidad from centros limit 50";

        $resultado= $mysqli->query($sql);

        while($registro = $resultado->fetch_object()){
            $borrar="<a href='/borrar_centro.php?codigo=$registro->Codigo'><img width=32px src='https://www.pngrepo.com/png/190063/512/trash.png'></a>";
            echo "<tr><td>$registro->Codigo</td><td>$registro->Denominacion</td><td>$registro->Localidad</td><td>$borrar</td></tr>";
        }    



   
    ?>
    
    
   </table>
   </div>

  
    
    
    

    
    

    
    

    
    
</body>
</html>