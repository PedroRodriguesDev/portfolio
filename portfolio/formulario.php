<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $para = "pedrorsantos021@gmail.com"; 
    $subject = "Nova mensagem do formulário de contato";

    $message = "Nome: $nome\n";
    $message .= "Email: $email\n";
    $message .= "Mensagem:\n$mensagem";

    
    $headers = "From: $email";

    mail($para, $subject, $message, $headers);

    // Redirecionar para a página de agradecimento
    header("Location: obrigado.html");
    exit();
}
?>