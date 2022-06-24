<?php
    include("conexion.php");


    $Codigo= $_GET['DeleteProducto'];
   

    $sentencia = "DELETE FROM calzado WHERE Codigo = '$Codigo'";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../producto.php");
    }else{
        echo "error".mysqli_connect_error();
    }
    
    mysqli_close($conexion);

?>