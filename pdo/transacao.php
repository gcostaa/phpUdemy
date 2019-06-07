<?php

try {
    
    $con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

    //INICIA UMA TRANSAÇÃO
    $con->beginTransaction();

    //ele identifica os parm
    $stmt = $con->prepare("DELETE FROM tb_usuario WHERE idusuario=?");

    $id="1";

    //bindParam significa ligar os parm que passamos na query acima

    $stmt->execute(array($id));

    //FAZ COM QUE A TRANSAÇÃO SEJA CONCLUIDA
    $con->commit();

    echo "Dado excluido";

} catch (\Throwable $th) {
    echo "Deu erro!<br>".$th;
    //NÃO CONCLUI A TRANSAÇÃO
    $con->rollback();
}

?>