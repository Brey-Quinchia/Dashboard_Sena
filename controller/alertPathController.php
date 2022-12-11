<?php

define('MODEL_PATH', '../models/'); //* directorio matriz del modelo 
define('VIEW_PATH', '../view/'); //* directorio matriz de las vistas
//? definicion de los los directorios de los modelos por alerta 
$model_path = [
    //? Array asociatoivo para los directorios
    'A_PE' => MODEL_PATH.'SpecialProgram.php',//? Ruta del modelo de Programas especiales 
    'A_CA' => MODEL_PATH.'CoordinacionAcademica.php', //? Ruta del modelo de coordinacion academica
    'A_AC' => MODEL_PATH.'AmplicacionCobertura.php', //? Ruta del modelo de Ampliacion de cobertura
]; 
//? Definicion de los directorios de las vistas por alerta
$view_path = [
    //? 
    'A_PE' => VIEW_PATH.'AlertSpecialProgram.php',//? Ruta del modelo de Programas especiales 
    'A_CA' => VIEW_PATH.'CoordinacionAcademica.php', //? Ruta del modelo de coordinacion academica
    'A_AC' => VIEW_PATH.'AmplicacionCobertura.php', //? Ruta del modelo de Ampliacion de cobertura

]; 
?>