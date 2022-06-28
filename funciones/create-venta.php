<?php
    include("conexionPablo.php");

    $IdVenta= $_POST['cmbCodigo'];
    $FechaVenta= $_POST['txtFechaVenta'];
    $CatidadVenta= $_POST['txtCantidad'];
    $PrecioVenta= $_POST['txtPrecio'];
    
    $sentencia = "INSERT INTO ventacalzado VALUES(
        DEFAULT,
        '$IdVenta',
        '$FechaVenta',
        $CatidadVenta,
        '$PrecioVenta'
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>