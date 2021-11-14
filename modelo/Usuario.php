<?php
include_once "../Conexion.php"; //jalar datos de otros archivos 

class Usuario
{
    private static $conexion=null;
    public function __construct()
    {
        self::$conexion=BD::crearInstancia();
          //$this es la instancia de usuario del objeto for example: $usuario = new Usuario(); donde $usuario es el objeto ($this)
    }
    public static function Loguearse($user, $password)
    {
        // sintaxis para hacer consultas sql
        
        $sql = "SELECT * FROM usuario as U where U.usuario=:usuario and U.password=:password"; // peticion sql 
        // realizaremos la consulta a traves de una consulta preparada... leer documentacion
        $query = self::$conexion->prepare($sql); //nota: $this->conexion es $usuario que accede a la funcion conexion en la clase Usuario
        $query->execute(array(":usuario" => $user, ":password" => $password)); //consulta preparada por el :usuario y :password
        $datos = $query->fetchAll(); // retorna objetos o no
        return $datos; //returna a travez de la variable datos osea $usuario->datos
    }
}
