<?php
require_once("../server/connection.php");
if(isset($_POST['save_servicio'])){
    $vehiculo = $_POST['vehiculo'];
    $marca = $_POST['marca'];
    $placa = $_POST['placa'];
    $color = $_POST['color'];
    $descripcion = $_POST['descripcion'];
    $condicion = $_POST['condicion'];
    $query = "INSERT INTO servicio(vehiculo,marca,placa,color,descripcion,condicion) VALUES('$vehiculo','$marca', '$placa', '$color', '$descripcion', '$condicion')";
    $ejecut = mysqli_query($con, $query);
    if($ejecut == TRUE){
        echo '<script type="text/javascript">alert("Guardado","Guardado","success")</script>';
        echo("<script>window.location = 'index.php';</script>");  
    } 
    $con->close();
}



// require_once("../server/connection.php");
// if(isset($_POST['save_servicio'])){
//     $vehiculo = $_POST['vehiculo'];
//     $marca = $_POST['marca'];
//     $placa = $_POST['placa'];
//     $color = $_POST['color'];
//     $descripcion = $_POST['descripcion'];
//     $condicion = $_POST['condicion'];
//     $query = "INSERT INTO servicio(vehiculo, marca, placa, color, descipcion, condicion) VALUES('$vehiculo','$marca', '$placa','$color','$descripcion','$condicion')";
//     $ejecut = mysqli_query($con, $query);
//     print_r("$ejecut");
//     while($ejecut == TRUE){
//         echo '<script type="text/javascript">alert("Guardado")</script>';
//         echo("<script>window.location = 'index.php';</script>");  
//     }

// }

