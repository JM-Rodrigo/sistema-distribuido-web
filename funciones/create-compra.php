<?php
    include("conexionJonathan.php");

    $idCompra= $_POST['cmbCodigo'];
    $fechaCompra= $_POST['txtFechaVenta'];
    $catidadCompra= $_POST['txtCantidad'];
    $precioCompra= $_POST['txtPrecio'];
    
    $sentencia = "INSERT INTO compra VALUES(
        DEFAULT,
        '$idCompra',
        '$fechaCompra',
        $catidadCompra,
        '$precioCompra'
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../compra.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>