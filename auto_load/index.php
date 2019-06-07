<?php

function __autoload($nomedaclasse){

    //tudo isso na mesma pasta
    require_once("$nomedaclasse.php");

    /*desta forma eu não preciso fazer o require em todas as classes
    extendidas, a autoload ve que carro usa transporte e tbm já faz um
    require dela, tanto que se eu der um var_drump no nome da variavel da classe
    ira aparecer o nome da classe*/
}

    $obj = new Carro("Corsa","Novim",100);

    $obj->exibe();


?>