<!DOCTYPE HTML>
<html>
   <?php include("../head.php") ?>
   <body>
      <div class="container">
         <div class="row">
            <div class="col flex-unordered">
            </div>
            <div class="col flex-last">
               <form method="post" action="http://localhost/trabalho-porto-php/controller/CadastrarNavioController.php" id="form" name="form" class="col-10">
                  <h2 class="text-center">Cadastro Navio</h2>
                  <div class="form-group">
                     <label>Matrícula:</label>
                     <input type="text" class="form-control" id="matricula" name="matricula" required>
                  </div>
                  <div class="form-group">
                     <label>Transportadora:</label>
                     <select class="form-control" id="transportadoraId" name="transportadoraId" required>
                        <option value="">Selecione</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Descarregou:</label>
                     <div class="radio">
                        <label><input type="radio" id="descarregou" name="descarregou" value="1">Sim</label>
                     </div>
                     <div class="radio">
                        <label><input type="radio" id="descarregou" name="descarregou" value="0" checked>Não</label>
                     </div>
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