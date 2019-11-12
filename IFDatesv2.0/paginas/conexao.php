<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'ifdates';

//conectar ao banco de dados
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

//teste de conexao
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
//else    echo 'Conexão bem sucedida!'; // comentar após testes


