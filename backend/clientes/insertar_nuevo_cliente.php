<?php
require_once("../server/connection.php");
if(isset($_POST['save_cliente'])){
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $direccion = $_POST['direccion'];
    $horaEntrada = $_POST['entrada'];
    $horaSalida = $_POST['salida'];
    $query = "INSERT INTO clientes(nombres, apellidos, cedula, direccion, hora_entrada, hora_salida) VALUES('$nombres','$apellidos', '$cedula', '$direccion', '$horaEntrada', '$horaSalida')";
    $ejecut = mysqli_query($con, $query);
    if($ejecut == TRUE){
        echo '<script type="text/javascript">alert("Guardado","Cliente agregado satisfactoriamente","success")</script>';
        echo("<script>window.location = 'index.php';</script>");  
    } 
    $con->close();
}
