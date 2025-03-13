<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    $to = "contato@bellavilla.com";
    $subject = "Nova mensagem do site";
    $body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
