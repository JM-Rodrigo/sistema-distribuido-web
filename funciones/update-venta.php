<?php
     include("conexionPablo.php");

     $codigo= $_POST['cmbCodigo'];
     $fechaVenta= $_POST['txtFechaVenta'];
     $catidad= $_POST['txtCantidad'];
     $precioVenta= $_POST['txtPrecio'];

    $sentencia = "UPDATE venta SET 
        FechaVenta = '$fechaVenta',
        Cantidad = '$cantidad',
        Precio = '$precioVenta'
        WHERE Codigo ='$codigo'; 
    ";
    

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>