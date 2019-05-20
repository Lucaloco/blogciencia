<?php

require 'functions/conecta.php';
require 'functions/funcoes.php';

$datatual = date('Y-m-dH-i-s');

if (empty($_GET['id']))
{

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $id = $_POST['id'];
  $cripto = md5($_POST['pass'] . 'joinville');



    $query = "INSERT INTO usuarios (user_nome, user_email, user_pass, criado_em) VALUES ('{$nome}', '{$email}', '{$cripto}', '{$datatual}')";

    $inserirUser = realizaQuery($conexao, $query);

    header('location: usuarios.php');

} else {

    if (empty($_POST['pass'])) {

      echo  $pass = $_POST['pass-old'];

    } else {

      $pass = md5($_POST['pass']);

    }


$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];


  $query = "UPDATE usuarios SET user_nome = '{$nome}', user_email = '{$email}', user_pass = '{$pass}', criado_em = '{$datatual}') WHERE user_id = '{$id}'";

  $editaUser = realizaQuery($conexao, $query);


    header('location: usuarios.php');

}











 ?>
