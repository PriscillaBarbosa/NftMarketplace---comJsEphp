<div class="container-body d-flex justify-content-center align-items-center">
    <div class="box-login d-flex justify-content-center align-items-center">
        <h1 class="login-titulo">Esqueceu a senha?</h1>
        <h5 class="login-subtitulo pb-2">Informe seu e-mail para recuperação</h5>

        <form action="/password/send-reset-link" method="POST" class="form-login d-flex flex-column">
            
            <div class="form-group d-flex flex-column">
                <label for="email" class="pb-1">Email</label>
                <div class="login-input-email">
                    <img src="/assets/img/icones/componente-user.svg" alt="" class="componente-login-esquerda">
                    <input class="input" type="email" name="email" id="email" placeholder="seuemail@exemplo.com" required>
                </div>
            </div>

            <button class="btn-entrar mt-4" type="submit">Enviar</button>

            <div class="text-center mt-4">
                <a href="/login" class="login-esqueci"><strong>Voltar para o login</strong></a>
            </div>
        </form>
    </div>
</div>