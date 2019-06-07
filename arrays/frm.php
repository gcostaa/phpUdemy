<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];

$vetor = array();

array_unshift($vetor, $nome, $idade);

foreach ($vetor as $key => $value) {
	
	echo "Campo $key....$value<br>";

}
var_dump($vetor);

echo "Sucesso";

?>