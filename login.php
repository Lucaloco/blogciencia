<?php

require 'inclusoes/header.php';

 ?>
    <div class="imagem">
      <img src="img/bigdata.png">
    </div>
        <div class="form">
            <div class="imagem-form text-center">
              <img src="img/cienciadedados.png" alt="">
            </div>
          <form method="POST" action="check_login.php" class="formulario">
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="E-mail">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Senha">
            </div>
            <div class="botao-login">
              <div class="botao-logar">
                  <button type="submit" class="btn btn-outline-light">Entrar</button>
              </div>

            </div>
            <?php if (!empty($_GET) && isset($_GET['error']))  { ?>
            <div class="alert alert-light mt-3">
              <?php
                switch ($_GET['error']) {

                  case 1:
                    echo "Erro ao logar. Verifique seus dados.";
                    break;

                  case 2:
                    echo "Não foi informado nenhum dado. Tente novamente";
                    break;

                    case 3:
                      echo "Faça o login para ter acesso a página";
                      break;

                  }
                }
                ?>
            </div>
          </form>
        </div>
<?php
include 'inclusoes/footer.php';
?>
