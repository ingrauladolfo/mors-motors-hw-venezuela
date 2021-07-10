<?php 
require_once('../../backend/server/connection.php');
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mors Motors - Tabla de clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/clientes.css">
</head>
<body>
<div class="container">
  <br>
  <br>
  <div class="table-responsive">
    <table  class="table table-sm" border="2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Cédula</th>
            <th scope="col">Dirección</th>
            <th scope="col">Hora entrada</th>
            <th scope="col">Hora salida</th>
            <th scope="col" colspan="2">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $query = "SELECT * FROM clientes";
            $resultado = mysqli_query($con, $query);
            while($mostrar = mysqli_fetch_assoc($resultado)){
          ?>
          <tr>
            <th scope="row"><?php echo $mostrar['id']?></th>
            <td><?php echo $mostrar['nombres']?></td>
            <td><?php echo $mostrar['apellidos']?></td>
            <td><?php echo $mostrar['cedula']?></td>
            <td><?php echo $mostrar['direccion']?></td>
            <td><?php echo $mostrar['hora_entrada']?></td>
            <td><?php echo $mostrar['hora_salida']?></td>
            <td><a href="../../backend/clientes/insertar_nuevo_cliente.php" class="btn btn-primary">Agregar</a></td>
            <td><a href="../../../index.html" class="btn btn-primary">Regresar</a></td>
          </tr>
          <?php
            } 
          ?>
        </tbody>
      </table>
      <a href="../../backend/clientes/nuevo-cliente.php" class="btn btn-primary">Agregar</a>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>