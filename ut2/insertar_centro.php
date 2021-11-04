<?php
    include "librerias.php";


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
<h1>Insertando un centro</h1>
    <form action="actualizar_centro.php" method="post">
    <div class="form-group">
        <label for="codigo">Código:</label>
        <input type="text" class="form-control" id="codigo" name="codigo">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre del centro:</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="ciudad">Ciudad:</label>
        <input type="text" class="form-control" id="localidad" name="localidad">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>


</div>