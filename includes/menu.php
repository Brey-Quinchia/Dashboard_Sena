<?php
//* Creacion del directorio para los links
function direction($directory, $return){
    $pe = $directory."alertas/programasEspeciales"; 
    $ca = $directory."alertas/coordinacionAcademica";
    $ac = $directory."alertas/ampliacionCobertura";  
    if ($return ==1){
        echo $pe; 
    }elseif($return==2){
        echo $ca; 
    }else{
        echo $ac; 
    }
}
?>

<link rel="stylesheet" href="">
<nav role="navigation" class="primary-navigation">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Alertas de Seguimiento &dtrif;</a>
        <ul class="dropdown">
        
            <li><a href="<?php direction($directory,1)?>">Programas Especiales</a></li>
            <li><a href="<?php direction($directory,2)?>">Coordinacion Academica</a></li>
            <li><a href="<?php direction($directory,3)?>">Ampliacion de Cobertura</a></li>
            <!-- <li><a href="#">(Nombre 4)</a></li> -->
        </ul>
        </li>
        <!-- <li><a href="#">Alertas</a></li> -->
        <li><a href="#">Salir</a></li>
    </ul>
</nav>