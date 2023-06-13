<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="pagina">
			<div id="conteudo">
				<h2>Login</h2>
				<form action="processar_login.php" method="POST">
					<label for="username">Nome de usuário:</label>
					<input type="text" name="username" required><br>
					
					<label for="password">Senha:</label>
					<input type="password" name="password" required><br>
					
					<input type="submit" value="Entrar">
				</form>
			</div>
		</div>
	</body>
</html>
