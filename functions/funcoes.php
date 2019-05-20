<?php


//FUNÇÃO APENAS DE SELECT
function selectQuery($conexao, $query)
{

  if ($conexao == true) {

    $sql = mysqli_query($conexao, $query);

    //Criando variável linhas tipo array para armazenar dados do banco;
    $linhas = array();

    //Percorrer os resultados do banco e setar eles na variável linha;
    while ($linha = mysqli_fetch_object($sql))
    {
      //Jogar todos os objetos dentro de um novo índice array "[0]";
      $linhas[] = $linha;

    }

    return $linhas;

  }

}

//REaliza as querys no geral
function realizaQuery($conexao, $query)
{

  if ($conexao == true) {

    $sql = mysqli_query($conexao, $query);

  }

}

//Função de printar as variáveis
function print_($x)
{
  echo "<pre>";
  print_r($x);
  echo "</pre>";
}


function envioMensagem($to, $body, $subject ,$from){

  $mail = new PHPMailer(true);
  $mail->IsSMTP();

  try {
    $mail->SMTPAuth   = true;
    $mail->CharSet    = 'UTF-8';
    $mail->Host       = 'vk2.mtp.vk2.dataware.com.br';
    $mail->Port       = '587';
    $mail->Username   = 'teste@vk2.com.br';
    $mail->Password   = '12345';
    $mail->AddAddress($to);
    $mail->SetFrom($from);
    $mail->Subject = $subject;
    $mail->MsgHTML($body);

    return $mail->Send();

  } catch (phpmailerException $e) {
    echo $e;
    return false;
  }

}









 ?>
