<?php

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$controlador='usuario';
$accion='inicio';

if(isset($_GET['controlador'])&& isset($_GET['accion'])){
    $controlador=$_GET['controlador'];
    $accion=$_GET['accion'];
}
else{
    $controlador='usuario';
    $accion='inicio';
}

if(!isset($_SESSION)){
    require_once('vistas/login.php');
}
else{
    require_once("vistas/template.php");
}

