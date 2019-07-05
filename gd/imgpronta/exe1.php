<?php

$image = imagecreatefromjpeg("certificado.jpg");

$tilecolor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);

imagestring($image,5,450,150,"Certificado",$tilecolor);
imagestring($image,5,440,350,"Gustavo Costa",$tilecolor);
imagestring($image,3,440,370,"Concluido em:" .date("d/m/Y"),$tilecolor);

header("Content-Type: image/jpeg");

//abaixo é para salvar em disco. O segundo param é a qualidade da imagem
imagejpeg($image, "certificadoteste.jpg",10);

imagedestroy($image);

?>