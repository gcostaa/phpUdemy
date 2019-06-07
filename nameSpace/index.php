<?php

require_once("config.php");

use Cliente\cadastro; //para usar um namespace

$cad = new cadastro();
$cad->setNome("Gustavo");
$cad->setEmail("gustavokc05061999@gmail.com");
$cad->setSenha("gu050699");
$cad->registrarVenda();
//aqui o método tostring entra em ação
//echo $cad;

?>