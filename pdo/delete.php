<?php

try {
    
    $con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//ele identifica os parm
$stmt = $con->prepare("DELETE FROM tb_usuario WHERE idusuario=:ID");

$id="2";

//bindParam significa ligar os parm que passamos na query acima

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dado excluido";

} catch (\Throwable $th) {
    echo "Deu erro!<br>".$th;
}

?>