<?php

 include 'inclusoes/header.php';

 $query = "SELECT * FROM noticias";
 $noticias = selectQuery($conexao, $query);

 ?>
 <div class="card text-center">
   <div class="card-header bg-light">
     <h4><b>Fique por dentro de todas as notícias sobre Ciência de Dados</b></h4>
   </div>
   <br>
   <div class="card-body-banner">
     <div class="banner">
       <img src="img/cienciadedados.png">
     </div>
   </div>
   <br>
   <div class="card-footer text-muted">
     <b>
       <?php

          $query = "SELECT * FROM noticias ORDER BY not_criado_em DESC LIMIT 1";
          $noticiahora = selectQuery($conexao,$query);

          $formatdate = date('Y/m/d', strtotime($noticiahora[0]->not_criado_em));

          echo "Atualizado em ". $formatdate;
        ?>
     </b>
   </div>
 </div>
 <div class="contato-ajustar">
   <div class="contato-estilo shadow-lg text-center">
     <div class="contato pt-4 text-center">
       <h2>Contate-nos</h2>
       <a href="contato.php" class="btn btn-primary">Contate</a>
     </div>
   </div>
 </div>
<div class="container pt-5">
    <div class="row">
      <?php

      foreach ($noticias as $key => $noticia) {

       ?>
      <div class="col-md-4 line-noticia">
        <div class="card border-light pt-2 shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;" id="box-images">
          <div class="box-image">
              <img class="card-img-top" src="<?php echo $noticia->not_img; ?>" alt="Imagem de capa do card">
          </div>
          <div class="card-body">
            <div class="text-card-header">
              <h5 class="card-title"><?php echo $noticia->not_titulo; ?></h5>
              <p class="card-text"><?php echo $noticia->not_subtitulo; ?></p>
            </div>
            <div class="footer-card">

            </div>
          </div>
          <div class="card-body text-center">
            <small><b>Autor: <?php echo $noticia->not_autor . "</br>"; ?></b></small>
            <small><b>Criado em: <?php echo $formatdate; ?></b></small>
            <hr>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable<?php echo $noticia->not_id; ?>">
              Saiba mais
          </button>
          </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalScrollable<?php echo $noticia->not_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <div class="modal-title">
                <h5 id="exampleModalScrollableTitle"><?php echo $noticia->not_titulo; ?></h5>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <b><?php echo $noticia->not_subtitulo; ?></b>
              <div class="modal-img text-center">
                <img src="<?php echo $noticia->not_img; ?>">
              </div>
                <?php echo $noticia->not_descri; ?>
            </div>
            <div class="modal-footer">
              <div class="autor-fonte text-center">
                  <small><b>Autor: <?php echo $noticia->not_autor . "</br>"; ?></b></small>
              </div>
            <div class="data-fonte text-center">
                <small><b>Criado em: <?php echo $noticia->not_criado_em; ?></b></small>
            </div>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
</div>

<?php

 require 'inclusoes/footer.php';

  ?>
