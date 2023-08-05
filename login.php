<?php
    // Inicializando SESSÃO PHP
    session_start();

    $email = "mateus@senac.com";
    $senha = "P@SSw0rd";

    if ($email == $_POST['campo_email'] && $senha == $_POST['campo_senha']) {
        // Variável de SESSAO para controle de LOGIN
        $_SESSION['logado'] = 1;
        $_SESSION['adm'] = 0;

        header("Location: sistema.php");
    } else {
        // Variável de SESSAO para controle de LOGIN
        $_SESSION['logado'] = 0;
        
        header("Location: index.php");
    }    
?>