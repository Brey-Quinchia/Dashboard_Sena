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
    copy($_FILES['upload_excel']['tmp_name'],$_FILES['upload_excel']['name']);
    echo ("El archivo se registro en el servidor.<br>"); 
    $nom = $_FILES['upload_excel']['name'];
    echo "<a href=\"$nom\">This is a File</a>"
    ?>
</body>
</html>