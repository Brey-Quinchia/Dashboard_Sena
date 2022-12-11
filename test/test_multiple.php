<?php
//? como funciona un array ?

$model = [

    'P_E'=>'Hola soy programas especiales',
    'C_A'=>'Hola soy cordinacion academica', 
    'A_P'=>'Hola soy amplicacion de programas' 
];
//echo ($model['P_E']); -> Para acceder al valor guardado con la clave P_E
function autoSelect(){
    if(isset($_REQUEST['send'])){
        $option = $_REQUEST['select-option'];
        return 'La opcion seleccionada es'.$option;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧪Test Lab</title>
    <script>
        function autoSelect(id){
            document.getElementById(id).selected='true'; 
        }
    </script>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <label>
            <?php autoSelect()?>
            hey You can select a Option:
            <select name="select-option" id="">
                <option value="opt1" id="opt1">I am Option One</option>
                <option value="opt2" id="opt2">I am option two</option>
                <option value="opt3" id='opt3'>I am Option Three</option>
                <option value="opt4" id='opt4'>I am option four</option>
            </select>
        </label>
        <input type="submit" value="Send" name="send">
    </form>
</body>
</html>