<?php

include 'inclusoes/header_painel.php';


if (isset($_GET['id'])) {

  $id = $_GET['id'];


  $query = "SELECT * FROM usuarios WHERE user_id = '{$id}'";

  $selectUser = selectQuery($conexao, $query);


}

 ?>
<div class="container pt-5">
  <?php if (isset($_GET['id'])) { ?>
  <h1 class="text-center">Editar o usuário</h1>
<?php } else { ?>
  <h1 class="text-center">Cadastrar um novo usuário</h1>
<?php } ?>
   <form action="salve_usuarios.php" method="post" class="pt-4">
     <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
     <div class="form-row">
       <div class="form-group col-md-6">
         <label for="inputEmail4">Nome</label>
         <input type="text" class="form-control" id="inputEmail4" name="nome" placeholder="Seu nome" value="<?php if(isset($_GET['id'])) echo $selectUser[0]->user_nome; ?>">
       </div>
       <div class="form-group col-md-6">
         <label for="inputPassword4">E-mail</label>
         <input type="text" class="form-control" id="inputPassword4" name="email" placeholder="Seu e-mail" value="<?php if(isset($_GET['id'])) echo $selectUser[0]->user_email; ?>">
       </div>
     </div>
     <div class="form-group">
       <label for="inputAddress">Senha</label>
       <input type="password" class="form-control" id="inputAddress" name="pass" placeholder="Insira sua senha" value="">
     </div>
     <div class="form-group">
       <input type="hidden" class="form-control" id="inputAddress" name="pass-old" placeholder="Insira sua senha" value="<?php if(isset($_GET['id'])) echo $selectUser[0]->user_pass; ?>">
     </div>
     <?php if (isset($_GET['id'])) {  ?>
     <button type="submit" class="btn btn-primary">Editar</button>
   <?php } else { ?>
     <button type="submit" class="btn btn-primary">Cadastrar</button>
   <?php } ?>
     <a href="usuarios.php" class="btn btn-primary">Voltar</a>
   </form>
 </div>
 <?php

 include 'inclusoes/footer.php';

  ?>
