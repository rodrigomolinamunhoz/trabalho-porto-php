<div class="container">
    <div class="login-form">
        <form action="../controller/LoginController.php" method="post">
            <h2 class="text-center">Login</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuário" id="login" name="login" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <a class="btn btn-primary" href="http://localhost/trabalho-porto-php/view/cadastro-usuario-transportador.php" role="button">Cadastrar Transportadora</a>
        </div>
        <div class="col-sm">
        </div>
    </div>
</div>