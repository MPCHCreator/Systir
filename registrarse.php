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
    <title>Registro</title>
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
                            <form action="webService/ws.php" method="POST">
                                <h2>Crear una cuenta</h2>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Correo</label>
                                        <input type="email" class="form-control" name="correo"  placeholder="fer@gmail.com" required="true">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Contraseña</label>
                                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña" required="true">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Fernando" required="true" pattern="[A-Za-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{1,150}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" placeholder="Paredes Alonso" required="true" pattern="[A-Za-zA-ZñÑáéíóúÁÉÍÓÚ\s ]{1,150}">
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="inputAddress2">Empresa</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Oracle">
                                </div> -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Numero telefonico</label>
                                        <input type="text" placeholder="+52 1 5523" name="telefono" class="form-control" required="true" pattern="[0-9]{3}[0-9]{3}[0-9]{4}">
                                    </div>
                                </div>
                                <button type="submit" name="nuevo_usuario" class="btn btn-primary">Registrar</button>
                            </form>
                            <br>
                            <a href="iniciar_sesion.php">Inicia sesion</a>
                            <?php

                            if (isset($_SESSION['acceso'])) {
                                if ($_SESSION['acceso'] == 'error') {
                                    echo '<span style="color:red;"> Datos incorrectos </span>';
                                    $_SESSION['acceso'] = null;
                                }
                            } else { }
                            ?>
                        </div>
                        <!-- Columna 3-->
                        <div class="col-xl-4">

                        </div>
            </div>

    </div>
</body>

</html>