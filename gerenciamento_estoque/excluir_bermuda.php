<?php
    // Conexão com o banco de dados
    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $base = 'estoque';

    $conn = mysqli_connect($servidor, $login, $senha, $base);

    // Verificar se o parâmetro 'id' foi fornecido
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Excluir o CD do banco de dados
        $sql = "DELETE FROM bermuda WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo 'Bermuda excluída com sucesso.';
        } else {
            echo 'Erro ao excluir produto: ' . mysqli_error($conn);
        }
    }
    echo '<a href="index.php">Voltar a página inicial</a> ';
?>
