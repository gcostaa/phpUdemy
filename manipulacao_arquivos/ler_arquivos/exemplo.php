<?php

$filename = "usuarios.csv";

if(file_exists($filename))
{
    //apenas leitura
    $file = fopen($filename,"r");
    //pega a primeira linha do arquivo e o explode transforma em array a partir da virgula
    $headers = explode(",",fgets($file));

    $data = array();

    //fgets retorna false quando acabar
    while($row = fgets($file))
    {
        
        $rowData = explode(",",$row);

        $linha = array();

        for ($i=0; $i < count($headers); $i++) { 
            
            $linha[$headers[$i]] = $rowData[$i];

        }

        array_push($data,$linha);
    }

    fclose($file);

    echo json_encode($data);
}

?>