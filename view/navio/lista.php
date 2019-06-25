<?php require_once("../../controller/ListarNavioController.php"); ?>

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
   </body>
</html>