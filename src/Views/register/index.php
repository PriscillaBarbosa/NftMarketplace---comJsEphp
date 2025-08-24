<div class="container-fluid background-form">
    <div class="row justify-content-center py-5">
        <div class="col-md-6">
            <div class="container">

            
                <div class="card">
                    <div class="card-header">
                        <h4 class="form-titulo d-flex justify-content-center py-4"><?php echo $page_title ?? 'Cadastro'; ?></h4>
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
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome Completo</label>
                                <input type="text" 
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    value="<?php echo htmlspecialchars($old_data['name'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="<?php echo htmlspecialchars($old_data['email'] ?? ''); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text"
                                    class="form-control"
                                    id="cpf"
                                    name="cpf"
                                    value="<?php echo htmlspecialchars($old_data['cpf'] ?? ''); ?>" 
                                    placeholder="000.000.000-00"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password"
                                    class="form-control"
                                    id="password"
                                    name="password" 
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Confirmar Senha</label>
                                <input type="password"
                                    class="form-control"
                                    id="password_confirm"
                                    name="password_confirm" 
                                    required>
                            </div>
                            <div class="text-align-center">
                                <button type="submit" class="btn btn-medium">
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