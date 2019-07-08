<?php

echo "<pre>";

$comando = system("dir C:", $retorno);

//funcoes de sistema são perigosas, em um exemplo de envio via post ou get, por exemplo
//seria possivel executar uma injeção de comandos