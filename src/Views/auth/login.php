

<div class="container-body d-flex justify-content-center align-items-center">
    <div class="box-login d-flex justify-content-center align-items-center">
        <h1 class="login-titulo">Lobix</h1>
        <h5 class="login-subtitulo pb-2">Entre na sua conta</h5>
        <form action="/login/processar" method="POST" class="form-login d-flex flex-column">
            <div class="form-group d-flex flex-column">
                <label for="email" class="pb-1">Email</label>
                <div class="login-input-email">
                    <img src="/assets/img/icones/componente-user.svg" alt="" class="componente-login-esquerda">
                    <input class="input" type="email" name="email" id="email" placeholder="seuemail@exemplo.com">
                </div>
            </div>
            <div class="form-group d-flex flex-column pt-3">
                <label for="senha" class="pb-1">Senha</label>
                <div class="login-input-senha">
                    <img src="/assets/img/icones/componente-cadeado.svg" alt="Ícone de usuário" class="componente-login-esquerda">
                    <input class="input" type="senha" name="senha" id="senha" placeholder="******">
                    <img src="/assets/img/icones/componente-olho.svg" alt="Mostrar/Esconder senha" class="componente-login-direita"> 
                </div>
            </div>
            <!--<div class="form-check">
                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                <label class="form-check-label" for="radioDefault1">
                    Lembrar de mim
                </label>
            </div>-->
            <button class="btn-entrar mt-4" type="submit">Entrar</button>
            <div class="d-flex flex-column mt-4 align-items-center justify-content-center">
                <p class="login-cadastre mb-0">Não tem uma conta?</p>
                <span class="login-cadastre"><strong>Cadastre-se</strong></span>
            </div>
        </form>
    </div>
</div>