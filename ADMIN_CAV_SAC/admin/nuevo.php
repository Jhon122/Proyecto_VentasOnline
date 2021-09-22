<?php session_start();

require 'config.php';
require '../functions.php';

 comprobarSesion(); 
$conexion2 = conexion($bd_config);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $direccion = limpiarDatos($_POST['direccion']);
    $distrito = limpiarDatos($_POST['distrito']);
    $departamento = limpiarDatos($_POST['departamento']);
    $costo = limpiarDatos($_POST['costo']);
    $metros = limpiarDatos($_POST['metros']);
    $numCuartos = limpiarDatos($_POST['numCuartos']);
    $numBathroom = limpiarDatos($_POST['numBathroom']);
    $descripcion = $_POST['descripcion'];
    $thumb = $_FILES['thumb']['tmp_name'];

    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
    // moviendo de la computadora al servidor
    move_uploaded_file($thumb, $archivo_subido);

    $statement = $conexion2->prepare(
        'INSERT INTO tipoanuncio( descripcion, costo, metros, numCuartos, numBathroom, direccion, distrito, departamento, thumb) 
        VALUES( :descripcion, :costo, :metros, :numCuartos, :numBathroom, :direccion, :distrito, :departamento, :thumb)'
    );

    $statement->execute(array(':descripcion' => $descripcion, ':costo' => $costo, ':metros' => $metros, ':numCuartos' => $numCuartos, ':numBathroom' => $numBathroom, ':direccion' => $direccion, ':distrito' => $distrito, ':departamento' => $departamento, ':thumb' => $_FILES['thumb']['name']));

    echo "<script>
                alert('Se creo el Post');
            </script>";

    
}
require '../views/nuevo.view.php';

?>

