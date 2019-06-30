<?php require_once("../../view/verifica-sessao.php"); ?>

<!DOCTYPE HTML>
<html>
   <?php include("../head.php") ?>
   <body>
      <?php include("../menu-painel.php"); ?>
      <div class="container">
         <div class="row">
            <div class="col flex-unordered">
            </div>
            <div class="col flex-last">
               <form method="post" action="http://localhost/trabalho-porto-php/controller/CadastrarNavioController.php" id="form" name="form" class="col-10">
                  <h2 class="text-center">Cadastro Navio</h2>
                  <div class="form-group">
                     <label>Matrícula:</label>
                     <input type="text" class="form-control" id="matricula" name="matricula" minlength="7" maxlength="7" required>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                  </div>
               </form>
            </div>
            <div class="col flex-first">
            </div>
         </div>
      </div>
   </body>
</html>