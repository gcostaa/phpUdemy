<?php

Class Carro{

private $nome;
private $ano;

public function getNome(){

	return $this->nome;

}

public function setNome($nome){

	$this->nome=$nome;
}

public function getAno(){

	return $this->ano;

}

public function setAno($ano){

	$this->ano=$ano;
}


public function exibe(){

	return array(

		"nome"=>$this->getNome(),
		"ano"=>$this->getAno()

	);

}

}


$teste = new Carro();

$outroteste = new Carro();

$teste->setNome('Corsa');
$teste->setAno('1996');

$outroteste->setNome('Celta');
$outroteste->setAno('2005');

print_r($teste->exibe());
echo "<br><br>";
print_r($outroteste->exibe());

?>