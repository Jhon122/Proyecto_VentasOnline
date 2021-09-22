<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Login</title>

        <!-- Custom fonts for this template-->
        <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="./css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">
        
        <div class="container mt-5">
            <div class="row justify-content-center pt-5">
                <div class="col-6">
                    <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top  w-100 ultimo" src="<?php echo RUTA; ?>/images/<?php echo $post['thumb']; ?>" alt="<?php echo $post['distrito']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="property-title"><a href="property-details.html"><?php echo $post['distrito']; ?></a></h2>
                            <p class="card-text"><?php echo nl2br($post['descripcion']); ?></p>
                            <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 
                                <?php echo $post['direccion']; ?>, <?php echo $post['departamento']; ?>
                            </span>
                            <strong class="property-price text-primary mb-3 d-block text-success">$  <?php echo $post['costo']; ?></strong>
                            <ul class="d-flex mb-3 mb-lg-0 list-unstyled">
                                <li class="mr-4">
                                    <span class="property-specs">Cuartos: </span>
                                    <span class="property-specs-number"><?php echo $post['numCuartos']; ?> <sup>+</sup></span>
                                    
                                </li>
                                <li class="mr-4">
                                    <span class="property-specs">Baños: </span>
                                    <span class="property-specs-number"><?php echo $post['numBathroom']; ?></span>
                                    
                                </li>
                                <li class="mr-4">
                                    <span class="property-specs">m²: </span>
                                    <span class="property-specs-number"><?php echo $post['metros']; ?></span>
                                    
                                </li>
                            </ul>
                            <br>
                            <div class="card-footer">
                                <small class="text-muted"><?php echo fecha($post['fecha_publicacion']); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                

        <!-- Bootstrap core JavaScript-->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="./js/sb-admin-2.min.js"></script>

    </body>

</html>

