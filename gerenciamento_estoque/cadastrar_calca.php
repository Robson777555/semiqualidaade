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
        $emReserva = $_POST['emReserva'];

        // Inserir os dados no banco de dados
        $sql = "INSERT INTO calca (marca, emEstoque, emEncomenda, emReserva)
                VALUES ('$marca', '$emEstoque', '$emEncomenda', '$emReserva')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'Calça cadastrada com sucesso.';
        } else {
            echo 'Erro ao cadastrar a Calça: ' . mysqli_error($conn);
        }
    }
    echo '<a href="index.php">Voltar a página inicial</a> ';
?>

<h2>Cadastrar Nova Calça</h2>
<form method="POST" action="">
    <input type="text" name="marca" placeholder="Nome da Marca" required><br>
    <input type="number" name="emEstoque" placeholder="Em estoque" required><br>
    <input type="number" name="emEncomenda" placeholder="Em encomenda" required><br>
    <input type="number" name="emReserva" placeholder="Em reserva" required><br>
    <input type="submit" name="submit" value="Salvar">
</form>



