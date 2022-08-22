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
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
        } catch (PDOException $e) {
            return "fallo de conexion" . $e->getMessage();
        }
    }

    public function ejecutar($sql)
    {
        //echo $sql;
        $this->conection->exec($sql);
        //print_r($this->conection->errorInfo());
        return $this->conection->errorInfo();
    }

    public function consultar($sql)
    {
        $sentencia = $this->conection->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }

    public function consultarform($sql)
    {
        $sentencia = $this->conection->prepare($sql);
        $sentencia->execute();
        $count = $sentencia->rowCount();
        return $count;
    }
}
