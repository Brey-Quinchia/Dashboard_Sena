<?php
$root_path = $_SERVER['DOCUMENT_ROOT']; 
$controller_path = 'controller/'; 
$model_path = 'model/'; 
$view_path = 'view/'; 
$assets_path = 'assets/'; 
$includes_path = 'includes/';
define('ROOT_PATH', $root_path); 
define('CONTROLLER_PATH',ROOT_PATH.$controller_path); 
define('MODEL_PATH',ROOT_PATH.$model_path); 
define('VIEW_PATH',ROOT_PATH. $view_path); 
define('ASSETS_PATH',ROOT_PATH .$assets_path); 
define('INCLUDES_PATH', ROOT_PATH.$includes_path); 
?>