<?php

include 'inclusoes/header_painel.php';

if (isset($_GET['id'])) {

  $id = $_GET['id'];


    $query = "SELECT * FROM noticias WHERE not_id = '{$id}'";

    $selectNot = selectQuery($conexao, $query);

}
 ?>
<div class="container pt-4">
  <?php if (isset($_GET['id'])) { ?>
      <h1 class="text-center">Edite a notícia</h1>

<?php } else { ?>
    <h1 class="text-center">Cadastre uma nova notícia</h1>
<?php } ?>
  <form class="pt-5" method="post" action="salve_noticias.php">
    <?php if(isset($_GET['id'])) { ?>
      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <?php } ?>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Título da notícia</label>
          <input type="text" name="titulo" class="form-control" id="exampleFormControlInput1" value="<?php if(isset($_GET['id'])) echo $selectNot[0]->not_titulo; ?>">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Sub-título</label>
          <input type="text" name="subtitulo" class="form-control" id="exampleFormControlInput1" value="<?php if(isset($_GET['id'])) echo $selectNot[0]->not_subtitulo; ?>">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Autor</label>
      <input type="text" class="form-control" name="autor" id="exampleFormControlInput1" value="<?php if(isset($_GET['id'])) echo $selectNot[0]->not_autor; ?>">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Descrição</label>
      <textarea name="descri" rows="8" cols="80" class="form-control"><?php if(isset($_GET['id'])) echo $selectNot[0]->not_descri; ?></textarea>
    </div>
    <div class="botao">
      <?php if (isset($_GET['id'])) { ?>
        <button class="btn btn-primary">Editar</button>
      <?php } else { ?>
        <button class="btn btn-primary">Cadastar</button>
      <?php } ?>
      <a href="noticias.php" class="btn btn-primary">Voltar</a>
    </div>
  </form>
</div>
<?php

require 'inclusoes/footer.php';


 ?>
