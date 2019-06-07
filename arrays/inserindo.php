<?php

$vetor = array();

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


echo "<br><br>";

foreach ($vetor as $key => $value) {
	echo "<br>";
		foreach ($value as $key => $value) {

			echo "$key...$value<br>";
		}
	
}


?>