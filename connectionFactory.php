<?php
function conexao(){
    $servidor="localhost";
    $usuario="root";
    $senha="fucapi";
    $banco="professores";
    
    mysql_connect($servidor,$usuario,$senha);
    mysql_select_db($banco);
    echo "Conexão bem sucedida<p>";}
?>