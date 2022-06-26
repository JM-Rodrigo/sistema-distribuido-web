<?php
    include("conexionPablo.php");

    $codigo= $_POST['txtCodigo'];
    $fechaHoraVenta= $_POST['txtFechaVenta'];
    $cantidad= $_POST['txtCantidad'];
    $precio= $_POST['txtPrecio'];

    $sentencia = "UPDATE venta SET 
        FechaVenta = '$fechaHoraVenta',
        Cantidad = '$cantidad',
        Precio = '$precio'
        WHERE Codigo ='$codigo'; 
    ";
    

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>