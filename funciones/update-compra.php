<?php
    include("conexionJonathan.php");

    $idCompra= $_POST['cmbCodigo'];
    $fechaCompra= $_POST['txtFechaVenta'];
    $catidadCompra= $_POST['txtCantidad'];
    $precioCompra= $_POST['txtPrecio'];
    
    $sentencia = " UPDATE compra SET
        FechaVenta = '$fechaCompra',
        Cantidad = '$catidadCompra',
        Precio = '$precioCompra',
        WHERE Codigo = '$idCompra';
        ";

if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion) ){
    header("Location: ../compra.php");
}else{
    echo "error".mysqli_connect_error();
}

mysqli_close($conexion);