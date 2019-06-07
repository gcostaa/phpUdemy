<?php

try {
    
    $con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

    $stmt = $con->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

    $stmt->execute();

    //se deixae sem PDO::FETCH_ASSOC ele ira exibir os indices
    $resu = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //o primeiro foreach pega cada linha
    foreach ($resu as $linha) {
        //o segundo foreach le o conteudo de cada linha, onde key é o nome do campo
        foreach ($linha as $key => $value) {
            
            echo "<strong>".$key.":</strong>".$value."<br>";
        }
        echo"==========================================<br>";
    }
    

} catch (\PDOException $th) {
    
    echo "Deu erro";
}


?>