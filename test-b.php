<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion de fecha</title>
</head>
<body>
    <h2>Acortar un string</h2>
    <p>Los valores son arrojados asi <b>2022-08-20 00:00:00.0</b></p>
    <?php
    //? Valores de fecha arrojados por los formatos
    $origindate = "2022-08-20 00:00:00.0"; 
    echo $origindate . "<br>"; 
    //? Para conocer la longitud de la fecha entregada
    echo strlen($origindate); 
    //? Necesito transformar la fecha utilizando substr
    $nedDate = substr($origindate, 0,11); 
    //? problema resuelto
    echo $nedDate

    ?>
</body>
</html>