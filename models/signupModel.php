<?php

    //? Static insert into database
    //? Data for User master [all privileges]
    $user = 'ts@master'; 
    $pass = 'master@2023';
    $rol = 'master'; 
    //? Data for user viewer [viewing privileges]
    $user2 = 'ts@viewer'; 
    $pass2 = 'viewer@2023'; 
    $rol2 = 'viewer'; 

    //? Database connection 
    include_once('connect.php'); 
    $con = connectdb::connect(); 
    $sql1 = "INSERT INTO user(name, password, rol) values "

?>