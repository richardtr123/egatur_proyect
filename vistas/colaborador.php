<?php
    session_start();
    
    if(!isset($_SESSION['rol'])){
            header('location: login.php');
        die();
    }
    else{
        if($_SESSION['rol']!= 4){
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
    Hola soy un colaborador
    <?php
    print_r($_SESSION);
    ?>

</body>
</html>
