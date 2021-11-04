<?php
    include "librerias.php";
    include "conectar.php";
    $codigo=$_REQUEST["codigo"];

    $sql="select * from centros where codigo=$codigo";

    $resultado= $mysqli->query($sql);

    $centro = $resultado->fetch_object();   //esto me saca un registro

?>
<style>
      .container {
         border: 4px solid orange;
         border-radius: 20px;
         margin: 40px;
         padding: 30px;
      }

 
  </style>
<div class="container" >
    <h1>Editando un centro</h1>
    <form action="actualizar_centro.php" method="post">
    <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $centro->Codigo; ?>"  readonly>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre del centro:</label>
        <input type="text" class="form-control" id="denominacion" name="denominacion"  value="<?php echo $centro->Denominacion; ?>"
    </div>
    <div class="form-group">
        <label for="ciudad">Localidad:</label>
        <input type="text" class="form-control" id="localidad" name="localidad"  value="<?php echo $centro->Localidad; ?>"
    </div>
    <button type="submit" class="btn btn-primary mt-2   ">Guardar</button>
    </form>


</div>