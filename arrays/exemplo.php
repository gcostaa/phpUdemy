<?php  

$arrayName = array('nome' => 'Gustavo', 'idade'=>18);

foreach ($arrayName as $key => $value) {

	echo "Campo...$key: $value<br>";
}

echo "<br>";

var_dump($arrayName);

?>