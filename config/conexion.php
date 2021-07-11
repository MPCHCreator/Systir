<?php
function getConexion(){
    
    $servidor="localhost:3306";
    $usuario="root";
    $psw="";
    $nom_db="service_db";
    
    
    $conn= mysqli_connect($servidor,$usuario,$psw,$nom_db);

    if(!$conn){
     die("No se establecio la conexion".mysqli_connect.error());
    
    }else{
        echo '';
    }
    mysqli_query($conn,"SET NAMES utf8");
    return $conn;  
}
function consultaServicio($conn, $servicio){
    
    $consulta ="SELECT TotalUsuarios FROM ".$servicio.";";


    $resultado= mysqli_query($conn, $consulta);
    $renglon= mysqli_fetch_assoc($resultado);
    $uT = $renglon['TotalUsuarios'];
          
    if(mysqli_num_rows($resultado)>0){
        return $uT;     
    }else{
        return null;
    }
}
?>

