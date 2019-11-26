 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar usuário</title>
    </head>
    <body>
        <?php
        require_once 'conexao.php';

        if (!empty($_GET['id'])) {
            $id = $_GET['id'];

            $sql = "SELECT * FROM usuarios WHERE id = $id ";
            $resultado = $conexao->query($sql);

            $dados = $resultado->fetch_assoc();
            
            $conexao->close();
        }
        else {
            header('Location: pagina_listar.php');
        }
        ?>
        
        <form action="editar.php" method="POST">
            <label for="id_nome">Nome</label>
            <input id="id_nome" name="nome" type="text" value="<?php echo $dados['nome']; ?>" /> 
            <label for="id_usuario">Usuário</label>
            <input id="id_usuario" name="usuario" type="text" value="<?php echo $dados['usuario']; ?>"/> 
            <label for="id_senha">Senha</label>
            <input id="id_senha" name="senha" value="<?php echo $dados['senha']; ?>" type="password" /> 
            <input type="hidden" name="id" value="<?php echo $id?>" />
            <input type="submit" value="Editar"/>
            <?php echo '<a href="pagina_listar.php"><button type="button">Voltar</button></a>';?>
            <?php
            if (!empty($_GET['erro'])) {
                echo '<p style="color:red"> Todos campos são obrigatórios! </p>';
            }
            ?>
        </form>
    </body>
</html>
