<?php

//ABRE SESSÃO
session_start();
session_regenerate_id();

//FECHA SESSÃO
//unset($_SESSION['nome'])s

//RETIRA VC DO SITE
//session_destroy();

//OBRIGA A GERAR UM NOVO ID DE SESSÃO
//session_regenerate_id();

//DESTA FORMA PODE-SE RECUPERAR A SESSÃO
//session_id('t0ddkjubkol160sfjmr00i1bik');

echo $_SESSION['nome']."<br>";
echo session_id()."<br>";
echo session_save_path();


?>