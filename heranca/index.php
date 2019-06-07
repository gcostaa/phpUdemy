<?php

    class Transporte
    {
        
        protected $nome;
        public $tipo;
        public $valor;
        private $dono;


            public function getNome()
            {
                return $this->nome;
            }

            public function setNome($nome)
            {
                $this->nome = $nome;
            }

            public function getTipo()
            {
                return $this->tipo;
            }

            public function setTipo($tipo)
            {
                $this->tipo = $tipo;
            }

            public function getValor()
            {
                return $this->valor;
            }

            public function setValor($valor)
            {
                $this->valor = $valor;
            }

            public function getDono()
            {
                return $this->dono;
            }

            public function setDono($dono)
            {
                $this->dono = $dono;
            }


    }

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
    

    $obj = new Carro("Corsa","Novim",100);

    $obj->exibe();

?>