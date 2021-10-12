<?php


class Conexion
{
    // parametros para el PDO
    private $servidor = "localhost";
    private $dbname = "db_egatur";
    private $puerto = 3306;
    private $charset = "utf8";
    private $username = "root";
    private $password = "";

    public $pdo = null;

    private $atributos = [PDO::ATTR_CASE => PDO::CASE_LOWER, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

    function __construct()
    {
        // Vamos a conectarnos con el PDO a la base de datos

        //$conexion
        $this->pdo = new PDO("mysql:dbname={$this->dbname};host={$this->servidor};port={$this->puerto}; charset={$this->charset}", $this->username, $this->password, $this->atributos);
    }
}
// try {
    // $conexion = new Conexion(); //instancia de conexion viene a ser el $this del constructor
    // $conexion->pdo;
//     echo "conexion exitosa";
// } catch (PDOException $Exception) {
//     echo $Exception;
// }
