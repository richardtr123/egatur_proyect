<?php include("modelo/Conexion.php") ?>
<!DOCTYPE html>
<html lang="es">

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/logo-tema-claro.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="estillo.css"> -->
    <!-- xd -->    
</head>
    <body>
        <div class="contenedor">
            <div class="contenedor__panelizq" id="panelizq"> 
                <div class="contenedor__panelizq-contenido">
                    <div class="panelizq__cabecera" id="panelizq-cabecera">
                        <div class="imagen__logo" id="imagen-logo">
                        </div>       
                        <h1>EGATUR</h1>
                    </div>
                        
                    <div class="panelizq__frase" id="panelizq-frase">
                        <p class="titulo">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus culpa, omnis hic non commodi dolore repellendus.omnis hic non commodi dolore repellendus</p>
                    </div>
                    <div class="panelizq__redes-sociales" id="panelizq-redes-sociales">
                        <a href="https://www.facebook.com/egatur.edu.pe" target="_blank"><i class='bx bxl-facebook-square'></i></a>
                        <a href="https://www.youtube.com/channel/UCLzm798c4nAnVOdTDc-TAtA/videos" target="_blank"><i class='bx bxl-youtube' ></i></a>
                        <a href="https://twitter.com/escuelaegatur?lang=es" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    </div>
                </div> 
            </div>
            <div class="contenedor__panelder" id="panelder">    
                <button id="bdark"></button>  
                <form action="" method="post" class="formulario" name="form">
                    <div class="formulario__grupo" id="grupo__header">
                        <h2 class="formulario__titulo" id="formulario-titulo">Sistema de gestión académica <p>Egatur</p></h2>
                        <h2 class="formulario__bienvenido" id="formulario-bienvenido">Bienvenido</h2>
                        <img class="formulario__perfil" src="img/profile.png" alt="perfil.png">
                    </div>
                    <div class="formulario__grupo" id="grupo__usuario">
                        <label class="formulario__label" for="usuario">Usuario</label>
                        <div class="field formulario__grupo-input">
                            <p class="control has-icons-left has-icons-right">
                                <input class="formulario__input input is-medium cajatexto" id="usuario" name="usuario" type="text" placeholder="Usuario">
                                <span class="icon is-large is-left cajaicono normal">
                                    <i class='bx bx-user icono'></i>
                                </span>                            
                            </p>
                        </div>
                        <div class="enlace-contrasenia"><span class="cajatexto__usuario-error">El usuario solo permite de 5-26 caracteres incluyen, letras, numeros, guion y subguion</span></div>
                    </div>
                    <div class="formulario__grupo" id="grupo__password">
                        <label class="formulario__label" for="password">Contraseña</label>
                        <div class="field formulario__grupo-input">
                            <p class="control has-icons-left has-icons-right">
                                <input class="formulario__input input is-medium cajatexto" id="password" name="password" type="password" placeholder="Contraseña" onkeyup="validated_password()">
                                <span class="icon is-large is-left cajaicono normal">
                                    <i class='bx bx-lock-alt'></i>
                                </span>
                            </p>
                        </div>                    
                        <div class="enlace-contrasenia"><span class="cajatexto__password-error">Por favor complete su contraseña</span><span class="contenedor__enlace"><a class="formulario__enlace" href="#">Olvidaste  tu <br>contraseña?</a></span></div>
                    </div>
                    
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <div><input type="checkbox" class="formulario__recordatorio" name="recordatorio" id="recordatorio"><label for="recordatorio">Recordar usuario y contraseña</label></div>
                        <button type="submit" class="formulario__btn">iniciar sesión</button>
                        <p class="formulario-mensaje__exito" id="formulario__mensaje-exito"></p>
                    </div>
                    <p class="formulario__registro">No tienes cuenta? &ThinSpace;<a class="formulario__enlace" href="registro.php">Registrese ahora</a></p>
                </form>
            
            </div>
        </div>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/login.js"></script>
        <script src="js/darkmode.js"></script>
    <script>
       

    </script>
    </body>
</html>