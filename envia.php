<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$para = "@gmail.com";
$assunto = "Mensagem forms php - Lauragpse";

$corpo = "Nome:".$nome."\n"."E-mail:".$email."\n"."Mensagem:".$mensagem;

$cabeca = "From: @gmail.com"."\n"."Reply-to".$email."\n"."X=Mailer:PHP/".phpversion();

if (mail($para,$assunto,$corpo,$cabeca)) {
    echo ("Email enviado com sucesso!");
} else {
    echo ("Houve um erro ao enviar o email.");
}
?>
