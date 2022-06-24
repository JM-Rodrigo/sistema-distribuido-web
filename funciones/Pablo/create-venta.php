<?php
    include("conexionPablo.php");


    $IdVenta= $_POST['cmbVenta'];
    $IdCliente= $_POST['cmbCliente'];
    $FechaHoraVenta= $_POST['txtFechaHoraVenta'];
    $TotalVenta= $_POST['txtTotalVenta'];


    $sentencia = "INSERT INTO venta VALUES(
        '$IdVenta',
        '$IdCliente',
        '$FechaHoraVenta',
        $TotalVenta
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>