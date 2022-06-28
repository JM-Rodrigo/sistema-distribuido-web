<?php
    include("conexion.php");

    $codigo= $_POST['cmbCodigo'];
    $fechaVenta= $_POST['txtFechaVenta'];
    $cantidad= $_POST['txtCantidad'];
    $precio= $_POST['txtPrecio'];

    

    if(mysqli_query($conexion,$sentencia) ){
        header("Location: ../venta.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>