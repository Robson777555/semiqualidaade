<?php
	session_start();
	
	// Verifica se as credenciais são válidas
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Aqui você pode implementar a lógica de verificação das credenciais, como consultar um banco de dados.
	// Vamos assumir que o usuário e a senha corretos sejam "admin" e "senha123".
	if ($username === 'admin' && $password === 'senha123') {
		// Credenciais corretas, define a variável de sessão para indicar que o usuário está logado
		$_SESSION['logged_in'] = true;
		
		// Redireciona para a página inicial
		header('Location: index.php');
		exit;
	} else {
		// Credenciais incorretas, redireciona de volta para a página de login com uma mensagem de erro
		header('Location: login.php?error=1');
		exit;
	}
?>
