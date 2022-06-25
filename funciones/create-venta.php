<?php
    include("conexionPablo.php");

    $idVenta= $_POST['cmbVenta'];
    $idCliente= $_POST['cmbCliente'];
    $fechaHoraVenta= $_POST['txtFechaVenta'];
    $totalVenta= $_POST['txtTotalVenta'];
    
    

    $sentencia = "INSERT INTO venta VALUES(
        '$idVenta',
        '$idCliente',
        '$fechaHoraVenta',
        $totalVenta
        )";

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>