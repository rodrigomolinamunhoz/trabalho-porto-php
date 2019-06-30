<!DOCTYPE HTML>
<html>
   <?php include("head.php") ?>
   <body>
      <div class="container">
         <div class="row">
            <div class="col flex-unordered">
            </div>
            <div class="col flex-last">
               <form method="post" action="http://localhost/trabalho-porto-php/controller/CadastrarUsuarioController.php" id="form" name="form" class="col-10">
                  <h2 class="text-center">Cadastro Transportadora</h2>
                  <div class="form-group">
                     <label>Nome Transportadora:</label>
                     <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" required>
                  </div>
                  <div class="form-group">
                     <label>Login:</label>
                     <input type="text" class="form-control" id="login" name="login" required>
                  </div>
                  <div class="form-group">
                     <label>Senha:</label>
                     <input type="password" class="form-control" id="senha" name="senha" required>
                  </div>
                  <div class="form-group">
                     <label>Confirmar Senha:</label>
                     <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" required>
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