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

    ?>