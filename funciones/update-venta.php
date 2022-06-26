<?php
     include("conexionPablo.php");

     $idVenta= $_POST['cmbCodigo'];
     $fechaVenta= $_POST['txtFechaVenta'];
     $catidadVenta= $_POST['txtCantidad'];
     $precioVenta= $_POST['txtPrecio'];

    $sentencia = "UPDATE venta SET 
        FechaVenta = '$fechaVenta',
        Cantidad = '$cantidadVenta',
        Precio = '$precioVenta'
        WHERE Codigo ='$idVenta'; 
    ";
    

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>