<?php

include 'inclusoes/header_painel.php';

 ?>

<div class="container pt-5">
  <h1 class="text-center">Painel administrativo</h1>

    <div class="table-users pt-3">
      <div class="jumbotron">
        <h1 class="display-4 text-center pt-2">Usuários</h1>
        <hr class="my-4">
        <p class="lead text-center">Aqui terá a listagem de todos os <b>usuários</b> cadastrados, apenas clique no botão abaixo. </p>
        <hr class="my-4">
        <div class="botao text-center">
            <a class="btn btn-primary btn-lg" href="usuarios.php" role="button">Usuários</a>
        </div>
      </div>
    </div>

    <div class="table-notices pt-3">
      <div class="jumbotron">
        <h1 class="display-4 text-center">Notícias</h1>
        <hr class="my-4">
        <p class="lead text-center pt-2">Aqui terá a listagem de todos as <b>notícias</b> cadastradas, apenas clique no botão abaixo.</p>
        <hr class="my-4">
        <div class="botao text-center">
            <a class="btn btn-primary btn-lg" href="noticias.php" role="button">Notícias</a>
        </div>
      </div>
    </div>
</div>



<?php

  include 'inclusoes/footer.php';

 ?>
