<?php
    include("conexion.php");


    $Codigo= $_POST['txtCodigo'];
    $DescripcionCalzado= $_POST['txtDescripcion'];
    $ColorCalzado= $_POST['txtColor'];
    $PrecioSalidaCalzado= $_POST['txtPrecio'];
    $IdMaterial= $_POST['cmbMaterial'];
    $IdMarca= $_POST['cmbMarca'];
    $IdCategoria= $_POST['cmbCategoria'];
    $IdSeccion= $_POST['cmbSeccion'];
    


    $sentencia = "INSERT INTO calzado VALUES(
        '$Codigo',
        '$DescripcionCalzado',
        '$ColorCalzado',
        $PrecioSalidaCalzado,
        $IdMaterial,
        $IdSeccion,
        $IdCategoria,
        $IdMarca
        )";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../producto.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>