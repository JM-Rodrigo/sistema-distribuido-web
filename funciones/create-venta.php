<?php
    include("conexionPablo.php");

    $codigo= $_POST['txtCodigo'];
    $idVenta= $_POST['cmbVenta'];
    $idCliente= $_POST['cmbCliente'];
    $fechaHoraVenta= $_POST['txtFechaVenta'];
    $totalVenta= $_POST['txtTotalVenta'];
    $cantidad= $_POST['txtCantidad'];
    $numero= $_POST['txtNumero'];
    
    

    $sentencia = "INSERT INTO venta VALUES(
        '$idVenta',
        '$idCliente',
        '$fechaHoraVenta',
        $totalVenta
        )";
    
    $sentencia_talla = "INSERT INTO talla VALUES(
        DEFAULT,
        '$codigo',
        $cantidad,
        '$numero'
        )";

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion,$sentencia_talla) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>