<?php

    if(!isset($_POST['login'])){
        include_once('view/login.php'); 
    }else{
        include_once('view/HomeView.php'); 
    }

?>