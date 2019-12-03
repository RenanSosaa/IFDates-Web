<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once 'header.php'; ?>
<div class="row parte2">
    <div class="row espaco">

    </div>
    <div class="row">

        <div class="col quatro espaco">

        </div>

        <div class="col quatro">
            <div class="titulo_login">Login</div>
        </div>
    </div>

    <div class="row">
        <div class="col quatro coluna_um">

        </div>

        <div class="col quatro">
            <section>
                <label for="id_matricula" class="login_mat">Matrícula</label> 
                <input id="id_matricula2"
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
           
                <label for="id_senha" class="login_senha">Senha</label>
                <input id="id_senha2"
                       placeholder="Digite sua senha..."
                       type="password"
                       name="senha"
                       required /> 
            
        </div>
    </div>   
    <div class="row">
         
        
        <div class="col quatro coluna_um">

        </div>
        <div class="col quatro">
            <section>
                <input class="buttonl"
                       type="reset" 
                       name="redefinir"
                       value="Redefinir"
                       onclick="limpalogin()"
                       />


                <input class="button"
                       type="submit"
                       name="Enviar"
                       value="Enviar"
                       onclick="login()"
                       /> 
            </section>
        </div>
    </div>
    <div class="row espaco">
      
    </div>
    <div class="row espaco">
      
    </div>
</div>
<script src="../scripts/funcoes.js"></script>
<?php include_once 'footer.php'; ?>
</body>
</html>

