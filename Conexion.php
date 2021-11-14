<?php

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

    //se revisa si la instancia fue creada, si no lo esta la crea y devuelve esta
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


