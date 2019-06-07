<?php

spl_autoload_register(function($classe){

    //diretorio de classes
    $dirClass="class";
    $filename=$dirClass.DIRECTORY_SEPARATOR.$classe.".php";//todo o caminho
    //echo $filename;
    if(file_exists($filename)){
        require_once($filename);
    }
});


?>