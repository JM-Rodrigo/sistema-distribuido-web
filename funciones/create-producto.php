<?php
    include("conexionRodrigo.php");


    $codigo= $_POST['txtCodigo'];
    $descripcionCalzado= $_POST['txtDescripcion'];
    $colorCalzado= $_POST['txtColor'];
    $cantidad= $_POST['txtCantidad'];
    $talla= $_POST['txtTalla'];
    $precioCalzado= $_POST['txtPrecio'];
    $idMarca= $_POST['cmbMarca'];
  

    $sentencia = "INSERT INTO calzado VALUES(
        '$codigo',
        '$descripcionCalzado',
        '$colorCalzado',
        $cantidad,
        '$talla',
        $precioCalzado,
        $idMarca
        )";
    
  

    if(mysqli_query($conexion,$sentencia) ){
        header("Location: ../producto.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>