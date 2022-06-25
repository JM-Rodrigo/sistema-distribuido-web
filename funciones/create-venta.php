<?php
    include("conexionPablo.php");


    $IdVenta= $_POST['cmbVenta'];
    $IdCliente= $_POST['cmbCliente'];
    $FechaHoraVenta= $_POST['txtFechaHoraVenta'];
    $TotalVenta= $_POST['txtTotalVenta'];
    $IdVentaCalzado= $_POST['cmbVentaCalzado'];
    $IdTalla= $_POST['cmbTalla'];
    $Cantidad= $_POST['txtCantidad'];
    $PrecioVenta= $_POST['txtPrecioVenta'];
    

    $sentencia = "INSERT INTO venta VALUES(
        '$idVenta',
        '$idCliente',
        '$FechaHoraVenta',
        $TotalVenta
        )";
    
    $sentencia_ventacalzado = "INSERT INTO ventacalzado VALUES(
        DEFAULT,
        '$idVentaCalzado',
        $IdTalla,
        $Cantidad,
        $PrecioVenta
        )";

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion,$sentencia_ventacalzado) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>