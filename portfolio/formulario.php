<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "pedrorsantos021@gmail.com";
    $assunto = "Coleta de dados - Pedro Rodrigues Dev";

    $message = "Nome: $nome\n";
    $message = "Email: $email\n";
    $message = "Mensagem:\n$mensagem\n";

    $cabeca = "From: teste@teste.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();


    if(mail($para,$assunto,$mensagem,$mensagem,$mensagem,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar ao email!");
    }
    
?>
