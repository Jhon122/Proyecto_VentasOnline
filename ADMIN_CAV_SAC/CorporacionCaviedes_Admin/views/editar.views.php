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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Modificar Post</h1>
                                    </div>
                                    <form class="formulario" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">                                     
                                        <input class="form-control form-control-user" type="hidden" value="<?php echo $post['id_tipo_anuncio']; ?>" name="id">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="direccion" value="<?php echo $post['direccion']; ?>">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="distrito" value="<?php echo $post['distrito']; ?>">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="departamento" value="<?php echo $post['departamento']; ?>">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="costo" value="<?php echo $post['costo']; ?>">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="metros" value="<?php echo $post['metros']; ?>">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="numCuartos" value="<?php echo $post['numCuartos']; ?>">
                                        <br>
                                        <input class="form-control form-control-user" type="text" name="numBathroom" value="<?php echo $post['numBathroom']; ?>">
                                        <br>

                                        <textarea class="form-control" name="descripcion"><?php echo $post['descripcion']; ?></textarea>
                                        <br>
                                        <input class="form-control-file" type="file" name="thumb">
                                        <br>
                                        <input class="form-control-file" type="hidden" name="thumb-guardada" value="<?php echo $post['thumb']; ?>">
                                        <br>
                                        <input class="btn btn-primary btn-user btn-block" type="submit" value="Modificar Articulo">
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>


