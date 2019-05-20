<?php
include 'functions/conecta.php';
include 'functions/funcoes.php';
session_start();

$email = $_POST['email'];

$pass = $_POST['senha'];


//criptografar antes de realizar o SQL
$pass = md5($pass . 'joinville');

$query = "SELECT * FROM usuarios WHERE user_email = '$email' AND user_pass = '$pass'";

$linhas = selectQuery($conexao, $query);

// CHECA SE É != E INICIA UMA SESSÃO COM DADOS ARMAZENADOS ATÉ NÃO DESLOGAR EX: 'logado', 'email'

if (!empty($linhas)) {

    $_SESSION['login'] = new \stdClass;
    $_SESSION['login']->logado = true;
    $_SESSION['login']->email = $linhas[0]->email;
    $_SESSION['login']->nome = $linhas[0]->nome;

    header('location: painel.php');

} else {

  if ($email != $linhas->user_mail) {
    echo "Seu e-mail está errado, confira novamente";
  }

  if ($pass != $linhas->user_pass) {
    echo "Sua senha não confere, tente novamente";
  }

}

















 ?>
