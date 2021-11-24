<?php
    session_start();
    
    if(!isset($_SESSION['rol'])){
            header('location: login.php');
        die();
    }
    else{
        if($_SESSION['rol']!= 1){
            header('location: login.php');
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
hola soy un admin
<?php
    print_r($_SESSION);
    print_r(memory_get_usage());
    clearstatcache();
    print_r(memory_get_usage());
?>
<a href="../controlador/LogoutController.php">para pensar señores</a>
</body>
</html>