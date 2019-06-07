<?php
/*

        ESSE É UM DOS JEITOS


function incluriClasse($nomedaclasse){

    //verifica se o arquivo existe no diretorio
    if(file_exists("Classes". DIRECTORY_SEPARATOR .$nomedaclasse.".php")===true)
    {

        require_once("Classes". DIRECTORY_SEPARATOR .$nomedaclasse.".php");
    }
}

spl_autoload_register("incluriClasse");
*/

    spl_autoload_register(function($nomedaclasse){
        //verifica se o arquivo existe no diretorio
        if(file_exists("Classes" . DIRECTORY_SEPARATOR . $nomedaclasse.".php")===true)
        {
            //A CONSTANTE DIRECTORY_SEPARATOR PEGA O SEPARADOR O so
            require_once("Classes" . DIRECTORY_SEPARATOR . $nomedaclasse.".php");
        }
    });

    $obj = new Carro("Corsa","Novim",100);

    $obj->exibe();


?>