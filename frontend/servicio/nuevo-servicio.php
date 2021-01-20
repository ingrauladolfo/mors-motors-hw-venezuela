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
    <form action="../../backend/servicio/insertar_nuevo_servicio.php" method="post" class="form-body">
      <center>
      <h1><p class="text-center" style="color:#00000;">Zona de registro de servicio</p></h1>
      <div class="form-row align-items-center">
        <div class="row-auto">
          <div class="col-auto text-center">
            <label for="vehiculo" style="color:#00000; font-size:25px;">Vehículo: </label>
            <input type="text" name="vehiculo" id="vehiculo" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Vehículo" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="marca" style="color:#00000; font-size:25px;">Marca: </label>
            <input type="text" name="marca" id="marca" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" maxlength="100" placeholder="Marca" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="placa" style="color:#00000; font-size:25px;">Placa: </label>
            <input type="text" name="placa" id="placa" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" placeholder="Placa" class="form-control-number mb-2" required> 
          </div>
          <div class="col-auto text-center">
          <label for="color" style="color:#00000; font-size: 25px;">Color: </label>
            <input type="text" name="color" id="color" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" placeholder="Color" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="descripcion" style="color:#00000; font-size:25px;">Descripción: </label>
            <input type="text" name="descripcion" id="descripcion" style="background-color: #000000; border-color: #000000; color:#ffffff; font-size:25px;" placeholder="Descripción" class="form-control-text mb-2" required>
          </div>
          <div class="col-auto text-center">
            <label for="exampleFormControlSelect2" style="color:#00000; font-size: 25px;">Condición: </label>
            <select class="form-control mb-2" name="condicion" id="condicion" style="background-color: #000000; color: #ffffff; border-color: #000000; font-size: 25px;">
                <option >Seleccione el condición del servicio</option>  
                <option value="Servicio terminado">Servicio terminado</option>  
                <option value="En reparacion">En reparación</option>
            </select>
          </div>
          <div class="col-auto col-sm-6 offset-sm-6">
            <button type="submit" name="save_servicio" id="save_servicio" class="mb-2 btn btn-primary"> Guardar</button>
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