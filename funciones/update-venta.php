<?php
    include("conexionPablo.php");

    $idVenta= $_POST['cmbVenta'];
    $idCliente= $_POST['cmbCliente'];
    $fechaHoraVenta= $_POST['txtFechaHoraVenta'];
    $totalVenta= $_POST['txtTotalVenta'];

    $sentencia = "UPDATE venta SET 
        IdVenta = (SELECT IdVenta FROM venta WHERE TotalVenta = '$idVenta'),
        IdCliente = (SELECT IdCliente FROM cliente WHERE NombreCliente = '$idCliente'),
        FechaHoraVenta = '$fechaHoraVenta',
        TotalVenta = '$totalVenta',
        WHERE Venta ='$idVenta';  
    ";
    

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>