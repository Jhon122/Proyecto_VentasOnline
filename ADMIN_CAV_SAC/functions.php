<?php
//  Conexion a la base de datos
function conexion($bd_config) {
    try{
        $conexion2 = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion2;
    }catch(PDOException $e){
        return false;
    }
}

// Limpiar los datos
function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

// Obtener post por pagina
function pagina_actual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtener_post($post_por_pagina, $conexion2){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia = $conexion2->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tipoanuncio LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}


// Limpiamos y casteamos el id
function id_articulo($id) {
    return (int)limpiarDatos($id);
}

// Obtener post por id
function obtener_post_por_id($conexion2, $id) {
    $resultado = $conexion2->query("SELECT * FROM tipoanuncio WHERE id_tipo_anuncio = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

// Obtener numero de paginas
function numero_paginas($post_por_pagina, $conexion2) {
    $total_post = $conexion2->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_paginas = ceil($total_post/$post_por_pagina);
    return $numero_paginas;
}


// Convierte una cadena de texto a una fecha
function fecha($fecha) {
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre','Noviembre', 'Diciembre'];

    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) - 1;
    $year = date('Y', $timestamp);

    $fecha = "$dia de " . $meses[$mes] . " del $year";
    return $fecha;
}

 // Comprobar Sesion
function comprobarSesion() {
    if(!isset($_SESSION['admin'])) {
        header('Location: index.php');
    }
} 

?>