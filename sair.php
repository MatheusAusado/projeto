<?php
    if(isset($_REQUEST["sair"])){
        session_destroy();
        header("Location: login.php?pg=sair");
    }
?>