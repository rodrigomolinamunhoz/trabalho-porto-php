<?php require_once("../../view/verifica-sessao.php"); ?>
<?php require_once("../../controller/ListarNavioController.php"); ?>

<!DOCTYPE HTML>
<html>
   <?php include("../head.php") ?>
   <body>
        <?php include("../menu-painel.php"); ?>
        <div class="container">
            <div class="row">
                <h1 class="display-4">Lista de Navios</h1>
            </div>
            <div class="row">
                <a class="btn btn-primary" href="http://localhost/trabalho-porto-php/view/navio/cadastro.php" role="button">Cadastrar</a>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Matrícula</th>
                            <th>Descarregou</th>
                            <th>Ativo</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php new ListarNavioController(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include("../scripts.php"); ?>
   </body>
</html>