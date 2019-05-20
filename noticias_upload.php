<?php

  include 'inclusoes/header_painel.php';

 ?>

<div class="container">
  <div class="img-title text-center pt-5">
      <h1>Insira uma imagem na notícia</h1>
  </div>
  <form class="form-control pt-4" enctype="multipart/form-data" action="salva_upload.php" method="post">
    <input type="file" class="form-control" name="file">
    <br>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <div class="botao-img" style="width: 100px;">
          <button class="form-control btn btn-primary">Enviar</button>
    </div>
    <div class="botao-img" style="width: 100px;">
          <a class="form-control btn btn-primary" href="noticias.php">Voltar</a>
    </div>
  </form>
</div>


<?php

  include 'inclusoes/footer_painel.php';

 ?>
