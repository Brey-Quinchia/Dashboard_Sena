
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Programas Especiales</title>
</head>
<body>
    <?php 
    $directory = "../"; 
    require('../includes/menu.php'); 
    ?>
    <section class="container">
        <div class="main">
            <h1>Programas especiales</h1>
            <?php
                copy($_FILES['df53']['tmp_name'],$_FILES['df53']['name']); 
                $df53 = $_FILES['df53']['name']; 
                
            ?>
            <h2>Puedes ver el archivo cargado<?php echo ("<a href=\"$df53\">aqui</a>")?></h2>
            <table>
                <tr>
                    <th>N°</th>
                    <th>Ficha</th>
                    <th>Estado </th>
                    <th>Programa</th>
                    <th>Modalidad</th>
                    <th>Nivel</th>
                    <th>Tipo</th>
                    <th>Fec.Inicio</th>
                    <th>Fec.Fin</th>
                    <th>Dias Atraso</th>
                    <th>Responsable</th>
                    <th>Cupo</th>
                    <th>Matriculados</th>
                    <th>Activos</th>
                </tr>
                <?php include('../test.php')?>

                
            </table>
        </div>
    </section>
</body>
</html>