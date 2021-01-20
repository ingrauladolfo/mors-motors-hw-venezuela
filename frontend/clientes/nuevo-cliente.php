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
<div class="container text-center">
    <form action="../../backend/clientes/insertar_nuevo_cliente.php" method="post" class="form-body">
      <center>
      <h1><p class="text-center" style="color:#00000;">Zona de registro de clientes</p></h1>
      <div class="form-row align-items-center">
        <div class="row-auto">
          <div class="col-auto text-center">
            <label for="nombres" style="color:#00000; font-size:25px;">Nombre(s): </label>
            <input type="text" name="nombres" id="nombres" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Nombre(s)" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="apellidos" style="color:#00000; font-size:25px;">Apellidos: </label>
            <input type="text" name="apellidos" id="apellidos" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Apellidos" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="cedula" style="color:#00000; font-size:25px;">Cédula: </label>
            <input type="text" name="cedula" id="cedula" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" placeholder="Cédula de identidad" class="form-control-number mb-2" required> 
          </div>
          <div class="col-auto text-center">
          <label for="direccion" style="color:#00000; font-size: 25px;">Dirección: </label>
            <input type="text" name="direccion" id="direccion" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" placeholder="Dirección" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="entrada" style="color:#00000; font-size:25px;">Hora de entrada: </label>
            <input type="time" name="entrada" id="entrada" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control-number mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="salida" style="color:#00000; font-size:25px;">Hora de salida: </label>
            <input type="time" name="salida" id="salida" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" class="form-control-number mb-2" required> 
          </div>
          <div class="col-auto col-sm-6 offset-sm-6">
            <button type="submit" name="save_cliente" class="mb-2 btn btn-primary"> Guardar</button>
          </div>
        </div>
      </div>
      </center>
    </form>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>