<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>PHP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

      td {
         padding-top: 0px !important;
         padding-bottom: 0px !important;
      }

  </style>

 <?php
    include "librerias.php";
?>
</head>


<script>
</script>



<body>
   <div class="container">
   <a class="btn btn-success mb-2" href="insertar_centro.php">Insertar centro</a>
   <table id="tabla" class="table table-striped table-bordered">
      <thead>
<<<<<<< HEAD
        <tr><th>Codigo</th><th>Nombre</th><th>Ciudad</th><th></th><th></th></tr>
=======
        <tr><th>Codigo</th><th>Nombre</th><th>Ciudad</th><th></th></tr>
>>>>>>> 805f74923bba50b41a6db7bb2ec1b8755a15b76f
      </thead>
    <?php
        include "conectar.php";
        
        $sql="select  Codigo,Denominacion,Localidad from centros";
        $resultado= $mysqli->query($sql);

        echo "<tbody>";
        while($registro = $resultado->fetch_object()){
            $borrar="<a class='btn_borrar' href='/borrar_centro.php?codigo=$registro->Codigo'><img width=32px src='https://www.pngrepo.com/png/190063/512/trash.png'></a>";
<<<<<<< HEAD
            $editar="<a class='btn_editar' href='/editar_centro.php?codigo=$registro->Codigo'><img width=32px src='https://d1nhio0ox7pgb.cloudfront.net/_img/o_collection_png/green_dark_grey/512x512/plain/edit.png'></a>";
            echo "<tr data-codigo='$registro->Codigo'><td>$registro->Codigo</td><td>$registro->Denominacion</td><td>$registro->Localidad</td><td>$borrar</td><td>$editar</td></tr>\n";
=======
            echo "<tr data-codigo='$registro->Codigo'><td>$registro->Codigo</td><td>$registro->Denominacion</td><td>$registro->Localidad</td><td>$borrar</td></tr>\n";
>>>>>>> 805f74923bba50b41a6db7bb2ec1b8755a15b76f
        }
        echo "</tbody>";    

    ?>
    
    
   </table>
   </div>

  
    <script>
          $(document).ready(function(){

            $('#tabla').DataTable();

<<<<<<< HEAD
            $("#tabla").on("click",".btn_borrar", function(e){  //al hacer click sobre cualquier elemento de la clase btn_borrar
=======
            $(".btn_borrar").click(function(e){  //al hacer click sobre cualquier elemento de la clase btn_borrar
>>>>>>> 805f74923bba50b41a6db7bb2ec1b8755a15b76f
              const codigo=$(this).closest("tr").data("codigo");
                e.preventDefault();   //No hagas lo que ibas a hacer

                Swal.fire({
                  title: '??Estas seguro que quieres borrar este centro?',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Borrar',
                  cancelButtonText: 'Cancelar',
                }).then((result) => {
                  if (result.isConfirmed) {
                    Swal.fire(
                      'Borrado!',
                      'El centro se ha borrado correctamente',
                      'success'
                    )
                    setTimeout(function(){ 
                      window.location.href = "borrar_centro.php?codigo="+codigo; 
                    }, 1500);
                  }
                })
            });

          });

    </script>
    
    

    


    

    
    

    
    
</body>
</html>