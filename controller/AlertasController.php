<?php
//? Funcionalidad del controlador no funciono, retornamos a manera sencilla¿
require_once('ObjectController.php'); 
//? Definimos un nuevo objeto de alerta
$ObjAlert = new ObjectController; 
$typeAlert = $_GET['alert']; 
//? Almacenamos en variables los valores del modelo y las vistas
$modelPath = $ObjAlert->ModelInclude($typeAlert); 
$ViewPath = $ObjAlert->View($typeAlert); 
switch ($typeAlert) {
    case 'ProgramasEspeciales':
        # code...
        include($modelPath);
        include($ViewPath);
        break;
    case 'AmpliacionCobertura': 
        include($modelPath);
        include($ViewPath);
    default:
        # code...
        break;
}
?>