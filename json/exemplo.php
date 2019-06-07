<?php

//$vetor = array('Gustavo'=>'lindo', 'Amanda'=>'feia');

$vetor = array('nome'=> 'jose',
'idade'=>'19');


//push add no fim do array
array_push($vetor, array(

'nome'=> 'Gustavo',
'idade'=>'19'

));

array_push($vetor, array(

'nome'=> 'Amanda',
'idade'=>'20'

));

//unshift add no começo do array
array_unshift($vetor, array(

'nome'=> 'Paula',
'idade'=>'20'

));

print_r($vetor);

/*print_r($vetor);


echo "<br><br>";

foreach ($vetor as $key => $value) {
	echo "<br>";
		foreach ($value as $key => $value) {

			echo "$key...$value<br>";
		}
	
}
*/

/*$valor = json_encode($vetor);

function grava_json($json){

$cria_dir = tempnam('C:\xampp\htdocs\php_udemy\arrays\json', 'teste.txt');

$fp = fopen($cria_dir, "w");

fwrite($fp, $json);

fclose($fp);

echo "SALVO";

}

grava_json($valor);
*/
?>