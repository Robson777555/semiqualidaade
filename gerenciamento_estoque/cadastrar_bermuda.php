<?php
    // Conexão com o banco de dados
    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $base = 'estoque';

    $conn = mysqli_connect($servidor, $login, $senha, $base);

    
    // Verificar se o formulário foi enviado
    if (isset($_POST['submit'])) {
        // Obter os dados do formulário
        $marca = $_POST['marca'];
        $emEstoque = $_POST['emEstoque'];
        $emEncomenda = $_POST['emEncomenda'];
        $EmReserva = $_POST['EmReserva'];

        // Inserir os dados no banco de dados
        $sql = "INSERT INTO bermuda (marca, emEstoque, emEncomenda, EmReserva)
                VALUES ('$marca', '$emEstoque', '$emEncomenda', '$EmReserva')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'Bermuda cadastrada com sucesso.';
        } else {
            echo 'Erro ao cadastrar a Bermuda: ' . mysqli_error($conn);
        }
    }
    echo '<a href="index.php">Voltar a página inicial</a> ';
?>

<h2>Cadastrar Nova Bermuda</h2>
<form method="POST" action="">
    <input type="text" name="marca" placeholder="Nome da Marca" required><br>
    <input type="number" name="emEstoque" placeholder="Em estoque" required><br>
    <input type="number" name="emEncomenda" placeholder="Em encomenda" required><br>
    <input type="number" name="EmReserva" placeholder="Em reserva" required><br>
    <input type="submit" name="submit" value="Salvar">
</form>



