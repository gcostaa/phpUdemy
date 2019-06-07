<?php

$nome = "Gustavo costa";
//DEIXAR TEXTO MAISCULO
echo strtolower($nome);
echo"<br>";
//DEIXAR TEXTO minusculo
echo strtoupper($nome);
echo"<br>";
//DEIXAR Primeiras letras maisculas
echo ucwords($nome);
echo"<br>";
//DEIXAR Primeiras letra
echo ucfirst($nome);
echo"<br>";
//Trocar uma certa letra da palavra
$troca = str_replace("o","0",$nome);
?>

