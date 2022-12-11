<?php
require_once('connect.php');
$con = connectdb::connect(); 
try {
    //code...
    $query = "SELECT * from DF_53"; 
    $result = $con->prepare($query); 
    $result->execute() ;
    $data = $result->fetchAll(PDO::FETCH_OBJ);
} catch (Exception $error) {
    //throw $th;
    echo ('Lo sentimos, la consulta no pudo ser ejecutada');
}

?>