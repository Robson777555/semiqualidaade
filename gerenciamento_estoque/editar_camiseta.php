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

        // Consultar o CD pelo ID
        $sql = "SELECT * FROM camiseta WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verificar se o formulário foi enviado
            if (isset($_POST['submit'])) {
                // Obter os dados do formulário
                $marca = $_POST['marca'];
                $emEstoque = $_POST['emEstoque'];
                $emEncomenda = $_POST['emEncomenda'];
                $emReserva = $_POST['emReserva'];
                

                // Atualizar os dados no banco de dados
                $sql = "UPDATE camiseta SET marca = '$marca', emEstoque = '$emEstoque', emEncomenda = '$emEncomenda',
                        emReserva = '$emReserva'
                        WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo 'Camiseta atualizada com sucesso.';
                } else {
                    echo 'Erro ao atualizar camiseta: ' . mysqli_error($conn);
                }
            }

            // Exibir o formulário de edição
            echo '<h2>Editar Camiseta</h2>';
            echo '<form method="POST" action="">';
            echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
            echo '<input type="text" name="marca" placeholder="Nome da Marca" value="' . $row['marca'] . '" required><br>';
            echo '<input type="number" name="emEstoque" placeholder="Em estoque" value="' . $row['emEstoque'] . '" required><br>';
            echo '<input type="number" name="emEncomenda" placeholder="Em encomenda" value="' . $row['emEncomenda'] . '" required><br>';
            echo '<input type="number" name="emReserva" placeholder="Em reserva" value="' . $row['emReserva'] . '" required><br>';
            echo '<input type="submit" name="submit" value="Salvar">';
            echo '</form>';
        } else {
            echo 'Bermuda não encontrada.';
        }

         echo '<a href="index.php">Voltar a página inicial</a> ';
    }
?>
