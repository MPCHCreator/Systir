<?php
    session_start();
    include_once ('config/conexion.php');

    $u=$_POST['correo'];
    $p=$_POST['contrasena'];
    $conn= getConexion();
    $consulta ="SELECT id_usuario".
               " FROM usuario as u". 
               " WHERE correo = '$u'". 
               " AND contraseña = '$p'";


    $resultado= mysqli_query($conn, $consulta);
    $renglon= mysqli_fetch_assoc($resultado);
    $id = $renglon['id_usuario'];
          
    if(mysqli_num_rows($resultado)>0){
        $_SESSION['usuario'] = $id;      
        header("Location: index.php");
    }else{
        $_SESSION['mensaje'] = "Usuario no valido";
        $_SESSION['msg_div'] = "danger";
        header("Location: iniciar_sesion.php");
    }
            
?>