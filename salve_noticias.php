<?php

require 'functions/conecta.php';
require 'functions/funcoes.php';

$datatual = date('Y-m-dH-i-s');

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$descri = $_POST['descri'];
$autor = $_POST['autor'];


if (empty($_POST['id']))
{


    $query = "INSERT INTO noticias (not_titulo, not_subtitulo, not_descri, not_autor ,not_criado_em) VALUES ('{$titulo}', '{$subtitulo}', '{$descri}', '{$autor}','{$datatual}')";

    $inserirNot = realizaQuery($conexao, $query);

    header('location: noticias.php');

} else {

$id = $_POST['id'];

  $query = "UPDATE noticias SET not_titulo = '{$titulo}', not_subtitulo = '{$subtitulo}', not_descri = '{$descri}', not_autor = '{$autor}', not_criado_em = '{$datatual}' WHERE not_id = '{$id}'";

  $editaUser = realizaQuery($conexao, $query);


    header('location: noticias.php');

}











 ?>
