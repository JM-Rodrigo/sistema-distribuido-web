<?php
    include("conexionJonathan.php");

    //$idCompra= $_POST['cmbCodigo'];
    $Codigo = $_POST['cmbCodigoCompra'];
    $CantidadCompra= $_POST['txtCantidadCompra'];
    $FechaHoraCompra= $_POST['txtFechaCompra'];
    $PrecioCompra= $_POST['txtPrecioCompra'];
    $proveedor = $_POST['txtProveedor'];

    $sentencia2 = "UPDATE calzado SET Stock = Stock + $CantidadCompra WHERE Codigo = '$Codigo'";
    
    if(mysqli_query($conexion,$sentencia2)){
        $sentencia = "INSERT INTO compra VALUES(
            DEFAULT,
            '$Codigo',
            '$CantidadCompra',
            '$FechaHoraCompra',
            '$PrecioCompra',
            '$proveedor'                                                   
            )";
    
        if(mysqli_query($conexion,$sentencia)){
            header("Location: ../compra.php");
        }else{
            echo "error".mysqli_connect_error();
        }
    }else{
        echo "error".mysqli_connect_error();
    }

    
    
    mysqli_close($conexion);

?>