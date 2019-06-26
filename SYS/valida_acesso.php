<?php

    session_start(); //iniciando sessão do usuário

    //Verificando a existência da autenticação
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('Location: index.php?login=erro2');
    }
?>