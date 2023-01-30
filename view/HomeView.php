<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $directory="";
        require ('includes/styles.php'); 
        ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudLab |Tracking System</title>
</head>
<body>
    <header>
        <img src="assets/img/logo_sena.png" id="logo_sena">
        <div id="divisor_line"></div>
        <h3>Centro de desarrollo Agroindustrial</h3>
    </header>
    <?php
    require('view/component/menu.php')
    ?>
    <section class="container">
        <div class="main">
            <h1>Seguimiento Academico - Arauca </h1>
            <!--Formulario para carga de archivos y formatos -->
            <form action="view/404.html" method="post" class="center" id="upload-file" enctype="multipart/form-data" >
            <!-- <form action="test/insertTest.php" method="post" class="center" id="upload-file" enctype="multipart/form-data" > -->
                <ul class="form-option">
                    <li class="form-option">
                        <label for="df53"> formato "DF53"</label><br>
                        <input type="file" name="df53" id="df53" required><br>
                    </li>
                    <!-- Podemos simplificar esto con una funcion de php -->
                    <li class="form-option">
                        <label for="df51">formato "DF51"</label><br>
                        <input type="file" name="df51" id="df51">
                    </li>
                    <li class="form-option">
                        <label for="pe04"> formato "PE04"</label><br>
                        <input type="file" name="pe04" id="pe04"><br>
                    </li> 
                    <li class="form-option">
                        <label for="df49"> formato "DF49"</label><br>
                        <input type="file" name="df49" id="df49"><br>
                    </li>
                    <li class="form-option">
                        <label for="df14a"> formato "DF14A"</label><br>
                        <input type="file" name="df14a" id="df14a"><br>
                    </li>
                    <li class="form-option">
                        <!-- <label for="df14a"> formato "DF14A</label><br> -->
                        <button class="submit" name="upload_format">Cargar</button>
                    </li>
                </ul>
            </form>
        </div>
    </section>
</body>
</html>