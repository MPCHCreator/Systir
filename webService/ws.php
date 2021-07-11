<?php
include 'conexion.php';

$pdo = new Conexion();

//Listar | Consultar Registros
if($_SERVER['REQUEST_METHOD'] == 'GET'){
	if(isset($_GET['id'])){
		$sql = $pdo->prepare("SELECT * FROM usuario WHERE id=:id");
		$sql->bindValue(':id',$_GET['id']);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 Hay Datos");
		echo json_encode($sql->fetchAll());
		exit;
	}else{
		$sql = $pdo->prepare("SELECT * FROM usuario");
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 OK");
		echo json_encode($sql->fetchAll());
		exit;
	}
}

//Insertar datos
if($_SERVER['REQUEST_METHOD']=='POST'){
    
   	
   	/*
	echo $_POST['nombre'];
	echo "/";
    echo $_POST['apellido'];
    echo "/";
    echo $_POST['correo'];
    echo "/";
    echo $_POST['contraseña'];
    echo "/";
    echo $_POST['telefono'];
    */
    
	$sql="INSERT INTO usuario (nombre, apellido, correo, contraseña, telefono) VALUES (:nombre, :apellido, :correo, :contrasena, :telefono)";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':nombre',$_POST['nombre']);
	$stmt->bindValue(':apellido',$_POST['apellido']);
	$stmt->bindValue(':correo',$_POST['correo']);
	$stmt->bindValue(':contrasena',$_POST['contraseña']);
	$stmt->bindValue(':telefono',$_POST['telefono']);
	$stmt->execute();
	$idPost=$pdo->lastInsertId();
	
	//header("Location: /storage/ssd1/394/17170394/public_html/Bethany/index.php");
	//header("Location:".$_SERVER['HTTP_REFERER']);
	header("Location: ../index.php?registro=ok");
	
	if($idPost){
		 //header('Location:register_contact.php?estatus-inserta=ok');
		echo json_encode($idPost);
		echo "El registro se añadió correctamente"; 
		exit;
	}
	
	
	
}

//Actualizar un registro
if($_SERVER['REQUEST_METHOD']== 'PUT'){
	$sql="UPDATE usuario SET nombre=:nombre, telefono=:telefono, email=:email WHERE id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':nombre',$_GET['nombre']);
	$stmt->bindValue(':telefono',$_GET['telefono']);
	$stmt->bindValue(':email',$_GET['email']);
	$stmt->bindValue(':id',$_GET['id']);
	$stmt->execute();
	header("HTTP/1.1 200 OK");
	echo "Se actualizó correctamente";
	exit;
}

//Eliminar registro
if($_SERVER['REQUEST_METHOD']=='DELETE'){
	$sql="DELETE FROM usuario WHERE id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':id',$_GET['id']);
	$stmt->execute();
	header("HTTP/1.1. 200 OK");
	echo "Se eliminó correctamente";
	exit;
}

//En caso de no ser ninguna de las peticicones anteriores
header("HTTP/1.1 400 Bad Request");
?>