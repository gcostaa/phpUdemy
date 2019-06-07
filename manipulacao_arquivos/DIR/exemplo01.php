<?php

$name = "images";

//isdir-> é um diretorio?
if(!is_dir($name))
{   
    //cria pastas
    mkdir($name);
}else{
    //remore o dir
    rmdir($name);
 
}

?>