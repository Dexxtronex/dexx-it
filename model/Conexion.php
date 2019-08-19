<?php
//archivo con constantes a ser utilizadas
require_once "config/config.php";

class Conexion{ // patron de disenio singleton
    private static $conexion = null; //atributo static y private
   
    //constructor privado para que solo dentro de esta clase pueda crearse objetos
    private function __construct() {
    }
    
    public static function getConexion(){
        try{
            // si no existe la conexion se crea
            if(!isset(self::$conexion)){
                self::$conexion=new PDO("mysql:host=" . SERVIDORBD . "; port= ".PUERTO."; dbname=" . NOMBREBD, 
                        USUARIO, PASSWORD);  // se inicializa db con la conexion de tipo PDO a la base de datos (motor mysql)
               self::$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
               self::$conexion->exec("set character set utf8");
            }
        }catch(Exception $e){
            echo "linea del error " .$e->getLine();
            echo "</br>";
            echo "archivo " . $e->getFile();
            echo "</br>";
            die("error " -> $e->getMessage());
        }
        return self::$conexion;
    }
}


