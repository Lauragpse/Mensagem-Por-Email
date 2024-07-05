<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['email']);

$para = "lauragpse446@gmail.com";
$assunto = "Mensagem forms php - Lauragpse";

$corpo = "Nome:" . $nome . "\n" . "E-mail:" . $email . "\n" . "Mensagem:" . $mensagem;

$cabeca = "From: lauracamila446@gmail.com" . "\n" . "Reply-to" . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabeca)) {
    echo ("Email enviado com sucesso!");
} else {
    echo ("Houve um erro ao enviar o email.");
}
