<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <br>

    <center>
        <h1>Listado de productos</h1>
    </center>
    <br>
    <div class="container">

    <a href="#" class="btn btn-dark">Agregar productos</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

               <?php
               include "config/conexion.php";

               $Sql = "SELECT * FROM productos";
               $resultado =  $conexion->query($Sql);

               while ($Fila = $resultado->fetch_assoc()){ ?>
            <tr>
            <th scope="row"> <?php echo $Fila ['Id'] ?> </th>
            <td> <?php echo $Fila ['Nombre'] ?> </td>
            <td> <?php echo $Fila [ 'Descripcion'] ?> </td>
            <td> <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode ($Fila['Imagen']) ?>" alt=""> </td>
            <td> 
                
             <a href="#" class="btn-warning">Editar</a> 
             <a href="#" class="btn-warning">Eliminar</a>   
        
            </td>

            </tr>
        </tbody>
        <?php } ?>
        </table>
    </div>


  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>