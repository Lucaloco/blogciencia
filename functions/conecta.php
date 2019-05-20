<?php

  function conectaBanco()
  {

    $db = 'blogciencia';
    $host = 'localhost';
    $pass = '';
    $user = 'root';

    $conexao = mysqli_connect($host, $user, $pass, $db);
    $conexao->set_charset('utf8');

    if ($conexao) {

      return $conexao;

    } else {
      //Se existir erro, ele vai mostrar na tela
      printf(mysqli_connect_error());
      exit;

    }

  }

  $conexao = conectaBanco();



 ?>
