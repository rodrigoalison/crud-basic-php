<?php      
    //Dados do banco
    $servidor = "localhost";
    $banco    = "trabalho";
    $usuario  = "trabalho";
    $senha    = "trabalho.123";
    
    $conexao = mysql_connect($servidor, $usuario, $senha);
    mysql_select_db($banco, $conexao);
    
    //Define o charset
    mysql_set_charset('utf8');
?>