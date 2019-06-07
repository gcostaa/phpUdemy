<?php


class Carro extends Transporte
    {
        

        private $qtrodas;

        function __construct($nome,$tipo,$valor){

            $this->setNome($nome);
            $this->setTipo($tipo);
            $this->setValor($valor);

        }

        public function setQtRoda($qt){

            $this->qtrodas=$qt;

        }

        public function getQtRoda(){
            return $this->qtrodas;
        }

        public function exibe(){

            echo $this->getNome()."<br>". $this->getTipo()."<br>". $this->getValor()."<br>". $this->getQtRoda();

        }

    }

?>