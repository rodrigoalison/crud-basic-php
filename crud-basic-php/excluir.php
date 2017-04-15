<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Excluir Cadastro de Cliente</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Excluir Cadastro de Cliente</h2>
        <?php
        //Ao clicar no botão
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $cliente_id = $_REQUEST["id"];
            
            $sql = "delete from clientes where cliente_id = $cliente_id;";

            $query = mysql_query($sql, $conexao);

            echo "Registro excluído com sucesso. <a href='./'>Voltar</a>";
        }
        else { 
            $cliente_id = $_REQUEST["id"];
                        
            //Comando SQL a ser executado no banco de dados
            $sql = "select cliente_id, nome, sobrenome from clientes where cliente_id = $cliente_id;";

            //Executa o comando SQL no banco de dados   
            $query = mysql_query($sql, $conexao);
            $resultado = mysql_fetch_array($query);
            ?>
            <form method="post" action="excluir.php?id=<?php echo $resultado["cliente_id"] ?>">
                Deseja mesmo excluir o cadastro de <?php echo $resultado["nome"]." ".$resultado["sobrenome"] ?>?<br><br>
                <input type="hidden" value="<?php echo $resultado["cliente_id"] ?>">
                <input type="submit" name="btn" value="Sim"> <a href="./">Voltar</a>            
            </form>
        <?php } ?>
    </body>
</html>