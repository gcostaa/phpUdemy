<?php

interface Veiculo{

    public function acelerar($velo);
    public function frenar($velo);
    public function marcha($numero);

}

class Carro  implements Veiculo
{

    public function acelerar($velo){
        echo "Velocidade $velo KM/H";
    }

    public function frenar($velo){
        echo "Velocidade $velo KM/H";
    }

    public function marcha($numero){
        echo "Marcha $numero";
    }
    
}

$carro = new Carro();

$carro->marcha(2);




?>