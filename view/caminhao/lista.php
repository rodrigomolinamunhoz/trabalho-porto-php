<?php require_once("../../controller/ListarCaminhaoController.php"); ?>

<!DOCTYPE HTML>
<html>
   <?php include("../head.php") ?>
   <body>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Placa</th>
                            <th>Descarregou</th>
                            <th>Ativo</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php new ListarCaminhaoController(); ?>
                    </tbody>
                </table>
            </div>
        </div>
   </body>
</html>