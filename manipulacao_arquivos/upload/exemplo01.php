<!--deixar sem a action faz com que ele destine para propria pag
o enctype dis o tipo de arquivo que vc ira mandar
multipart/form-data->seram enviados como dados binario
-->
<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button>SEND</button>
</form>

<?php

    //$_SERVER["REQUEST_METHOD"] guarda o tipo de solitação, se é get, post e afins
    if($_SERVER["REQUEST_METHOD"] ==="POST")
    {

        $file = $_FILES["fileUpload"];

        if($file["error"])
        {
            throw new Exception("Error:".$file["error"], 1);
            
        }

        $dirUploads = "uploads";

        if(!is_dir($dirUploads))
        {
            mkdir($dirUploads);
        }

        //move_uploaded_file sua funçaõ é mover da pasta temporario do server para uma pasta que vc criou
        if(move_uploaded_file($file["tmp_name"],$dirUploads . DIRECTORY_SEPARATOR . $file["name"]))
        {
            echo "Feito com sucesso";
        }else{
            echo "não foi possible fazer lo upload";
        }
    }

?>