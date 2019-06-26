<?php
	session_start(); // inicia a sessão
	
	session_destroy(); //Destrói as variáveis da sessão atual

	header('Location:index.php'); //Redireciona para a página de login
?>