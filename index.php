<!--This is only a text  - Brehiner Quinchia-->
<!-- Making the connection to the database -->
<?php
require ("includes/conectiondb.php")
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Only!</title>
</head>
<body>
    <header>
        <h1>Desarrollo de Proyecto Sena</h1>
    </header>
    <!--? Seccion del contenido de la pagina -->
    <section class="content">
        <!-- Debemos crear una tabla con visualizacion de datos, dichos datos son adaptados de una hoja de excel a MySql -->
        <div class="content-data">
            <h2>Data Visualization</h2>
            <form action="show_data.php" method="post" enctype="multipart/form-data">
                Seleccione el Archivo: 
                <input type="file" name="upload_excel" accept=".csv"><br>
                <input type="submit" value="Cargar">
            </form>
            <table>
                <tr>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Peso</th>
                    <th>Curso</th>
                </tr>
                <?php
                $registros = $con ->query("SELECT * FROM tb_students") or die ("Problems with the select" . mysqli_error($con)); 
                while($reg = $registros->fetch_array()){
                    echo "<tr>"; #Start of a new row
                    echo "<td>" .$reg['user_name'] . "</td>";
                    echo "<td>" .$reg['email']. "</td>";  
                    echo "<td>" .$reg['age']. "</td>";  
                    echo "<td>" .$reg['weight']. "</td>";  
                    echo "<td>" .$reg['course']. "</td>";  
                    echo "</tr>"; #End of a new row
                }
                echo(""); 
                ?>
            </table>
        </div>
    </section>

</body>
</html>