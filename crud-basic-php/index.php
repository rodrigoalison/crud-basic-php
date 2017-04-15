<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Clientes</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Lista de Clientes</h2>
        <a href="cadastrar.php">Novo Cliente</a><br><br>
        <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th colspan="2">Ações</th>
            </tr>
            <?php
                //Comando SQL a ser executado no banco de dados
                $sql = "select cliente_id, nome, sobrenome, telefone, email, cidade, estado from clientes;";
                
                //Executa o comando SQL no banco de dados   
                $query = mysql_query($sql, $conexao);
                
                while($resultado = mysql_fetch_array($query)){ ?>
                    <tr>
                        <td><?php echo $resultado["cliente_id"] ?></td>
                        <td><?php echo $resultado["nome"] ?></td>
                        <td><?php echo $resultado["sobrenome"] ?></td>
                        <td><?php echo $resultado["telefone"] ?></td>
                        <td><?php echo $resultado["email"] ?></td>
                        <td><?php echo $resultado["cidade"] ?></td>
                        <td><?php echo $resultado["estado"] ?></td>
                        <td><a href="alterar.php?id=<?php echo $resultado["cliente_id"] ?>">Editar</a></td>
                        <td><a href="excluir.php?id=<?php echo $resultado["cliente_id"] ?>">Excluir</a></td>
                    </tr>
                <?php } ?>
        </table>
    </body>
</html>