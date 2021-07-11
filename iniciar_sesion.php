<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Inicio de sesion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <style>
        html,
        body,
        .container,
        .row {
            height: 100%
        }

        .container {
            border: 0px solid red;

        }

        .row {
            border: 0px solid blue;
        }

        .user-img {
            margin-top: -50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!Renglon 1>
            <div class="row">
                <!Columna 1>
                    <div class="col-xl-4" style="color: blue">

                    </div>
                    <!Columna 2>
                        <div class="col-xl-4  my-auto shadow-lg p-3 mb-5 bg-white rounded">
                            <form method="post" action="verifica.php">
                                <div class="col-12 user-img">
                                    <center><img src="img/user.png" width="200" height="200" /></center>
                                </div>
                                <h5 class="text-center">Iniciar sesion</h5>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <li class="fas fa-user"> </li>
                                        </span>
                                    </div>
                                    <input type="text" name="correo" style="width:calc(100% - 39px);" placeholder="Correo electronico" />
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <li class="fas fa-shield-alt"> </li>
                                        </span>
                                    </div>
                                    <input type="password" name="contrasena" style="width:calc(100% - 41px);" placeholder="Contrasena" />
                                </div>
                                <button style="width:100%;" class="btn btn-secondary" type="submit">Entrar</button>
                            </form>
                            <?php
                            if (isset($_SESSION['mensaje'])) {

                                echo '<div class="alert alert-' . $_SESSION['msg_div'] . '">';

                                echo $_SESSION['mensaje'];
                                unset($_SESSION['mensaje']);

                                echo '</div>';
                            }
                            ?>
                            <br>
                            <label><b>¿Aún no te has registrado?</b></label>
                            <br>
                            <label>click aqui: </label>
                            <a href="registrarse.php">Registrarse ahora</a>
                            <label style="margin-left:70px">Ir a: </label><a href="index.php"> Inicio</a>
                        </div>
                        <!-- Columna 3-->
                        <div class="col-xl-4">

                        </div>
            </div>

    </div>
</body>

</html>