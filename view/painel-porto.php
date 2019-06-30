<?php
    session_start();

    if (!isset($_SESSION['usuario_logado'])) {
        header("Location:index.php");	
        echo "<script>document.location='../index.php'</script>";
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