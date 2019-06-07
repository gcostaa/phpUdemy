<?php

//procura determinado dado num direotrio
$images = scandir("images");

$data = array();

foreach ($images as $img) {
    
    //in_array faz uma busca num array
    if(!in_array($img, array(".",".."))){

        $filename = "images" . DIRECTORY_SEPARATOR .$img;

        $info = pathinfo($filename);

        //pega o tamanho do arquivo
        $info["size"] = filesize($filename);
        //data de modificação
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        //cria a URL
        $info["url"] = "http://localhost:83/php_udemy/manipulacao_arquivos/DIR/".str_replace("\\","/",$filename);

        //$info["url"] = "http://localhost:83/php_udemy/manipulacao_arquivos/DIR/".str_replace("\\","kkk",$filename);

        array_push($data,$info);

       var_dump($data);

        
    }
}

?>