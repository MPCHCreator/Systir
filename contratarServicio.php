<?php
session_start();
include_once ('config/conexion.php');
$conn= getConexion();
$s1 = consultaServicio($conn,"mantenimiento_computo");
$s2 = consultaServicio($conn,"redes");
$s3 = consultaServicio($conn,"internet");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <title>Contrata tu servicio</title>
    <style>
        .row {
            margin-top: 90px;
        }

        .container {
            border: 0px solid red;

        }

        .row {
            border: 0px solid blue;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <a href="index.php"><button class="btn btn-outline-success" type="button">Ir a inicio</button></a>
        </form>
    </nav>
    <div class="bg-light">
        <center>
            <h1>¡Contrata tu servicio!</h1>
        </center>
        <br>
        <center><img src="img/service.png" width="400" height="300"></center>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Mantenimiento de equipo de computo</h5>
                        <br>
                        <img class="card-img-top" src="img/i1.png" alt="Card image cap" width="250" height="250">
                        <p class="card-text">Reparación y Mantenimiento de dispositivos de computos, cambio de Sistema Operativos o de software. Cualquier servicio relacionando con problemas de Hardware o Software</p>
                        <br>
                        <button type="button" class="btn btn-primary">
                            Clientes <span class="badge badge-light"><?php echo $s1 ?></span>
                        </button>
                        <br>
                        <br>
                        <?php 
                        include_once ('config/conexion.php');
                        $conn= getConexion();
                        $query="SELECT * from usuario_servicio where id_usuario = ".$_SESSION['usuario']." AND id_servicio=1";
                        $resultado= mysqli_query($conn, $query);

                        if(mysqli_num_rows($resultado)>0){
                            $status = true;
                        }else{
                            $status= false;
                        }

                        if($status==true): echo'
                        <form action="" method="">
                        <button type="submit" name="mantenimiento" class="btn btn-secondary" disabled="true">Contratado</button>
                        </form>
                        '; else: echo '<form action="contrato.php" method="POST">
                        <button type="submit" name="mantenimiento" class="btn btn-success">Contratar</button>
                        </form>'; endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Infraestructura de redes</h5>
                        <br>
                        <img class="card-img-top" src="img/i2.jpg" alt="Card image cap" width="230" height="230" style="margin-bottom:25px">
                        <p class="card-text">Ofrecemos productos para la creación y mantenimiento de su propia red personal o empresarial. También contamos con difrenetes tipos de cableados o medios de comunicación para la red con la que trabajara y dispositivos intermediarios como, Routers,Switch ,etc.</p>
                        <br>
                        <button type="button" class="btn btn-primary">
                            Clientes <span class="badge badge-light"><?php echo $s2 ?></span>
                        </button>
                        <br>
                        <br>
                        <?php 
                        include_once ('config/conexion.php');
                        $conn= getConexion();
                        $query="SELECT * from usuario_servicio where id_usuario = ".$_SESSION['usuario']." AND id_servicio=2";
                        $resultado= mysqli_query($conn, $query);

                        if(mysqli_num_rows($resultado)>0){
                            $status = true;
                        }else{
                            $status= false;
                        }

                        if($status==true): echo'
                        <form action="" method="">
                        <button type="submit" name="redes" class="btn btn-secondary" disabled="true">Contratado</button>
                        </form>
                        '; else: echo '<form action="contrato.php" method="POST">
                        <button type="submit" name="redes" class="btn btn-success">Contratar</button>
                        </form>'; endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Internet</h5>
                        <br>
                        <img class="card-img-top" src="img/i3.jpg" alt="Card image cap" style="margin-bottom:25px">
                        <br>
                        <p class="card-text">Elige el mejor servicio de internet para tu empresa o negocio personal, puedes contratar ISP de Nivel 1. Nivel 2, y Nivel 3 elige el que más se acomode a tus necesidades</p>
                        <br>
                        <button type="button" class="btn btn-primary">
                            Clientes <span class="badge badge-light"><?php echo $s3 ?></span>
                        </button>
                        <br>
                        <br>
                        <?php 
                        include_once ('config/conexion.php');
                        $conn= getConexion();
                        $query="SELECT * from usuario_servicio where id_usuario = ".$_SESSION['usuario']." AND id_servicio=3";
                        $resultado= mysqli_query($conn, $query);

                        if(mysqli_num_rows($resultado)>0){
                            $status = true;
                        }else{
                            $status= false;
                        }

                        if($status==true): echo'
                        <form action="" method="">
                        <button type="submit" name="internet" class="btn btn-secondary" disabled="true">Contratado</button>
                        </form>
                        '; else: echo '<form action="contrato.php" method="POST">
                        <button type="submit" name="internet" class="btn btn-success">Contratar</button>
                        </form>'; endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>