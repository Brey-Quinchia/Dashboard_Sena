
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>| Programas Especiales</title>
    <script>
        function autoSelect(id){
            document.getElementById(id).selected='true'; 
        }
    </script>
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
                <select name="table_name" id="">
                    <option value="table_A" id="table_A">(A)Fichas en Ejecucion sin Programar</option>
                    <option value="table_B" id='"table_B"'>(B)Fichas en Matricula con Aprendices en transito</option>
                    <option value="table_C" id='"table_C"'>(C)Fichas en ejecucion con Aprendices sin Asociar</option>
                    <option value="table_D" id='"table_D"'>(D)Fichas terminadas por fecha con aprendices sin Evaluar</option>
                    <option value="table_E" id='"table_E"'>(E)Aprendices que el centro no ha certificado</option>
                </select>
                <input type="submit" value="Filtrar" name="filter">
            </form>
            <?php
                function tableName($name){
                    switch ($name) {
                        case 'table_A':
                            # code...
                            $table_path = 'partials/table_A.php';
                            return $table_path; 
                            break;
                        case 'table_B':
                            $table_path = 'partials/table_B.php';
                            return $table_path; 
                            break;
                        default:
                            # code...
                            break;
                    }
                }
                if(isset($_REQUEST['filter']))
                { //* Solo en caso de ser activado el filtro 
                    $includeTable = $_REQUEST['table_name']; 
                    echo ("El filtro se ha activado para filtrar la tabla -> ".$includeTable);
                    include(tableName($includeTable));
                }
                
            ?>
        </div>
    </section>
</body>
</html>