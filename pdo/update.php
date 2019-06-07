<?php

try {
    
    $con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//ele identifica os parm
$stmt = $con->prepare("UPDATE tb_usuario SET deslogin=:LOGIN, dessenha=:PASSWORD WHERE idusuario=:ID");

$login="Paula Leal";
$pass="Gu";
$id="4";

//bindParam significa ligar os parm que passamos na query acima
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$pass);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dado alterado";

} catch (\Throwable $th) {
    echo "Deu erro!<br>".$th;
}

?>