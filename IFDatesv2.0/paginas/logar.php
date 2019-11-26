<?php

require_once 'conexao.php';

if ($_POST) {


    if (empty($_POST['matricula']) || empty($_POST['senha'])) {
        header("Location: pagina_logar.php?erro=true");
    } else {
        $matricula = $_POST['matricula'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM cadastro WHERE matricula = '$matricula' AND senha = '$senha' ";
        $resultado = $conexao->query($sql);

        $dados = $resultado->fetch_assoc();

         if ($resultado->num_rows > 0) {
             $dados = $resultado->fetch_assoc();
             echo '';
             }
         else {
             echo 'Erro!';
         }    

        $conexao->close();
    }
} else {
    header('Location: pagina_logar.php');
}
?>
