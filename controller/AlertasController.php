<?php
require_once('ObjectController.php'); 
$alertas = new ObjectController; 
$typeAlert = $_GET['alert'];
switch ($typeAlert) {
    case 'ProgramasEspeciales':
        # code...
        $alertas->View($typeAlert); 
        break;
    case 'CoordinacionAcademica':
        $alertas->View($typeAlert);
    case 'AmpliacionCobertura':
        $alertas->View($typeAlert);
}
?>