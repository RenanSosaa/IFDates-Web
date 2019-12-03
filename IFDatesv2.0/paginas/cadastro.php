<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once 'header.php'; ?>
<div class="row ">
    <div class="col doze capa_mp">
        Cadastro
    </div>
    <div class="row parte2">
        <div class="row espaco">

        </div>

        <div class="col quatro espaco">

        </div>

        <div class="col tres">

            <form id="id_formulario" name="id_formulario" action="inserir.php" method="post" onsubmit="testeform">
                <section class="fundo">
                    <label for="id_nome" class="titulo"></label> </br>
                    <input id="id_nome"
                           class="campo"
                           maxlength="60"
                           placeholder="Nome completo..."
                           type="text"
                           name="nome"
                           onkeypress="return Onlychars(event)"


                           required />
                </section>

                <section class="fundo">
                    <label for="id_email" class="titulo"></label></br>
                    <input id="id_email"
                           class="campo"
                           placeholder="Email..."
                           type="email"
                           name="campo_email" 
                           required /> 
                </section>

                <section class="fundo">
                    <label for="id_matricula" class="titulo"></label> </br>
                    <input id="id_matricula"
                           class="campo"
                           maxlength="60"
                           placeholder="Matrícula..."
                           type="text"
                           name="matricula"

                           required />
                </section>
        </div>
        <div class="col tres">
            <section class="fundo">
                <label for="id_idade" class="titulo"></label> </br>
                <input id="id_idade"
                       class="campo"
                       maxlength="60"
                       placeholder="Data de nascimento..."
                       type="text"
                       name="idade"

                       required />
            </section>



            <section class="fundo">
                <label for="id_senha" class="titulo"></label></br>
                <input id="id_senha"
                       class="campo"
                       placeholder="Senha..."
                       onblur="checaTamanho(this)"
                       type="password"
                       name="senha"
                       oninput="checaTamanho(el)"
                       required /> 
            </section>

            <section class="fundo">
                <label for="id_confsenha" class="titulo"></label> </br>
                <input id="id_confsenha"
                       class="campo"
                       placeholder="Confirme a senha..."
                       type="password"
                       name="confsenha"
                       required /> 
            </section>
        </div>
        <div class="row">
            
        <div class="col quatro espaco">
            
        </div>
        
            
            <div class="col dois ">
                <input class="button"
                       type="reset" 
                       name="redefinir"
                       value="Redefinir"/>
            </div>
                <div class="col um espaco">
                    
                </div>
            <div class="col dois">
                <input class="button"
                       type="submit"
                       value="Enviar" 
                       /> 
            </div>
            
        </div>
        <div class="row espaco2">

        </div>

    </div>
</div>
<script src="../scripts/funcoes.js"></script>
<?php include_once 'footer.php'; ?>
