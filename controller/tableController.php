<?php
    function includeTable($name)
    {
        if (isset($_REQUEST['filter'])) { //? Si se pulsa el boton de filtrar
            $tableInclude = 'partials/' . $name . '.php';
            include($tableInclude);
        }
    }
?>