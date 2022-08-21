<?php


//Conectar a la bd por medio de una clase

class conection
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    public $conection;

    public function __construct()
    {
        try {
            $this->conection = new PDO("mysql:host=$this->server; dbname=leafing; charset=utf8mb4", $this->user, $this->password);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "fallo de conexion" . $e;
        }
    }

    public function ejecutar($sql)
    {
        $this->conection->exec($sql);
        return $this->conection->lastInsertId();
    }

    public function consultar($sql)
    {
        $sentencia = $this->conection->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}
