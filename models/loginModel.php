<?php
//? Database Connection
    
    if (isset($_POST['login'])) {
        # code...
        try {
            include_once('models/connect.php');
            $con = connectdb::connect(); //Establecemos la conexion a la BD
            // Recoleccion de los datos del form
            $user_auth = $_POST['log-user']; 
            $pass_auth = $_POST['log-pass']; 
        } catch (\Throwable $error) {
            //throw $th;
            echo "Error Found on Line ->". $error->getLine().'<br>';
            echo "Full Description of the error ->".$error->getMessage();   
        }
    }
?>
