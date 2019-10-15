<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/normaliza.css">
        <link rel="stylesheet" href="../css/responsivo.css">
        <link rel="stylesheet" href="../css/estilo.css">
 
 
    </head>
    <body>

        <header class="cabecalho">
            <h1 class="cabecalho2"> Cadastro </h1>
        </header>
        
        <div class="row">
            <div class="col dois">
                <div class="color">
                    
                    <p class="menu">Menu</p>

                    <nav class="itens">
                        <a href="index.php">Página inicial</a>
                    </nav>

                    <nav class="itens">
                        <a href="sobre.php">Sobre o site</a>
                    </nav>

                    
                    <div class="resto">
                        
                    </div>
                
                </div>
                
            </div>
            
            <div class="col oito">
                
                <section class="fundo2"> 
                    <h2 class="titulo">
                        Faça seu cadastro!
                    </h2>
                    <div class="texto">
                        Com este cadastro você poderá ver todos os eventos e encontros de projetos do IFSul Câmpus Camaquã, além de poder 
                        conhecer melhor esses projetos.
                    </div>
                </section>
                
                <form id="id_formulario" name="id_formulario" action="cadastro.html" method="get" onsubmit="testeform">
                <section class="fundo">
                    <label for="id_nome" class="titulo">Nome completo</label><br/>  
                    <input id="id_nome"
                           maxlength="60"
                           placeholder="Nome completo..."
                           type="text"
                           name="nome"
                           onkeypress="return Onlychars(event)"
                           

                           required />
                </section>
                
                <section class="fundo">
                <label for="id_email" class="titulo">Email</label><br/>
                <input id="id_email"
                       placeholder="Insira seu email..."
                       type="email"
                       name="campo_email" 
                       required /> 
                </section>
                
                <section class="fundo">
                    <label for="id_matricula" class="titulo">Matrícula</label></br> 
                    <input id="id_matricula"
                           maxlength="60"
                           placeholder="Digite sua matrícula..."
                           type="text"
                           name="matricula"

                           required />
                </section>
                
               
                
                <section class="fundo">
                <label for="id_senha" class="titulo">Senha</label><br/>
                <input id="id_senha"
                       placeholder="Mínimo 6 caracteres..."
                       onblur="checaTamanho(this)"
                       type="password"
                       name="senha"
                       oninput="checaTamanho(el)"
                       required /> 
                </section>
                
                <section class="fundo">
                <label for="id_confsenha" class="titulo">Confirme sua senha</label><br/>
                <input id="id_confsenha"
                       placeholder="Mínimo 6 caracteres..."
                       type="password"
                       name="confsenha"
                       required /> 
                </section>
                
                <section class="fundo">
                
                    <input class="button"
                       type="reset" 
                       name="redefinir"
                       value="Redefinir"/>
                
                <input class="button"
                       type="button"
                       name="Enviar"
                       value="Enviar"
                       onclick="testeform()"
                       /> 
                </section>
                
            </form>
            <div class="row">
                    <section class="fundo2">

                        <div class="rodape2">

                        </div>
                    </section>
            </div>
            <div class="row">
                    <section class="fundo2">

                        <div class="rodape2">

                        </div>
                    </section>
            </div>
            <div class="row">
                    <section class="fundo2">

                        <div class="rodape_cadastro">

                        </div>
                    </section>
            </div>
            </div>
            <div class="col dois">
                    <div class="direita">
                        
                    </div>
            </div>
            </div>
       <script src="../scripts/funcoes.js"></script>
    </body>
</html>
