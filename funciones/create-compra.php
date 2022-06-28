<?php
    include("conexionJonathan.php");

    $idCompra= $_POST['cmbCodigo'];
    $codigo = $_POST['txtCodigoCompra'];
    $catidadCompra= $_POST['txtCantidadCompra'];
    $fechaCompra= $_POST['txtFechaCompra'];
    $precioCompra= $_POST['txtPrecioCompra'];
    
    $sentencia = "INSERT INTO compra VALUES(
        DEFAULT,
        '$codigo',
        '$catidadCompra',
        '$fechaCompra',
        '$precioCompra',
        '$idProveedor'
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../compra.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>