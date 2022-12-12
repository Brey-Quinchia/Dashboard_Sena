<?php

if(!isset($_REQUEST['upload_format'])){
    header('location: ../index.php');
}
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
echo('I am imported');
require ('../models/connect.php'); 
require ('../vendor/autoload.php');
?>
<a href="../vendor/">ver directorio vendor</a>
<?php
//? Hacemos uso de la biblioteca PHPSpreadsSheet 
use PhpOffice\PhpSpreadsheet\IOFactory; //Lectura de archivos 
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
echo ('Voy en la linea');
//$nameFile = $_FILES['df53']['name'];//*NOmbre del archivo  
$nameFile = 'DF-53.xlsx';
echo("Archivo de nombre".$nameFile);
$documento = IOFactory::load($nameFile); 
echo ('Linea 1');
$hojaActual = $documento->getSheet(0); 
echo ('Linea 2');
$rowNumber = $hojaActual->getHighestDataRow(); 
//!Fin de error
echo('Carga de datos temporal');
function letterColumn($letra){
    $numLetra = Coordinate::columnIndexFromString($letra); 
    return $numLetra;
}
function transform_date($originDate){
    $correctDate = substr($originDate,0,19); 
    return $correctDate; 
}
function showData($valor){
    echo "<td>"; 
    echo $valor;
    echo "</td>";
}

//?Error Encontrado ->
//* Lectura del archivo que viene desde el formulario
//Quizas te interese https://github.com/Brey-Quinchia/PI-php/blob/master/dev2/11-upload/model/uploadData.php


?>