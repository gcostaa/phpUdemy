<?php

$image = imagecreatefromjpeg("certificado.jpg");

$tilecolor = imagecolorallocate($image,0,0,0);

$gray = imagecolorallocate($image,100,100,100);

imagettftext($image,32,0,320,250,$tilecolor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR.
"Bevan-Regular.ttf","Certificado");

imagettftext($image,32,0,375,350,$tilecolor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR.
"Bevan-Regular.ttf","Gustavo Costa");

imagestring($image,3,440,370,"Concluido em:" .date("d/m/Y"),$tilecolor);

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>