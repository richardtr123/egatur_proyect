<?php include("modelo/Conexion.php") ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="estillo.css"> -->
    <!-- xd -->

</head>

<body>
    <div class="contenedor">
        <div class="panel-izq">
            <div class="contenido">

                <div id="imagenlogo">

                </div>
                <!-- <img src="/imagenes/pixlr-bg-result3.png" alt="logo-egatur" srcset="" id="imagenlogo" > -->
                <h1>EGATUR</h1>
                <p class="titulo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus culpa, omnis hic non commodi dolore repellendus.omnis hic non commodi dolore repellendus</p>
                <div class="redes-sociales">
                    <a href="https://www.facebook.com/egatur.edu.pe" target="_blank"><i class='bx bxl-facebook-square'></i></a>
                    <a href="https://www.youtube.com/channel/UCLzm798c4nAnVOdTDc-TAtA/videos" target="_blank"><i class='bx bxl-youtube'></i></a>
                    <a href="https://twitter.com/escuelaegatur?lang=es" target="_blank"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>

        </div>
        <div class="panel-der">
            <button id="bdark">
            </button>

            <h2>Sistema de Gestión Académica</h2>
            <h2>EGATUR</h2>

            <form action="controlador/LoginController.php" method="post">
                <h2>Bienvenido...</h2>
                <img src="img/profile.png" alt="profile.png" width="150px">
                <label for="usuario">Usuario</label>
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input name="usuario" class="input is-medium cajatexto" type="email" placeholder="Usuario">
                        <span class="icon is-large is-left cajaicono">
                            <i class='bx bx-user'></i>
                        </span>
                        <!-- <span class="icon is-large is-right">
                        <i class='bx bx-check' ></i>
                      </span> -->
                    </p>
                </div>
                <label for="usuario">Contraseña</label>
                <div class="field">
                    <p class="control has-icons-left">
                        <input name="password" class="input is-medium cajatexto" type="password" placeholder="Contraseña">
                        <span class="icon is-large is-left cajaicono">
                            <i class='bx bx-lock-alt'></i>
                        </span>
                    </p>
                </div>
                <div class="recordar">
                    <div class="btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="checkbox">Recordar mi usuario y contraseña
                        </label>
                    </div>
                </div>
                <div class="boton">
                    <input type="submit" value="iniciar sesión">
                    <p>ó</p>
                    <p><a href="registro.php">Registrarse</a></p>
                </div>
            </form>

        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/myei/validate.js@master/validate.min.js"></script>
    <script src="js/darkmode.js"></script>
</body>

</html>