
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
    require('../includes/conectiondb.php')
    ?>
    <section class="container">
        <div class="main">
            <h1>Programas especiales</h1>
            <?php
                copy($_FILES['df53']['tmp_name'],$_FILES['df53']['name']); 
                $df53 = $_FILES['df53']['name']; 
                
            ?>
            <h2>Fichas En ejecucion sin programar <?php echo ("<a href=\"$df53\">aqui</a>")?></h2>
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
                <?php #include('../test.php')
                    //* Hacemos la consulta a la base de datos 
                    $registros = $con -> query("SELECT * from df53 where estado_ficha='En ejecucion' and clase_programa='CURSO ESPECIAL'"); 
                    while($reg=$registros->fetch_array())
                    {
                        echo "<tr>"; 
                        echo "<td>"."NA"."</td>"; 
                        echo "<td>".$reg['ficha']."</td>"; 
                        echo "<td>".$reg['estado_ficha']."</td>"; 
                        echo "<td>".$reg['programa']."</td>"; 
                        echo "<td>"."NA"."</td>"; 
                        echo "<td>"."NA"."</td>"; 
                        echo "<td>".$reg['clase_programa']."</td>"; 
                        echo "<td>".$reg['fecha_inicio']."</td>"; 
                        echo "<td>".$reg['fecha_fin']."</td>"; 
                        echo "<td>"."NA"."</td>"; 
                        echo "<td>"."NA"."</td>"; 
                        echo "<td>"."NA"."</td>"; 
                        echo "<td>"."NA"."</td>"; 
                        
                        echo "<td>".$reg['aprendices_activos']."</td>"; 
                        #echo "<td>".$reg['programada']."</td>"; 
                        echo "</tr>"; 
                    }

                ?>

                
            </table>
        </div>
    </section>
</body>
</html>