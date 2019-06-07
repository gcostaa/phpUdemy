<?php

//fopen pede 2 params, o 1 é o caminho do arquivo, o 2 é como deseja controla-lo
//w+ abre no modo escrita e 0 tudo o que existia
//a+ o conteudo é preservado e o ponteiro movido para o final do arquivo
$file = fopen ("log.txt","w+");
//na documentação tem varios tipos de exibição para o 2 param

//espera um src e o que deseja escrever
fwrite($file, date("Y-m-d"));

fclose($file);

echo "Arquivo criado com sucesso!!";


?>