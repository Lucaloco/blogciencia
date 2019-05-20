<?php
error_reporting(0);
ob_start();
session_start();
//INCLUSÕES DE FUNÇÕES, CONEXÃO COM O BANCO E SEGURANÇA
  include '../blogciencia/functions/conecta.php';
  include '../blogciencia/functions/funcoes.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="keywords" content="Blog de ciência, Ciência, Tecnologia, Ciência de dados, Dados, Análise de dados, Cientista de dados, Data Science, Machine Learning">
    <meta name="description" content="Curiosidades de ciência de dados e toda tecnologia relacionada">
    <meta charset="utf-8">
    <title>Blog Ciência</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="header">
        <nav class="navbar navbar-light bg-primary" id="navbar">
          <div class="row">
            <div class="col-md-10">
              <div class="alinhar">
                <a class="navbar-brand" href="index.php">
                  <img src="img/cienciadedados.png" width="100" height="30" class="d-inline-block align-top" alt="">
                </a>
              </div>
            </div>
            <?php if($_SESSION['login'] == true)
              {
              ?>
              <div class="col-md-1">
                <div class="botao-entrar">
                  <a href="./painel.php" class="btn btn-outline-light">Painel</a>
                </div>
              </div>
              <div class="col-md-1">
                <div class="botao-entrar">
                  <a href="./logout.php" class="btn btn-outline-light">Sair</a>
                </div>
              </div>
          <?php }  else { ?>
            <div class="col-md-1">
              <div class="botao-entrar">
                <a href="./login.php" class="btn btn-outline-light">Login</a>
              </div>
            </div>
          <?php } ?>
          </div>
        </nav>
    </header>
