<?php

$filename = "logo.png";

//file_get_contents le TODO conteudo de um arquivo e retorna binario
//base64encode pega o binario e transforma em string
$base64 = base64_encode(file_get_contents($filename));

// finfo(FILEINFO_MIME_TYPE) pega o tipo do arquivo
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

//para testar copia toda string e cola na barra de pesquisa
$base64encode = "data:". $mimetype .";base64,".$base64;

?>

<a href="<?=$base64encode?>" target="_blank"> LINK PARA IMAGEM</a>

<img src="<?=$base64encode?>"/>