<?php
    session_start();
    
    if(!isset($_SESSION['rol'])){
            header('location: index.php');
        die();
    }
    else{
        if($_SESSION['rol']!= 3){
            header('location: index.php');
            die();
        }
    }
    print_r($_SESSION);
?>
hola soy un profesor