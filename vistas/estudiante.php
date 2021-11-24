<?php
    session_start();
    
    if(!isset($_SESSION['rol'])){
            header('location: login.php');
        die();
    }
    else{
        if($_SESSION['rol']!= 2){
            header('location: login.php');
            die();
        }
    }
    print_r($_SESSION);
?>


hola soy un estudiante 