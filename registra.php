<?php

include_once('config/conexion.php');
$conn = getConexion();
session_start();

var_dump($_POST['nuevo_usuario']);

if (isset($_POST['nuevo_usuario'])) {
    //usuarios
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];

    $insercion_u = "INSERT into usuario(nombre,apellido,correo,contraseña,telefono)" .
        " values('$nombre','$apellido','$email','$password','$telefono')";

    mysqli_query($conn, $insercion_u);

    $consulta = "SELECT id_usuario" .
        " FROM usuario" .
        " WHERE correo = '$email'" .
        " AND contraseña = '$password'";


    $resultado = mysqli_query($conn, $consulta);
    $renglon = mysqli_fetch_assoc($resultado);
    $id = $renglon['id_usuario'];


    if(mysqli_num_rows($resultado)>0){
        $_SESSION['usuario'] = $id;      
        header("Location: index.php");
    }else{
        header("Location: registrarse.php?status=not");
    }
}
