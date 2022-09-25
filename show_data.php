<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Visualization</title>
</head>
<body>
    <?php
    #Necesitamos conectar con nuestra base de datos 
    include ('includes/conectiondb.php'); 
    copy($_FILES['upload_excel']['tmp_name'],$_FILES['upload_excel']['name']);
    echo ("El archivo se registro en el servidor.<br>"); 
    $nom = $_FILES['upload_excel']['name'];
    #Debemo crea una instancia mysql que permita cargar el contenido del archivo dentro de la base de datos
    /*En  definitiva para cargar los archivos, visualizarlo y exportarlos lo hare mediante las liberias de php dispuestas para este tipo de funciones como:
        -. PHPExcel ->(https://youtu.be/4Sw24E5Hi5M)
        -. PHPSpreadSheets -> (https://youtu.be/LAHkGTwnA9g)
            📑 PhpSpreadsheet: https://phpspreadsheet.readthedocs.io
            💻 Instalar PhpSpreadsheet: https://youtu.be/hWChLMQ5iFc 
            💻 Tutorial para composer: https://youtu.be/NGvfsCOVzwo
    */
    ?>
</body>
</html>