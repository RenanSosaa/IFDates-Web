<?php include_once 'header.php'; ?>
<div class="col doze capa_mp">
    Perfil
</div>
<div class="row parte2">
    <div class="row espaco2"></div>
 

        <div class="texto_perfil">
            Aqui você pode alterar algumas informações do seu perfil, como o email e senha...
        </div>
    
    <div class="row espaco">

    </div>
    <div class="row">

        <div class="col quatro espaco"></div>
        <div class="col dois">

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
    
    </div>
    <div class="row">
      <div class="col dois espaco">
            
        </div>
     
        <div class="col dois">
            <input class="button_perfil2"
                   type="submit"
                   value="Salvar" 
                   /> 
        </div>
    <div class="row">
         <div class="col cinco espaco">
            
        </div>
          <div class="col um">
            <input class="button_perfil"
                   type="submit"
                   value="Excluir perfil" 
                   /> 
         </div>
    </div>
    </div>
    <div class="row espaco2">

    </div>

</div>


<?php include_once 'footer.php'; ?>
