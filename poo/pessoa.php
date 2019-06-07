<?php

	class Pessoa
	{
		public $nome;

		public function falar(){

			echo "Ola, eu sou ".$this->nome;


		}
		
	}


	$fulano = new Pessoa();

	$fulano->nome="Gustavo";

	echo $fulano->falar();


?>