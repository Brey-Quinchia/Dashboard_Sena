<?php
//? Funcionalidad del controlador no funciono, retornamos a manera sencilla¿
if(isset($_GET['alert'])){
    //* Solo en caso de que la alerta este iniciada
    include('alertPathController.php');
    $typeAlert = $_GET['alert'];
    switch ($typeAlert) {
        case 'Programas_Especiales':
            //?forma sencilla.
            include_once($model_path['A_PE']);
            include_once($view_path['A_PE']);
            break;
        case 'Coordinacion_Academica':
            include_once($model_path['A_CA']);
            include_once($view_path['A_CA']);
            break; 
        case 'Ampliacion_Cobertura':
            include_once($model_path['A_AC']);
            include_once($view_path['A_AC']);
            break; 

    }
}else{
    header('Location: ?alert=Programas_Especiales');
}
?>