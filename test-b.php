
    <?php
    //? Valores de fecha arrojados por los formatos
    #Necesito crear una funcion que devuelva el valor correcto de la fecha 
    function transform_date($originDate){
        $correctDate = substr($originDate,0,19); 
        return $correctDate; 
    }
    ?>