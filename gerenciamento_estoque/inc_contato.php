<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'destinatario@example.com'; // Endereço de e-mail do destinatário
    $subject = 'Novo contato do site'; // Assunto do e-mail

    // Campos do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Corpo do e-mail
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Mensagem:\n$message";

    // Cabeçalhos do e-mail
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envio do e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo 'E-mail enviado com sucesso.';
    } else {
        echo 'Erro ao enviar o e-mail.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>
    <form method="post" action="">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>