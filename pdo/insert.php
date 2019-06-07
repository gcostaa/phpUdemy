<?php

try {
    
    $con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//ele identifica os parm
$stmt = $con->prepare("INSERT INTO tb_usuario (deslogin,dessenha) VALUES (:LOGIN,:PASSWORD)");

$login="paulalinda";
$pas="04112015";

//bindParam significa ligar os parm que passamos na query acima
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$pas);

$stmt->execute();

echo "Dado cadastrado com sucesso";

} catch (\Throwable $th) {
    echo "Deu erro!<br>".$th;
}

?>