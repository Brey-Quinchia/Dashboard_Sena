<!DOCTYPE html>
<html lang="en">
<head>
    <?php require ('includes/styles.php')?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|Options</title>
</head>
<body>
    <?php 
    $directory =""; 
    require ('includes/menu.php'); 
    
    ?>
    <section class="container">
        <div class="main">
            <h1>Seguimiento Academico -  </h1>
            <!--Formulario para carga de archivos y formatos -->
            <form action="alertas/programasEspeciales.php" method="post" class="center" id="upload-file" enctype="multipart/form-data" >
                <ul class="form-option">
                    <!-- Podemos simplificar esto con una funcion de php -->
                    <li class="form-option">
                        <label for="df49"> formato "DF49"</label><br>
                        <input type="file" name="df49" id="df49"><br>
                        <button class="submit">Cargar</button>
                    </li>
                    <li class="form-option">
                        <label for="pe04"> formato "PE04"</label><br>
                        <input type="file" name="pe04" id="pe04"><br>
                        <button class="submit">Cargar</button>
                    </li>
                    <li class="form-option">
                        <label for="df14a"> formato "DF14A"</label><br>
                        <input type="file" name="df14a" id="df14a"><br>
                        <button class="submit">Cargar</button>
                    </li>
                    <li class="form-option">
                        <label for="df53"> formato "DF53"</label><br>
                        <input type="file" name="df53" id="df53" required><br>
                        <button class="submit">Cargar</button>
                    </li>
                    <li class="form-option">
                        <label for="df51">formato "DF51"</label><br>
                        <input type="file" name="df51" id="df51">
                        <button class="submit">Cargar</button>
                    </li>
                </ul>
            </form>
        </div>
    </section>
</body>
</html>