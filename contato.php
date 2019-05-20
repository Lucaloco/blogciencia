<?php
session_start();
include 'inclusoes/header.php';

 ?>

   <div class="container pt-5">
     <h1>Contate-nos</h1>
     <form action="contato_envia.php" method="post">
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="inputEmail4">Nome</label>
           <input type="text" class="form-control" name="nome" id="inputEmail4" placeholder="Seu nome">
         </div>
         <div class="form-group col-md-6">
           <label for="inputPassword4">Email</label>
           <input type="text" class="form-control" name="email" id="inputPassword4" placeholder="Seu e-mail">
         </div>
       </div>
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label for="inputAddress">Telefone</label>
             <input type="text" class="form-control" id="inputAddress" name="telefone" placeholder="Insira o seu telefone">
           </div>
         </div>
         <div class="col-md-6">
           <div class="form-group">
             <label for="inputAddress2">Cidade</label>
             <input type="text" class="form-control" id="inputAddress2" name="cidade" placeholder="Qual sua cidade">
           </div>
         </div>
       </div>
       <div class="form-group">
         <label for="inputCity">Assunto do e-mail</label>
         <input name="assunto" class="form-control"></input>
       </div>
       <div class="form-row">
         <div class="form-group col-md-12">
           <label for="inputCity">O que deseja nos falar</label>
           <textarea name="faleaqui" rows="8" cols="80" class="form-control"></textarea>
         </div>
       </div>
       <div class="botao">
         <button type="submit" class="btn btn-primary">Enviar</button>
         <a href="index.php" class="btn btn-primary">Voltar</a>
       </div>
     </form>


 <?php

  require 'inclusoes/footer.php';

   ?>
