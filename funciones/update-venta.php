<?php
    include("conexionPablo.php");

    $idVenta= $_POST['cmbVenta'];
    $idCliente= $_POST['cmbCliente'];
    $fechaHoraVenta= $_POST['txtFechaHoraVenta'];
    $totalVenta= $_POST['txtTotalVenta'];
    $idVentaCalzado= $_POST['cmbVentaCalzado'];
    $idTalla= $_POST['cmbTalla'];
    $cantidad= $_POST['txtCantidad'];
    $precioVenta= $_POST['txtPrecioVenta'];

    $sentencia = "UPDATE venta SET 
        IdCliente = (SELECT IdCliente FROM cliente WHERE NombreCliente = '$idCliente'),
        FechaHoraVenta = '$fechaHoraVenta',
        TotalVenta = '$totalVenta',
        IdVentaCalzado = (SELECT IdVentaCalzado FROM ventacalzado WHERE PrecioVenta = '$idVentaCalzado'),
        IdTalla = (SELECT IdTalla FROM talla WHERE Numero = '$idTalla'),
        Cantidad = '$cantidad',
        PrecioVenta = '$precioVenta'
        WHERE Venta ='$idVenta';  
    ";
    
    $sentencia_talla = "UPDATE talla SET

    Stock = '$cantidad',
    Numero = '$numero'
    WHERE Codigo ='$codigo';  
";

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion,$sentencia_talla) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>