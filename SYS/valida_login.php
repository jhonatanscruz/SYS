<?php
	//Acentuação em PHP	
	header("Content-Type: text/html; charset=ISO-8859-1",true);
	
	//Inicialização da sessão do usuário
	session_start();
	
	//Usuários do Sistema
	$usuariosApp = array(
	array('email' => 'admin@admin.com', 'senha' => 'admin'),
	array('email' => 'superuser@admin.com', 'senha' => 'superuser'),
	);
	
	//Variável que verifica a autenticação do usuário
	$autenticado = false;

	//Validação do usuário dentro do array usuariosApp
	foreach($usuariosApp as $user){
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
			$autenticado = true;
		}
	}
	
	//Se for autenticado redireciona para a página principal, senão login=erro
	if($autenticado){
		header('Location: home.php');
	    $_SESSION['autenticado'] = 'SIM'; }
	else{
        header('Location: index.php?login=erro');
	    $_SESSION['autenticado'] = 'NAO'; }
?>