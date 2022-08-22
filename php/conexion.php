<?php


//Conectar a la bd por medio de una clase

class conection{
    private $server="localhost";
    private $user="root";
    private $password="";
    public $conection;

    public function __construct(){
        try {
            $this->conection= new PDO("mysql:host=$this->server; dbname=leafing; charset=utf8mb4", $this->user, $this->password);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "fallo de conexion".$e;

        }
    }

    public function ejecutar($sql){ //Insertar datos/delete/actualizar
        //echo $sql;
        $this->conection->exec($sql);
        //Ejecuta una instrucion sql y nos regresa un id 
        echo $sql;
        return $this->conection->lastInsertId();
    }   

    public function consultar($sql){
        echo $sql;
        //ejecutar instruccion con prepare
        //Lo que va ser el prepare es tomar esa instruccion sql y almacenarla en la variable
        //echo $sql;
        $sentencia=$this->conection->prepare($sql);
        $sentencia->execute();
        //Retorna todos los registros que pueda consultar con la sentencia sql
        return $sentencia->fetchAll();
    }

    public function consultarform($sql){
        $sentencia=$this->conection->prepare($sql);
        $sentencia->execute();    
        $count = $sentencia->rowCount();
        return $count;
    }

    private $mensaje;
    private $asunto;
    private $code;

    public function sendcode($email){
        $this->code = rand(1111, 9999);
        $this->asunto = "Verificacion de correo leafing";
        $this->mensaje = " Hola tu codigo de verificacion es: $this->code";
        mail($email, $this->asunto, $this->mensaje);
        return $this->code;
    }
}
