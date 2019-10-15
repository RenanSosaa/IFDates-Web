<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/normaliza.css">
        <link rel="stylesheet" href="../css/responsivo.css">
        <link rel="stylesheet" href="../css/new_style.css">
    </head>
    <body class="fundo_login">

        <div class="row">

            <div class="col quatro">
                <div class="coluna_um">
                </div>
            </div>

            <div class="col quatro">
                <div class="titulo_login">Faça Login!</div>
            </div>
        </div>

        <div class="row">
            <div class="col quatro coluna_um">

            </div>

            <div class="col quatro">
                <section>
                    <label for="id_matricula" class="login_mat">Matrícula</label> 
                    <input id="id_matricula"
                           maxlength="60"
                           placeholder="Digite sua matrícula..."
                           type="text"
                           name="matricula"

                           required />
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col quatro coluna_um">

            </div>
            <div class="col quatro">
                <section class="fundo">
                    <label for="id_senha" class="login_senha">Senha</label>
                    <input id="id_senha"
                           placeholder="Digite sua senha..."
                           type="password"
                           name="senha"
                           required /> 
                </section>
            </div>
        </div>   
        <div class="row">
            <div class="col quatro coluna_um">

            </div>
            <div class="col quatro">
                <section>
                    <input class="button1"
                           type="reset" 
                           name="redefinir"
                           value="Redefinir"
                           onclick="limpalogin()"
                           />
      
                    
                    <input class="button2"
                           type="submit"
                           name="Enviar"
                           value="Enviar"
                           onclick="login()"
                           /> 
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col quatro coluna_um">

            </div>

            <div class="col quatro voltar">
                <a href="index.php" class="link"> Voltar</a>
            </div>
        </div>

     <script src="../scripts/funcoes.js"></script>
    </body>
</html>

