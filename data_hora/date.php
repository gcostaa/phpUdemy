<?php

//lc all->MUDE TODA A CONF QUE EU TENHO DE LOCALIZAÇÃO PARA PORTUGUES, CADA VALOR DENTRO DE ASPAS É UM PADRÃO DE SO
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//echo date("d/m/Y H:i:s");

//Formata uma hora/data local de acordo com a configuração do idioma

echo ucwords(strftime("%A %B"));

?>