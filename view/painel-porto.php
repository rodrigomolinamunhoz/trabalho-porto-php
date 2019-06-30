<?php
    session_start();

    if (!isset($_SESSION['usuario_logado'])) {
        header("Location:index.php");	
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <?php include("head.php"); ?>
  <body>
    <?php include("menu-painel.php"); ?>
    <?php include("scripts.php"); ?>
  </body>
</html>