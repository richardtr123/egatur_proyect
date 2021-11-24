<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/template.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"> <ion-icon name="logo-apple"></ion-icon> </span>
                        <span class="title">Brand name</span>
                    </a>
                </li>
                <li>
                    <a href="index2.html">
                        <span class="icon"> <ion-icon name="home-outline"></ion-icon> </span>
                        <span class="title">El pepe</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <ion-icon name="person-outline"></ion-icon> </span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <ion-icon name="chatbubble-outline"></ion-icon> </span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="index3.html">
                        <span class="icon"> <ion-icon name="help-outline"></ion-icon> </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <ion-icon name="settings-outline"></ion-icon> </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <ion-icon name="lock-closed-outline"></ion-icon> </span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"> <ion-icon name="log-out-outline"></ion-icon> </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--MAIN-->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- Search -->
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- user Img-->
                <div class="user">
                    <img src="img/user.jpg">
                </div>
            </div>
            <div class="contenido">
                <?php
                    echo $controlador." ".$accion;
                    include_once('./ruteador.php');
                ?>
            </div>            
        </div>        
    </div>


    <!--SECCIÓN DE SCRIPTS-->
    <!-- Script de icons-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="js/template.js"></script>
    <script>
        
    </script>
</body>
</html>