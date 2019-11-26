<?php

require_once 'conexao.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        echo '<p>Usuário removido com sucesso!</p>';
        echo '<a href="pagina_listar.php"><button type="button">Voltar</button></a>';
    } else {
        echo "Erro '$sql' " . $conexao->connect_error;
    }

    $conexao->close();
} else {
    header('Location: pagina_listar.php');
}
