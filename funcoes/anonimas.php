<?php

//PASSAR UMA FUNÇÃO COMO PARAMETRO

function teste($callback){

	$callback();

}

//repare que aqui eu não preciso passar o nome da função
teste(function(){

	echo "FEITO";

});

echo "<br><br><br>";


$variavel = function($a){

	echo "$a";

};


$variavel("Gustavo");



?>