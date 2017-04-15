<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editar Cadastro de Cliente</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Editar Cadastro de Cliente</h2>
        <?php
        //Ao clicar no botão
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            //Carregar valor nas variáveis
            $cliente_id = $_REQUEST["id"];
            $nome = $_REQUEST["nome"];
            $sobrenome = $_REQUEST["sobrenome"];
            $email = $_REQUEST["email"];
            $nascimento = $_REQUEST["nascimento"];
            $telefone = $_REQUEST["telefone"];
            $rg = $_REQUEST["rg"];
            $cpf = $_REQUEST["cpf"];
            $logradouro = $_REQUEST["logradouro"];
            $numero = $_REQUEST["numero"];
            $bairro = $_REQUEST["bairro"];
            $cidade = $_REQUEST["cidade"];
            $estado = $_REQUEST["estado"];
            $cep = $_REQUEST["cep"];

            $sql = "update clientes set nome = '$nome', sobrenome = '$sobrenome', email = '$email', nascimento = '$nascimento', telefone = '$telefone', rg = '$rg', cpf = '$cpf', logradouro = '$logradouro', numero = '$numero', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep' where cliente_id = $cliente_id;";

            $query = mysql_query($sql, $conexao);

            echo "Registro alterado com sucesso. <a href='./'>Voltar</a>";
        }
        else { 
            $cliente_id = $_REQUEST["id"];
                        
            //Comando SQL a ser executado no banco de dados
            $sql = "select cliente_id, nome, sobrenome, email, nascimento, telefone, rg, cpf, logradouro, numero, bairro, cidade, estado, cep from clientes where cliente_id = $cliente_id;";

            //Executa o comando SQL no banco de dados   
            $query = mysql_query($sql, $conexao);
            $resultado = mysql_fetch_array($query);
            ?>
            <form method="post" action="alterar.php?id=<?php echo $resultado["cliente_id"] ?>">
                <input type="hidden" value="<?php echo $resultado["cliente_id"] ?>">
                <label>
                    Nome<br>
                    <input type="text" name="nome" value="<?php echo $resultado["nome"] ?>"><br>
                </label>
                <label>
                    Sobrenome<br>
                    <input type="text" name="sobrenome" value="<?php echo $resultado["sobrenome"] ?>"><br>
                </label>
                <label>
                    E-mail<br>
                    <input type="text" name="email" value="<?php echo $resultado["email"] ?>"><br>
                </label>
                <label>
                    Nascimento<br>
                    <input type="text" name="nascimento" value="<?php echo $resultado["nascimento"] ?>"><br>
                </label>
                <label>
                    Telefone<br>
                    <input type="text" name="telefone" value="<?php echo $resultado["telefone"] ?>"><br>
                </label>
                <label>
                    RG<br>
                    <input type="text" name="rg" value="<?php echo $resultado["rg"] ?>"><br>
                </label>
                <label>
                    CPF<br>
                    <input type="text" name="cpf" value="<?php echo $resultado["cpf"] ?>"><br>
                </label>
                <label>
                    Logradouro<br>
                    <input type="text" name="logradouro" value="<?php echo $resultado["logradouro"] ?>"><br>
                </label>
                <label>
                    Número<br>
                    <input type="text" name="numero" value="<?php echo $resultado["numero"] ?>"><br>
                </label>
                <label>
                    Bairro<br>
                    <input type="text" name="bairro" value="<?php echo $resultado["bairro"] ?>"><br>
                </label>
                <label>
                    Cidade<br>
                    <input type="text" name="cidade" value="<?php echo $resultado["cidade"] ?>"><br>
                </label>
                <label>
                    Estado<br>
                    <input type="text" name="estado" value="<?php echo $resultado["estado"] ?>"><br>
                </label>
                <label>
                    CEP<br>
                    <input type="text" name="cep" value="<?php echo $resultado["cep"] ?>"><br>
                </label><br>
                <input type="submit" name="btn" value="Salvar"> <a href="./">Voltar</a>
            </form>
        <?php } ?>
    </body>
</html>