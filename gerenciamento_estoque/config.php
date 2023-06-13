<?php
    $servidor = 'localhost';
    $login = 'root';
    $senha = '';
    $base = 'estoque';

    $conn = mysqli_connect($servidor, $login, $senha, $base);

    if (!$conn) {
        die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
    }
?>
