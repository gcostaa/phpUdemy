<?php

//PASSAGEM POR FAVOR

$valor1 = 10;

function valor($b){

	return $b+=20;

}

echo valor($valor1)."<br>";
echo $valor1;
///////////////


//ASSAGEM POR VALOR POR REFERENCIA
echo "<br><br>";

$valor2=10;

function valor2(&$b){

	return $b+=20;

}

echo valor2($valor2)."<br>";
echo $valor2;

?>