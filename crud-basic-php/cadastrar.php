<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Clientes</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Cadastro de Clientes</h2>
        <?php
        //Ao clicar no botão
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            //Carregar valor nas variáveis
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

            $sql = "insert into clientes (nome, sobrenome, email, nascimento, telefone, rg, cpf, logradouro, numero, bairro, cidade, estado, cep) values ('$nome','$sobrenome','$email','$nascimento','$telefone','$rg','$cpf','$logradouro','$numero','$bairro','$cidade','$estado','$cep');";

            $query = mysql_query($sql, $conexao);

            echo "Registro salvo com sucesso. <a href='./'>Voltar</a>";
        }
        else { 
            ?>
            <form method="post" action="cadastrar.php">
                <label>
                    Nome<br>
                    <input type="text" name="nome"><br>
                </label>
                <label>
                    Sobrenome<br>
                    <input type="text" name="sobrenome"><br>
                </label>
                <label>
                    E-mail<br>
                    <input type="text" name="email"><br>
                </label>
                <label>
                    Nascimento<br>
                    <input type="text" name="nascimento"><br>
                </label>
                <label>
                    Telefone<br>
                    <input type="text" name="telefone"><br>
                </label>
                <label>
                    RG<br>
                    <input type="text" name="rg"><br>
                </label>
                <label>
                    CPF<br>
                    <input type="text" name="cpf"><br>
                </label>
                <label>
                    Logradouro<br>
                    <input type="text" name="logradouro"><br>
                </label>
                <label>
                    Número<br>
                    <input type="text" name="numero"><br>
                </label>
                <label>
                    Bairro<br>
                    <input type="text" name="bairro"><br>
                </label>
                <label>
                    Cidade<br>
                    <input type="text" name="cidade"><br>
                </label>
                <label>
                    Estado<br>
                    <input type="text" name="estado"><br>
                </label>
                <label>
                    CEP<br>
                    <input type="text" name="cep"><br>
                </label><br>
                <input type="submit" name="btn" value="Salvar">
                <a href="./">Voltar</a>
            </form>
        <?php } ?>
    </body>
</html>