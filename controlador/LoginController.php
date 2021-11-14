<?php
include_once "../modelo/Usuario.php"; //jalar datos de otros archivos 

$usuario = new Usuario; //instancia de usuario
// consultar que metodo esta realizando
$user = $_POST["usuario"];
$password = $_POST["password"];
$registros=$usuario->Loguearse($user, $password); //accedo a la funcion de la clase Usuario
foreach ($registros as $objeto) {
    echo "Usuario Encontrado: ID: " . $objeto->id_usuario . " Correo: " .  $objeto->usuario . " Password: " . $objeto->password;
}
if (!empty($registros)) {
    header("Location: ../vistas/aula.php");
} else {
    header("Location: ../index.php");
}
