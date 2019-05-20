<?php
ob_start();
session_start();
//INCLUSÕES DE FUNÇÕES, CONEXÃO COM O BANCO E SEGURANÇA
include '../blogciencia/functions/conecta.php';
include '../blogciencia/functions/funcoes.php';
include '../blogciencia/functions/seguranca.php';


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
  </head>
  <body>
    <header class="header">
        <nav class="navbar navbar-light bg-primary" id="navbar">
          <div class="row">
            <div class="col-md-10">
              <div class="alinhar">
                <a class="navbar-brand" href="index.php">
                  <img src="./img/cienciadedados.png" width="100" height="30" class="d-inline-block align-top" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-1">
              <div class="botao-sair">
                <a href="logout.php" class="btn btn-outline-light">Sair</a>
              </div>
            </div>
          </div>
        </nav>
    </header>
