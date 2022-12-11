<?php
$table_name = 'Fichas en ejecucion sin programar'
?>
<h2><?= $table_name ?></h2>
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

        <?php $count = 1;
        foreach ($data as $ficha) : ?>
            <tr>
                <td><?= $count ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php $count++;
        endforeach; ?>
    </tbody>
</table>