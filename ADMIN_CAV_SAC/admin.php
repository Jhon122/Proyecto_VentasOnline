<?php 
include("../BD/conexion.php");
require 'admin/config.php';
require 'functions.php';

session_start();
 if(!isset($_SESSION['id_usuario'])){
	 header("Location: ingreso.php"); 
	print "Mejorar";
} 
$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios, NombreC FROM usuarios WHERE 
		idusuarios = '$iduser' AND status = '1' ";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc(); 



$conexion2 = conexion($bd_config);
$posts = obtener_post($blog_config['post_por_pagina'], $conexion2);

require 'views/admin_index.view.php';


?>