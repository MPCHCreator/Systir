<?php
include 'conexion.php';

$pdo = new Conexion();

//Insertar datos
if($_SERVER['REQUEST_METHOD']=='POST'){
    
	$sql="INSERT INTO usuario (nombre, apellido, correo, contraseña, telefono) VALUES (:nombre, :apellido, :correo, :contrasena, :telefono)";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':nombre',$_POST['nombre']);
	$stmt->bindValue(':apellido',$_POST['apellido']);
	$stmt->bindValue(':correo',$_POST['correo']);
	$stmt->bindValue(':contrasena',$_POST['contraseña']);
	$stmt->bindValue(':telefono',$_POST['telefono']);
	$stmt->execute();
	$idPost=$pdo->lastInsertId();
	
	header("Location: ../index.php?registro=ok");
	
	if($idPost){
		echo json_encode($idPost);
		echo "El registro se añadió correctamente"; 
		exit;
	}
}

//En caso de no ser ninguna de las peticicones anteriores
header("HTTP/1.1 400 Bad Request");
?>