<?php
    session_start(); //iniciando sessão do usuário

    exec('gpio -g mode 18 out');
    exec('gpio -g write 18 1');
    sleep(3);
    exec('gpio -g write 18 0');
    $_SESSION['aciona'] = True;
    $_SESSION['nomeGrupo1'] = "Grupo 1";
    $_SESSION['check12'] = True;
    $_SESSION['hora1'] = date("H:i:s");
    $_SESSION['dia1'] = date('d-m-Y');
    header('Location: home.php'); 
?>
