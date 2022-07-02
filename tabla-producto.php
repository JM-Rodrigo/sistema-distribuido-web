    <div class="col-lg-8 col-xl-7">
        <div class="form-floating mb-3" >
            <font SIZE=4>
                <table class="table" style="color: rgb(0, 0, 0); font-size: 110%;">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Color</th>
                            <th scope="col">Sctok</th>
                            <th scope="col">Talla</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Marca</th>
                            <th scope="col"></th>                                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("funciones/conexionRodrigo.php");

                                 $sentencia = "SELECT
                                    calzado.Codigo, 
                                    calzado.DescripcionCalzado, 
                                    calzado.ColorCalzado, 
                                    calzado.Stock, 
                                    calzado.Talla, 
                                    calzado.PrecioCalzado, 
                                    marca.NombreMarca
                                    FROM
                                    calzado
                                    INNER JOIN
                                    marca
                                    ON 
                                    calzado.IdMarca = marca.IdMarca";

                                $resultado = mysqli_query($conexion, $sentencia);

                                while($registro = mysqli_fetch_assoc($resultado)){
                                    echo "
                                        <tr>
                                            <td>".$registro["Codigo"]."</td>
                                            <td>".$registro["DescripcionCalzado"]."</td>
                                            <td>".$registro["ColorCalzado"]."</td>
                                            <td>".$registro["Talla"]."</td>
                                            <td>".$registro["Stock"]."</td>
                                            <td>".$registro["PrecioCalzado"]."</td>
                                            <td>".$registro["NombreMarca"]."</td>
                                            <td><a href='actualizar-producto.php?UpdateCodigo=".$registro["Codigo"]."' class='btn btn-success btn-raised btn-xs'><i class='fa-solid fa-file-pen'></i></a></td>
                                        </tr>";
                                }
                                 mysqli_close($conexion);
                    ?>
                    </tbody>
                </table>
            </font>
        </div>                                
    </div>                                   
