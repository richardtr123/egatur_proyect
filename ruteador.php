<?php

echo $controlador." ".$accion;



//colocar una verificacion en caso sea vacio, debe acceder solo al alogin
include_once("controlador/".$controlador."Controller.php");
$objControlador=$controlador."Controller";
$controlador=new $objControlador();
$controlador->$accion();

?>