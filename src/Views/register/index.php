<div class="container-fluid container-body d-flex justify-content-center align-items-center">
    <div class="row justify-content-center py-5">
        <div class="col-md-6">
            <div class="container">
                <div class="box-login d-flex justify-content-center align-items-center">
                    <div class="card-header">
                        <h4 class="login-subtitulo d-flex justify-content-center py-4"><?php echo $page_title ?? 'Cadastro'; ?></h4>
                    </div>
                    <div class="card-body">
                    <!--mostrar erros se houver -->
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo htmlspecialchars($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <form method="POST" action="/register" class="">
                            <div class="mb-3 form-group d-flex flex-column">
                                <label for="name" class="pb-1">Nome Completo</label>
                                <input type="text" 
                                    class="input"
                                    id="name"
                                    name="name"
                                    value="<?php echo htmlspecialchars($old_data['name'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3 form-group d-flex flex-column">
                                <label for="email" class="pb-1">Email</label>
                                <input type="email"
                                    class="input"
                                    id="email"
                                    name="email"
                                    placeholder="seuemail@exemplo.com"
                                    value="<?php echo htmlspecialchars($old_data['email'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3 form-group d-flex flex-column">
                                <label for="cpf" class="pb-1">CPF</label>
                                <input type="text"
                                    class="input"
                                    id="cpf"
                                    name="cpf"
                                    value="<?php echo htmlspecialchars($old_data['cpf'] ?? ''); ?>" 
                                    placeholder="000.000.000-00"
                                    required>
                            </div>
                            <div class="mb-3 form-group d-flex flex-column">
                                <label for="password" class="pb-1">Senha</label>
                                <input type="password"
                                    class="input"
                                    id="password"
                                    name="password" 
                                    required>
                            </div>
                            <div class="mb-3 form-group d-flex flex-column">
                                <label for="password-confirm" class="pb-1">Confirmar Senha</label>
                                <input type="password"
                                    class="input"
                                    id="password_confirm"
                                    name="password_confirm" 
                                    required>
                            </div>
                            <div class="d-flex justify-content-center align-items-center text-align-center">
                                <button type="submit" class="btn btn-medium login-cadastre">
                                    <i class="fa fa-lightbulb me-1"></i>Criar Conta
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


