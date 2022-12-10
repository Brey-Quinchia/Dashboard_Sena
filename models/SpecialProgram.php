<?php
require_once('connect.php');
$con = connectdb::connect(); 
$query = "SELECT * from df53"; 
    $result = $con->prepare($query); 
    $result->execute() ;
    $data = $result->fetch(PDO::FETCH_ASSOC); 
?>