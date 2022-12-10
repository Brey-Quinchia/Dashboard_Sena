
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
    include('component/menu.php')?>
    <section class="container">
        <div class="main">
            <h1>Programas especiales</h1>
            <form action="" method="post">
                Por favor selecciona el valor que deseas consultar:
                <br>
                <select name="" id="">
                    <option value="">Fichas en Ejecucion sin Programar</option>
                    <option value="">Fichas en Matricula con Aprendices en transito</option>
                    <option value="">Fichas en ejecucion con Aprendices sin Asociar</option>
                    <option value="">Fichas terminadas por fecha con aprendices sin Evaluar</option>
                    <option value="">Aprendices que el centro no ha certificado</option>
                </select>
                <input type="submit" value="Filtrar">
            </form>
            <?php
            $table_name = 'Fichas en ejecucion sin programar'
            ?>
            <h2><?= $table_name?></h2>
            <table>
                <thead>
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
                </thead>
                <tbody>
                    <?php foreach($data as $pepe):?>
                    <tr>
                        <td><?= $data['ficha']?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>