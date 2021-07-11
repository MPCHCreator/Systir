<?php
    session_start();
    include_once ('config/conexion.php');

    $u=$_SESSION['usuario'];
    $conn= getConexion();

    if(isset($_POST['mantenimiento'])) {
        $consulta ="INSERT into usuario_servicio(id_usuario,id_servicio) values($u,1)";   

    }

    if(isset($_POST['redes'])) {
        $consulta ="INSERT into usuario_servicio(id_usuario,id_servicio) values($u,2)";   

    }

    if(isset($_POST['internet'])) {
        $consulta ="INSERT into usuario_servicio(id_usuario,id_servicio) values($u,3)";   

    }


    if (mysqli_query($conn, $consulta)) {
        header("Location: contratarServicio.php?contrato=ok");
    } else {
        header("Location: index.php?contrato=not");
    }
                   
?>