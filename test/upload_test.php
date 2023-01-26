<?php
/* 
echo "Here is the test<br>";

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory; //Lectura de archivos 
use PhpOffice\PhpSpreadsheet\Cell\Coordinate; 

$nameFile = 'test_file.ods';

$documento = IOFactory::load($nameFile); 
//* Deseamos conocer el total de hojas
$totalHojas = $documento->getSheetCount(); 
$hojaActual = $documento->getSheet(0); //? Para conocer la hoja en la que estamos trabajando
$rowNumber = $hojaActual->getHighestDataRow(); //? Numero de filas con datos
$letterColumn = $hojaActual->getHighestDataColumn(); //?Nombre de la ultima columna de datos
$columnNumber= Coordinate::columnIndexFromString($letterColumn); //? Numero (poscicion) de la columna
//* Recorremos las filas con un For 
for($indexRow =1; $indexRow <= $rowNumber; $indexRow++){
    for($indexColumn =1; $indexColumn<=$columnNumber; $indexColumn++){
    $valor = $hojaActual->getCellByColumnAndRow($indexColumn,$indexRow); 
    echo $valor."--"; 
    }
}
*/
require ('includes/conectiondb.php'); 
require ('vendor/autoload.php');
require('test-b.php'); 
//? Hacemos uso de la biblioteca PHPSpreadsSheet 
use PhpOffice\PhpSpreadsheet\IOFactory; //Lectura de archivos 
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
$nameFile = 'DF-53.xlsx'; 
$documento = IOFactory::load($nameFile); 
$hojaActual = $documento->getSheet(0); 
$rowNumber = $hojaActual->getHighestDataRow(); 

function letterColumn($letra){
    $numLetra = Coordinate::columnIndexFromString($letra); 
    return $numLetra;
}
function showData($valor){
    echo "<td>"; 
    echo $valor;
    echo "</td>";
}
for($indexRow =6; $indexRow <= $rowNumber; $indexRow++){
        
    //for($indexColumn =1; $indexColumn<=$columnNumber; $indexColumn++){
    $ficha = $hojaActual->getCellByColumnAndRow(letterColumn('E'),$indexRow); 
    $programa = $hojaActual ->getCellByColumnAndRow(letterColumn('F'),$indexRow); 
    $tipo_formacion = $hojaActual ->getCellByColumnAndRow(letterColumn('H'),$indexRow); 
    $clase_pograma = $hojaActual ->getCellByColumnAndRow(letterColumn('I'),$indexRow); 
    //? Transformacuion de la fecha 
    $fecha_inicio = $hojaActual ->getCellByColumnAndRow(letterColumn('J'),$indexRow); 
    $original_date_in = transform_date($fecha_inicio); 
    $fecha_fin= $hojaActual ->getCellByColumnAndRow(letterColumn('K'),$indexRow); 
    $original_date_end = transform_date($fecha_fin); 
    $estado_ficha = $hojaActual ->getCellByColumnAndRow(letterColumn('L'),$indexRow); 
    $aprendices_activos = $hojaActual ->getCellByColumnAndRow(letterColumn('M'),$indexRow); 
    $programada = $hojaActual ->getCellByColumnAndRow(letterColumn('N'),$indexRow);  
    
    $con -> query("INSERT INTO df53 VALUES($ficha, '$programa', '$tipo_formacion', '$clase_pograma', '$original_date_in', '$original_date_end', '$estado_ficha', $aprendices_activos, '$programada')"); 
}


?>