<?php

namespace Cliente;

class cadastro extends \cadastro
{
    
    public function registrarVenda(){

        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }


}

?>