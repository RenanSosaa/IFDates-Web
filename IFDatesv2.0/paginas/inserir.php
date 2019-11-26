<?php 
require_once 'conexao.php';
 
if($_POST) {
    if(empty($_POST['nome']) || empty($_POST['idade']) || empty($_POST['curso']) || empty($_POST['maticula']) || empty($_POST['email']) || empty($_POST['senha'])) {
        header("Location: pagina_inserir.php?erro=true");
    }
    else {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $curso = $_POST['curso'];
        $matricula = $_POST['matricula'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        if ($_POST['senha'] !=='' && $_POST['confsenha'] !== '')  
        {
        $verifica = false;   
        if ($senha!==$_POST['confsenha']) {
        alert('As senhas não estão iguais');
        } 
    else 
        if(empty($_POST['nome']))
        {
            $errors['nome'] = " em branco!";
        }
        else{        
    if (!preg_match("/^[a-zA-Z'-]+$/", $nome)) {
    $error[] = 'Caracteres especiais detectados, se tiver usando, remova-os.';
            }
        
    else
        if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
        $verifica=true;
         } else 
            {
        echo "Endereço de email inválido! \n";
            }
        }
else
        if ($verifica == true)
        {
        $sql = "INSERT INTO cadastro (nome, idade,  curso, matricula, email, senha) VALUES ('$nome', '$idade', '$curso', '$matricula', '$email', '$senha')";
        if($conexao->query($sql) === TRUE) {
            echo '<p>Usuário inserido com sucesso!</p>';
        } else {
            echo "Erro '$sql' " . $connect->connect_error;
        }

        $conexao->close();
    }
    else 
    {
     header("Location: cadastro.php");   
    }
}
}
