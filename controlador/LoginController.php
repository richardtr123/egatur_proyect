<?php
session_start();
include_once "../modelo/Usuario.php"; //jalar datos de otros archivos 
$usuario = new Usuario; //instancia de usuario
// consultar que metodo esta realizando
$user = $_POST["usuario"];
$password = $_POST["password"];
$registros=$usuario->Loguearse($user, $password); //accedo a la funcion de la clase Usuario
//nos devuelve un objeto que contiene 4 valores id, usuario, contraseña y rol 


$_SESSION["user"] = $user;
unset($_SESSION['password']);


foreach ($registros as $objeto) {
    echo "Usuario Encontrado: ID: " . $objeto->id . " Correo: " .  $objeto->usuario . " Password: " . $objeto->password;
    $_SESSION['rol']=$objeto->rol;
}
if (!empty($registros)) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location: ../vistas/admin.php');
            die();
        break;

        case 2: 
            header('location: ../colaborador.php');
            die();
        break;

        case 3: 
            header('location: ../profesor.php');
            die();
        break; 

        case 4: 
            header('location: ../estudiante.php');
            die();
        break; 

        default:
            header("Location: ../vistas/aula.php");
            die();
        break;
    }
    
} else {
    header("Location: ../index.php");
    die();
}
