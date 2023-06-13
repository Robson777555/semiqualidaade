<h2>Listagem de Produtos</h2>

<?php
    // ...

    echo '<h2>Cadastrar Nova Camiseta</h2>';
    echo '<a href="cadastrar_camiseta.php">Cadastrar Nova Camiseta</a>';
    echo '<form method="POST" action="">';

    

    // Exibir link para listar todos os CDs
    echo '<a href="index.php?pagina=camiseta&listar=true">Listar Camisetas</a>';

    // Verificar se a página de listagem foi solicitada
    if (isset($_GET['pagina']) && $_GET['pagina'] === 'camiseta' && isset($_GET['listar']) && $_GET['listar'] === 'true') {
        // Consulta para listar todos os CDs
        $sql = "SELECT * FROM camiseta";
        $result = mysqli_query($conn, $sql);

        echo '<h2>Lista de Camisetas</h2>';

        if (mysqli_num_rows($result) > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Marca</th>';
            echo '<th>Em estoque</th>';
            echo '<th>Em encomenda</th>';
            echo '<th>Em reserva</th>';
            echo '</tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['marca'] . '</td>';
                echo '<td>' . $row['emEstoque'] . '</td>';
                echo '<td>' . $row['emEncomenda'] . '</td>';
                echo '<td>' . $row['EmReserva'] . '</td>';
                echo '<td>';
                echo '<a href="editar_camiseta.php?id=' . $row['id'] . '">Editar</a> ';
                echo '<a href="excluir_camiseta.php?id=' . $row['id'] . '">Excluir</a>';
                echo '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'Nenhuma Camiseta encontrada.';
        }
    }

    // ...
?>
