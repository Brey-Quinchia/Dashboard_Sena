<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $directory = "";
    require('includes/styles.php');
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudLab | Tracking System</title>
</head>

<body>
    <!-- <header>
        <img src="assets/img/logo_sena.png" id="logo_sena">
        <div id="divisor_line"></div>
        <h3></h3>
    </header> -->
    <?php
    require('view/component/menu.php')
    ?>
    <div class="container shadow-lg rounded mt-5">
        <div class="container-md">
            <h1 class="text-center mt-2 fs-2">Tracking System - AR</h1>
            <p class="mx-auto fs-5 ms-2 mt-3">
                Bienvenio al Sistema de <strong>Seguimiento Academico</strong>, en esta seccion
                puedes realizar la carga de los informes en los siguientes formatos:
            </p>
            <div class="container-sm ms-4">
                <ul class="list-content shadow rounded">
                    <li class="hover-me mb-2">Formato <strong>.xlsx</strong><i class="bi bi-filetype-xlsx fs-5"></i>(Recomendado)</li>
                    <li class="hover-me mb-2">Formato <strong>.xls</strong><i class="bi bi-filetype-xls fs-5"></i></li>
                </ul>
            </div>
        </div>
        <!--Formulario para carga de archivos y formatos -->
        <form class='p-1' action="<?= htmlspecialchars($_SERVER['PHP_SELF'].'?action=loadfile');?>" method="post" id="upload-file" enctype="multipart/form-data">
            <!-- <form action="test/insertTest.php" method="post" class="center" id="upload-file" enctype="multipart/form-data" > -->
            <?php
            //? What is the format Accept ? 
            $typeFile = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
            ?>
            <div class="row text-center"><!--//?First form Line -->
                <div class="col-sm shadow rounded hover-me m-1">
                    <label for="df53-file" class="form-label mt-2">Carga Formato <strong>DF-53</strong></label>
                    <input class="form-control" type="file" id="df53-file" accept="<?=$typeFile?>">
                </div>
                <div class="col-sm shadow rounded hover-me m-1">
                    <label for="df51-file" class="form-label mt-2">Carga Formato <strong>DF-51</strong></label>
                    <input class="form-control" type="file" id="df51-file" accept="<?=$typeFile?>">
                </div>
                <div class="col-sm shadow rounded hover-me m-1">
                    <label for="pe04-file" class="form-label mt-2">Carga Formato <strong>PE-04</strong></label>
                    <input class="form-control" type="file" id="pe04-file" accept="<?=$typeFile?>">
                </div>
            </div>
            <div class="row justify-content-md-center mt-2 "><!--//?Second form Line -->
                <div class="col-sm-4 shadow rounded hover-me m-1">
                    <label for="df49-file" class="form-label mt-2">Carga Formato <strong>DF-59</strong></label>
                    <input class="form-control" type="file" id="df49-file" accept="<?=$typeFile?>">
                </div>
                <div class="col-sm-4 shadow rounded hover-me m-1">
                    <label for="df14a-file" class="form-label mt-2">Carga Formato <strong>DF-14A</strong></label>
                    <input class="form-control" type="file" id="df14a-file" accept="<?=$typeFile?>">
                </div>
            </div>
            <div class="row justify-content-md-center mt-2 ">
                <input class="btn mt-3" type="submit" value="enviar" name="login">
            </div>
            <!-- <ul class="form-option">

                    <li class="form-option">
                        <label for="df53"> formato "DF53"</label><br>
                        <input type="file" name="df53" id="df53" required><br>
                    </li>
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
                        <button class="submit" name="upload_format">Cargar</button>
                    </li>
                </ul> -->
        </form>
    </div>
</body>

</html>