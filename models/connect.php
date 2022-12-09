<?php
//* Comienzo de la clase que conecta con la base de datos
include('config.php');
class connectdb{
    //? creamos el metodo estatico
    public static function connect()
    {
        try{

            $con = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASSWORD); 
            $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $con->exec("SET CHARACTER SET " . DB_CHARSET); 

        }catch(Exception $error){
            echo ("Error in line ". $error->getLine() . "<br>"); 
            die("Error found  -> " . $error->getMessage()); 
        }
        return $con; 
    }

} 
//!End class 

?>