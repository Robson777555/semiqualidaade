<?php
	include('config.php');
?>

<?php
	session_start();
	
	// Verifica se o usuário está logado
	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
		// Usuário não está logado, redireciona para a página de login
		header('Location: login.php');
		exit;
	}
	
	
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Gerenciamento de Estoque</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="pagina">
			<div id="topo">
				<a href="index.php"><img src="php.png" alt="" width="200" border="0"></a>
			</div>
			<div id="menu">
				<ul>
					<li>
						<a href="index.php">Início</a>
					</li>
					<li>
						<a href="index.php?pagina=empresa">Sobre a Empresa</a>
					</li>
					<li>
						<a href="index.php?pagina=bermuda">Bermudas</a>
					</li>
					<li>
						<a href="index.php?pagina=moletom">Moletons</a>
					</li>
					<li>
						<a href="index.php?pagina=calca">Calças</a>
					</li>
					<li>
						<a href="index.php?pagina=camiseta">Camisetas</a>
					</li>
					<li>
						<a href="index.php?pagina=servicos">Serviços</a>
					</li>
					<li>
						<a href="index.php?pagina=contato">Fale Conosco</a>
					</li>
					<li>
						<a href="index.php?pagina=upload">Upload</a>
					</li>
				</ul>
			</div>
			<div id="conteudo">
			<?php
				// testar o parâmetro vindo do GET e incluir o arquivo referente a área
				//echo "inc_{$_GET['pagina']}.php";
				if(file_exists("inc_{$_GET['pagina']}.php"))
					include("inc_{$_GET['pagina']}.php");
				else
					include('inc_inicial.php');
			?>
			</div>
			<div id="rodape">Desenvolvido na disciplina de LPWEB &copy; 2023</div>
		</div>
	</body>
</html>