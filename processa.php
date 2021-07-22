<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    </head>
    <body>
    <?php

            // $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            // echo ($arquivo_tmp);
            require 'vendor/autoload.php';
            include("conexao.php");
            
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        echo (__DIR__);
        echo (__FILE__);
        $spreadsheet = $reader->load("uploads/arq.xlsx");
        
        $worksheet = $spreadsheet->getActiveSheet();
        // Get the highest row number and column letter referenced in the worksheet
        $highestRow = $worksheet->getHighestRow(); // e.g. 10
        $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
        // Increment the highest column letter
        $highestColumn++;
        $sqlArray = [];
        $arr = [];
        
        for ($row = 1; $row <= $highestRow; ++$row) {
            for ($col = 'A'; $col != $highestColumn; ++$col) {
                #Percorre as linhas onde a celula da coluna B (indice) nao está vazia e acrescenta no array;
                    if(!$worksheet->getCell('B' . $row)->getValue() == ""){
                        $arr[] = strval($worksheet->getCell($col . $row)->getValue());
                    }
            }
            if(count($arr) > 0){
                $sql = $conexao->prepare("INSERT INTO tb_items (indice, al, lote, nm, descricao, centroorigem, centroatual, elementopep, deposito, depositoatual, tipoavaliacao, lotenm, numserie, qtdoriginal, undmedida, tipovenda, undvalor, totalvalor) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
                $sql->execute(array($arr[1],$arr[0],$arr[34],$arr[10],$arr[8],$arr[11],$arr[19],$arr[21],$arr[14],$arr[20],$arr[13],$arr[12],$arr[10],$arr[17],$arr[16],$arr[40],floatval($arr[18]),floatval($arr[23])));
              
            }
            $arr = array();

        }
        foreach($sqlArray as $arr){
            
        }
        ?>


    </body>

</html>