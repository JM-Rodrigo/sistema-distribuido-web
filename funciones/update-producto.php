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

    $sentencia = "UPDATE calzado SET 
        DescripcionCalzado = '$descripcionCalzado',
        ColorCalzado = '$colorCalzado',
        PrecioSalidaCalzado = '$precioSalidaCalzado',
        IdMaterial = (SELECT IdMaterial FROM material WHERE NombreMaterial = '$idMaterial'),
        IdSeccion = (SELECT IdSeccion FROM seccion WHERE NombreSeccion = '$idSeccion'),
        IdCategoria = (SELECT IdCategoria FROM categoria WHERE NombreCategoria = '$idCategoria'),
        IdMarca = (SELECT IdMarca FROM marca WHERE NombreMarca = '$idMarca')
        WHERE Codigo ='$codigo';  
    ";
    
    $sentencia_talla = "UPDATE talla SET

    Stock = '$cantidad',
    Numero = '$numero'
    WHERE Codigo ='$codigo';  
";

    if(mysqli_query($conexion,$sentencia) && mysqli_query($conexion,$sentencia_talla) ){
        header("Location: ../producto.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>