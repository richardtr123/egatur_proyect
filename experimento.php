<?php

use Usuario as GlobalUsuario;

class BD
{
    // parametros para el PDO
    private static $servidor = "localhost";
    private static $dbname = "db_egatur";
    private static $puerto = 3306;
    private static $charset = "utf8";
    private static $username = "root";
    private static $password = "";

    public static $instancia = null;
    private static $atributos = [PDO::ATTR_CASE => PDO::CASE_LOWER, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

    public static function crearInstancia(){
        if(!isset(self::$instancia)){
            self::$instancia=new PDO("mysql:dbname=".self::$dbname.";
                                    host=".self::$servidor.";
                                    port=".self::$puerto."; 
                                    charset=".self::$charset."", self::$username, self::$password, self::$atributos); 
            echo "conexion realidad";
        return self::$instancia;
        }
    }
// try {
    // $conexion = new Conexion(); //instancia de conexion viene a ser el $this del constructor
    // $conexion->pdo;
//     echo "conexion exitosa";
// } catch (PDOException $Exception) {
//     echo $Exception;
// }
}

class Usuario
{
    private static $conexion=null;
    //__construct solo funciona si la clase se instancia o se crea el objeto, no se puede directamente de la clase
    public function __construct()
    {
        self::$conexion=BD::crearInstancia();
          //$self es la instancia de usuario del objeto for example: $usuario = new Usuario(); donde $usuario es el objeto ($this)
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


// $valor=BD::crearInstancia();
$valor2=new Usuario;
$valor2->Loguearse('richardtr123','Wilson_123');



