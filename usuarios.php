<?php

include 'inclusoes/header_painel.php';

 ?>
    <div class="container pt-5">
         <h1 class="text-center">Usuários cadastrados</h1>
             <div class="tabela-not pt-5">
               <table class="table table-borderless text-center mt-5">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Data criação</th>
                    <th scope="col">Opções</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  $query = "SELECT * FROM usuarios";
                  $usuarios = selectQuery($conexao, $query);
                  foreach ($usuarios as $key => $usuario) {
                   ?>
                  <tr>
                    <th scope="row"><?php echo $usuario->user_nome; ?></th>
                    <td><?php echo $usuario->user_email; ?></td>
                    <td><?php echo $usuario->criado_em; ?></td>
                    <td><a class="btn btn-outline-primary" href="usuario_inserir.php?id=<?php echo $usuario->user_id; ?>">Editar</a></td>
                  </tr>
                </tbody>
                <?php } ?>
              </div>
          </div>
          <div class="criar-not text-center">
            <a href="usuario_inserir.php" class="btn btn-primary">Cadastrar novo usuário</a>
            <a href="painel.php" class="btn btn-primary">Voltar</a>
          </div>
<?php

  require 'inclusoes/footer.php';

?>
