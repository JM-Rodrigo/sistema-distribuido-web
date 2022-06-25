<?php
    include("conexion.php");


    $codigo= $_POST['txtCodigo'];
    $descripcionCalzado= $_POST['txtDescripcion'];
    $colorCalzado= $_POST['txtColor'];
    $precioSalidaCalzado= $_POST['txtPrecio'];
    $idMaterial= $_POST['cmbMaterial'];
    $idMarca= $_POST['cmbMarca'];
    $idCategoria= $_POST['cmbCategoria'];
    $idSeccion= $_POST['cmbSeccion'];
    $cantidad= $_POST['txtCantidad'];
    $numero= $_POST['txtNumero'];

    $sentencia = "INSERT INTO calzado VALUES(
        '$codigo',
        '$descripcionCalzado',
        '$colorCalzado',
        $precioSalidaCalzado,
        $idMaterial,
        $idSeccion,
        $idCategoria,
        $idMarca
        )";
    
    $sentencia_talla = "INSERT INTO talla VALUES(
        DEFAULT,
        '$codigo',
        $cantidad,
        '$numero'
        )";

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion,$sentencia_talla) ){
        header("Location: ../producto.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>