<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Zapatería JARP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand" href="#page-top">Zapatería JARP</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="producto.php">Registro</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="compra.php">Compra</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="venta.php">Venta</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="registro">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Compra</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                                <form action="funciones/create-compra.php" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Name input-->
                                    <div class="form-group">
                                            <label class="control-label mt-4" style="color: rgb(0, 0, 0); font-size: 140%;">Código</label>
                                                <select class="form-select mt-4" style="color: rgb(0, 0, 0); font-size: 140%;" name="cmbCodigoCompra" id="codigo">
                                                    <option>---Seleccione---</option>
                                                    <?php
                                                        include("funciones/conexionJonathan.php");
                                                        $sentencia="SELECT * FROM calzado";
                                                        $resultado=mysqli_query($conexion,$sentencia);
                                                        while($material=mysqli_fetch_assoc($resultado)){
                                                        echo "
                                                        <option value='".$material['Codigo']."'>".$material["Codigo"]."</option>
                                                        ";
                                                        }
                                                    ?>
                                                </select>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="txtCantidadCompra" type="text"  minlength="1"  maxlength="50" placeholder="Rellena el campo" style="height: 7rem" data-sb-validations="required"></textarea>
                                        <label for="message" style="color: rgb(0, 0, 0);">Cantidad Compra</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Es necesario llenar esté campo</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                    <input class="form-control" name="txtFechaCompra" type="date" placeholder="Rellena el campo" data-sb-validations="required" />
                                        <label for="name" style="color: rgb(0, 0, 0);">Fecha</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Es necesario llenar esté campo</div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="txtPrecioCompra" type="text"  minlength="1"  maxlength="50" placeholder="Rellena el campo" style="height: 7rem" data-sb-validations="required"></textarea>
                                        <label for="message" style="color: rgb(0, 0, 0);">Precio Compra</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Es necesario llenar esté campo</div>
                                    </div>
                                    
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" name="txtProveedor" type="text"  minlength="1"  maxlength="50" placeholder="Rellena el campo" style="height: 7rem" data-sb-validations="required"></textarea>
                                        <label for="message" style="color: rgb(0, 0, 0);">Proveedor</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Es necesario llenar esté campo</div>
                                    </div>
                                    </div>
                                            <!-- Submit Button-->		  
										    <p class="text-center mt-4">
										    	<button href="#tabla" class="btn btn-primary btn-xl mt-3" style="color: rgb(0, 0, 0); font-size: 100%;"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
										    </p>
                                </form>
                            </div>
                        </div>
                        <section class="page-section" id="tabla">
                            <div class="container">
                                <!-- Contact Section Heading-->
                                <h5 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista de productos</h5>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Contact Section Form-->
                                <div class="row justify-content-center">
                                        <div class="col-lg-8 col-xl-7">
                                            <div class="form-floating mb-3">
                                            <font SIZE=4>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Código</th>
                                                            <th scope="col">Cantidad Compra</th>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">PrecioCompra</th>
                                                            <th scope="col">Proveedor</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                        include("funciones/conexionJonathan.php");

                                                            $sentencia = "SELECT
                                                            compra.IdCompra, 
                                                            compra.Codigo, 
                                                            compra.CantidadCompra, 
                                                            compra.FechaHoraCompra, 
                                                            compra.PrecioCompra, 
                                                            compra.NombreProveedor, 
                                                            calzado.Codigo, 
                                                            calzado.IdMarca
                                                        FROM
                                                            compra
                                                            INNER JOIN
                                                            calzado
                                                            ON 
                                                                compra.Codigo = calzado.Codigo" ;

                                                            $resultado = mysqli_query($conexion, $sentencia);

                                                            while($registro = mysqli_fetch_assoc($resultado)){
                                                                echo "
                                                                <tr>
                                                                    <td>".$registro["Codigo"]."</td>
                                                                    <td>".$registro["CantidadCompra"]."</td>
                                                                    <td>".$registro["FechaHoraCompra"]."</td>
                                                                    <td>".$registro["PrecioCompra"]."</td>
                                                                    <td>".$registro["NombreProveedor"]."</td>
                                                                    
                                                                    
                                                                </tr>";
                                                                /*<td><a href='actualizar-producto.php?UpdateCodigo=".$registro["Codigo"]."' class='btn btn-success btn-raised btn-xs'><i class='fa-solid fa-file-pen'></i></a></td>*/
                                                                /*<td><a href='funciones/delete-producto.php?DeleteProducto=".$registro["Codigo"]."'><button class='btn btn-danger btn-raised btn-xs' type='button'><i class='fa-solid fa-trash'></i></button></a></td> */
                                                            }
                                                                mysqli_close($conexion);
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </font>
                                            </div> 
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                </div>
            </div>
        </section>           
         <!-- Footer-->
         <footer class="footer text-center">
            <div class="container">
                <div class="row">
                     <!-- Footer Location-->
                     <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ubicación</h4>
                        <p class="lead mb-0">
                            Calle Hidalgo 201 Colonia Centro Jilotepec
                            <br />
                            A un costado de la iglesia 
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes Sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-pinterest"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-whatsapp"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contactanos</h4>
                        <p class="lead mb-0">
                            Tel:7122700464
                            <br />
                            Tel:5568879355 
                            <br />
                            Tel:5545258085
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Ven visitanos &copy; ZapateriaJARP@gmail.com</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
