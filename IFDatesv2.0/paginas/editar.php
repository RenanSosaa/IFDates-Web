<?php 
require_once 'conexao.php';
 
if(!empty($_POST['id'])) {
    
    $id = $_POST['id'];
    
    if(empty($_POST['nome']) || empty($_POST['usuario']) || empty($_POST['senha'])) {
        header("Location: pagina_editar.php?id=$id&erro=true");
    }
    else {
        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "UPDATE usuarios SET nome = '$nome', usuario = '$usuario', senha = '$senha' WHERE id = $id";
        
        if($conexao->query($sql) === TRUE) {
            echo '<p>Usuário editado com sucesso!</p>';
            echo '<a href="pagina_listar.php"><button type="button">Voltar</button></a>';
        } else {
            echo "Erro '$sql' " . $conexao->connect_error;
        }

        $conexao->close();
    }
}
else {
    header('Location: pagina_listar.php');
}
