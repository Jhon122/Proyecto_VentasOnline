<?php session_start();
require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion2 = conexion($bd_config);

if(!$conexion2) {
    header('Location: ../error.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $direccion = limpiarDatos($_POST['direccion']);
    $distrito = limpiarDatos($_POST['distrito']);
    $departamento = limpiarDatos($_POST['departamento']);
    $costo = limpiarDatos($_POST['costo']);
    $metros = limpiarDatos($_POST['metros']);
    $numCuartos = limpiarDatos($_POST['numCuartos']);
    $numBathroom = limpiarDatos($_POST['numBathroom']);
    $descripcion = $_POST['descripcion'];
    $id = limpiarDatos($_POST['id']);
    $thumb_guardada = $_POST['thumb-guardada'];
    $thumb = $_FILES['thumb'];

    if(empty($thumb['name'])) {
        $thumb = $thumb_guardada;
    }else {
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion2->prepare('UPDATE tipoanuncio SET descripcion = :descripcion, costo = :costo, metros = :metros, numCuartos = :numCuartos, numBathroom = :numBathroom, direccion = :direccion, distrito = :distrito, departamento = :departamento, thumb = :thumb WHERE id_tipo_anuncio = :id');

    $statement->execute(array(':descripcion' => $descripcion, ':costo' => $costo, ':metros' => $metros, ':numCuartos' => $numCuartos, ':numBathroom' => $numBathroom, ':direccion' => $direccion, ':distrito' => $distrito, ':departamento' => $departamento, ':thumb' => $thumb, ':id' => $id));

    header('Location: ' . RUTA . '/admin');
}else {
    $id_articulo = id_articulo($_GET['id']);

    if(empty($id_articulo)) {
        header('Location: ' . RUTA . '/admin');
    }

    $post = obtener_post_por_id($conexion2, $id_articulo);

    if(!$post) {
        header('Location: ' . RUTA . '/admin');
    }

    $post = $post[0];

}


require '../views/editar.views.php';
?>