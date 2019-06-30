<?php
    session_start();

    if (!isset($_SESSION['usuario_logado'])) {
        echo "<script>document.location='../index.php'</script>";
    }
?>