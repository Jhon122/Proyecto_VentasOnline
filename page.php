<?php 
include("BD/conexion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
	header("Location: ingreso.php");
}
$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios, NombreC FROM usuarios WHERE 
		idusuarios = '$iduser' AND status = '0' ";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<span>
		<h1>Bievenido Usuario Normal</h1>
	<?php echo utf8_decode($row['NombreC']); ?>
	</span>
	<a href="salir.php">
		SALIR
	</a>
</body>
</html>