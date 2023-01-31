<?php
    session_start(); //Inicio la sesion
    if(!isset($_SESSION['user_auth'])){
        //* Si el usuario no ha iniciado sesion
        if(isset($_POST['login'])){
            //? cuando el boton de login se pulsa, se procede a verificar
            include_once('models/loginModel.php');
        }
        include_once('view/login.php'); //Login View 
            
    }
?>