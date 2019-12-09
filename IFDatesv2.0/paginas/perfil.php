<?php include_once 'header.php'; ?>
<div class="col doze capa_mp">
    Perfil
</div>
<div class="row parte2">
    <div class="row espaco"></div>
    <div class="col dois espaco"></div>
    <div class="col oito">

        <h2 class="titulo">
            Resumo
        </h2>
        <div class="texto">
            Aqui você pode alterar algumas informações do seu perfil...
        </div>
    </div>
    <div class="col dois espaco">

    </div>
    <div class="col dois espaco"></div>
    <div class="col tres">

        <form id="id_formulario" name="id_formulario" action="inserir.php" method="post" onsubmit="testeform">

            <section class="fundo">
                <label for="id_email" class="titulo"></label></br>
                <input id="id_email"
                       class="campo"
                       placeholder="Email..."
                       type="email"
                       name="campo_email" 
                       required /> 
            </section>

    </div>

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

    <div class="row">

        <div class="col quatro espaco">

        </div>


        <div class="col dois ">
            <input class="button"
                   type="reset" 
                   name="redefinir"
                   value="Redefinir"/>
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


<?php include_once 'footer.php'; ?>
