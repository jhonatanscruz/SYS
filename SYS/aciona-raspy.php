<?php
    session_start(); //iniciando sessão do usuário
    exec('gpio -g mode 18 out');
    exec('gpio -g write 18 1');
    sleep(3);
    exec('gpio -g write 18 0');
    $_SESSION['aciona'] = True;
    header('Location: home.php');
?>
