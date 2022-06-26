<?php
    include("conexionPablo.php");

    $idVenta= $_POST['cmbCodigo'];
    $fechaVenta= $_POST['txtFechaVenta'];
    $catidadVenta= $_POST['txtCantidad'];
    $precioVenta= $_POST['txtPrecio'];
    
    $sentencia = "INSERT INTO ventacalzado VALUES(
        DEFAULT,
        '$idVenta',
        '$fechaVenta',
        $catidadVenta,
        '$precioVenta'
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>