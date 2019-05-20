<?php

session_start();

include 'functions/conecta.php';
include 'functions/funcoes.php';
// include 'functions/seguranca.php';

$nome = $_FILES['file']['name'];
$ext = end(explode('.', $nome));
$temp = $_FILES['file']['tmp_name'];
$newnome = md5(date('YmdHsi'));
$dir = 'img/' . $_POST['id']  . '/';

if (!file_exists($dir)) {
      mkdir("$dir", 0777);
}

$caminhocompleto = $dir . $newnome . "." . $ext;

if(move_uploaded_file($temp, $caminhocompleto)){

  $query = "UPDATE noticias SET not_img = '{$caminhocompleto}' WHERE not_id  = {$_POST['id']}";
  $upimg = realizaQuery($conexao, $query);
  print_($query);

}
else {
  echo "Houve um erro ao upar a imagem";
}

header('location: noticias.php');
 ?>
