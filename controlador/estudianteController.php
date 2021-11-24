<?php

class estudianteController{
    public function inicio(){
        include_once("vistas/estudiante.php");
    }
    public function error(){
        include_once('vistas/estudiante/error.php');
    }
}