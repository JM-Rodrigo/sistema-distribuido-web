<?php
    include("conexionPablo.php");

    $IdVenta= $_POST['cmbCodigo'];
    $FechaVenta= $_POST['txtFechaVenta'];
    $CatidadVenta= $_POST['txtCantidad'];
    $PrecioVenta= $_POST['txtPrecio']; 

    $servidor = "localhost";
    $usuario = "root";
    $password = "osito123";
    $db = "zapateria";

    $conexion1= mysqli_connect($servidor, $usuario, $password, $db)
    OR DIE("No se pudo conectar a la Base de Datos". mysqli_connect_error());

    $query = mysqli_query($conexion1,"SELECT Stock FROM calzado WHERE Codigo='".$IdVenta."' AND '".$CatidadVenta."'<Stock");
    $nr = mysqli_num_rows($query);

    if ($nr==1){

    $sentencia2 ="UPDATE calzado SET Stock=Stock-$CatidadVenta WHERE Codigo='$IdVenta'";

    if(mysqli_query($conexion,$sentencia2)){
        $sentencia = "INSERT INTO venta VALUES(
            DEFAULT,
            '$IdVenta',
            '$FechaVenta',
            $CatidadVenta,
            '$PrecioVenta'
            )";
    
        if(mysqli_query($conexion,$sentencia)){
            header("Location: ../venta.php");
        }else{
            echo "error".mysqli_connect_error();
        }
    }else{
        echo "error".mysqli_connect_error();
    }
}else{
    header("Location: ../producto.php");
}
    
    
    mysqli_close($conexion);

?>