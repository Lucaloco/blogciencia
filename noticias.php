<?php

include 'inclusoes/header_painel.php';

 ?>

 <div class="container pt-5">
     <h1 class="text-center">Notícias cadastradas</h1>
     <div class="tabela-not pt-5">
       <table class="table table-borderless text-center mt-5">
        <thead>
          <tr>
            <th scope="col">Título</th>
            <th scope="col">Sub-título</th>
            <th scope="col">Descrição</th>
            <th scope="col">Autor</th>
            <th scope="col">Data criação</th>
            <th scope="col">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php

            $query = "SELECT * FROM noticias";
            $noticias = selectQuery($conexao, $query);

            foreach ($noticias as $key => $noticia) {
          ?>
          <tr>
            <th scope="row"><?php echo $noticia->not_titulo; ?></th>
            <td><?php echo $noticia->not_subtitulo; ?></td>
            <td><?php echo $noticia->not_descri; ?></td>
            <td><?php echo $noticia->not_autor; ?></td>
            <td><?php echo $noticia->not_criado_em; ?></td>
            <td><a class="btn btn-outline-primary" href="noticias_inserir.php?id=<?php echo $noticia->not_id; ?>">Editar</a><a class="btn btn-outline-primary" href="noticias_upload.php?id=<?php echo $noticia->not_id; ?>">Upload</a></td>
          </tr>
        </tbody>
        <?php } ?>
      </div>
      <div class="criar-not text-center">
        <a href="noticias_inserir.php" class="btn btn-primary">Cadastrar nova notícia</a>
        <a href="painel.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
 <?php

 include 'inclusoes/footer.php';

  ?>
