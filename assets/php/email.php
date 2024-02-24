<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $mensagem = $_POST["messagem"];

    $destinatario = "fabioleite2024@gmail.com";  // Substitua pelo seu endereço de e-mail

    $assunto = "Nova mensagem de contato de $nome";
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Use a função mail do PHP para enviar e-mail
    if (mail($destinatario, $assunto, $corpo)) {
        header("Location: obrigado.html");  // Redireciona para uma página de agradecimento
        exit();
    } else {
        echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
}
?>
