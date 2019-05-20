<?php

include 'functions/phpmailer/class.phpmailer.php';
include 'functions/funcoes.php';

$to = "lucassenac@vk2.com.br";

$subject = $_POST['assunto'];

$from = $_POST['email'];

$body = "Chegou mensagem do site!.<br/>
        Quem enviou foi o {$_POST['nome']}, caso queira entrar em contato, ligue para o número: {$_POST['telefone']}.<br/>
        Ele deixou a seguinte mensagem: <br/>
        {$_POST['faleaqui']}";


  if (envioMensagem($to, $body, $subject ,$from)) {
    echo "Enviado com sucesso";
  } else {
    echo "Houve um erro ao enviar";
  }






 ?>
