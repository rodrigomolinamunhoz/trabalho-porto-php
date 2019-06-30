<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="http://localhost/trabalho-porto-php/view/painel-porto.php">Painel Porto</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/trabalho-porto-php/view/caminhao/lista.php">Cadastro de Caminhão</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/trabalho-porto-php/view/navio/lista.php">Cadastro de Navio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cadastro de Container</a>
            </li>
        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link disabled" href="#"> <strong>Bem-Vindo,</strong> <?php echo $_SESSION['usuario_logado'] ?></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-danger" href="http://localhost/trabalho-porto-php/controller/LogoutController.php" role="button">Sair</a>
        </form>
    </div>
</nav>