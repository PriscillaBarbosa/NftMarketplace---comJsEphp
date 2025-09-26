

<div class="container-body">
    <h1 class="login-titulo">Login do Sistema</h1>
    <p>Esta é a página de login. Agora você pode começar a estilizá-la!</p>
    
    <form action="/login/processar" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="seuemail@exemplo.com">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button type="submit">Entrar</button>
    </form>
</div>