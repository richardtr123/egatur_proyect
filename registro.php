<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/registro.css">
    <!-- <link rel="stylesheet" href="estillo.css"> -->
    <!-- xd -->

</head>

<body>
    <div class="contenedor">
        <div class="panel-der">
            <button id="bdark">
                
            </button>
            
            <h2>Registro de Estudiante</h2>            
            <form action="" method="post">
            <!-- <img src="../img/profile.png" alt="profile.png" width="150px"> -->
                <div class="registro">
                    <label for="nombre">Nombres:</label>
                    <input type="text" name="nombre" id="nombre" class="cajatexto" placeholder="nombres">
                    
                </div>
                <div class="registro">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" class="cajatexto" placeholder="apellidos">
                </div>
               <div class="registro">
                    <label for="dni">Dni:</label>
                    <input type="text" name="dni" id="dni" class="cajatexto" placeholder="dni">
               </div>
               <div class="registro">
                <div class="cajapeq">
                    <span>
                        <label for="fechanac">Fecha de nacimiento:</label>
                        <input type="date" name="fechanac" id="fechanac" class="cajatexto"></span>
                    <span>
                        <label for="edad">Edad:</label>
                    <input type="number" name="edad" id="edad" class="cajatexto" size="5px" placeholder="su edad">
                    </span>
                    <span>
                        <label for="sexo">Sexo:</label> 
                        <select name="sexo" id="sexo">
                            <option disabled selected>Selecciona</option>
                            <option value="1">Varón</option>
                            <option value="0">Mujer</option>
                        </select>
                    </span>                  
                </div>
               </div>
               <div class="registro">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="cajatexto" placeholder="example@gmail.com">
               </div>
               <div class="registro">
                <label for="contrasenia">Contraseña:</label>
                <input type="password" name="contrasenia" id="contrasenia" class="cajatexto" placeholder="contraseña">
               </div>
               <div class="registro">
                <label for="contraseniare">Repita la Contraseña:</label>
                <input type="password" name="contraseniare" id="contraseniare" class="cajatexto" placeholder="contraseña">
               </div>
                <div class="boton">
                    <input type="submit" value="Registrarse">
                    <p>ó</p>
                    <p><a href="/index.php">Iniciar sesión</a></p>
                </div>
            </form>

        </div>
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
        
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/myei/validate.js@master/validate.min.js"></script>
    <script src="js/darkmode.js"></script>
</body>

</html>