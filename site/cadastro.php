<?php require_once ('cabecalho.php'); ?>
<title>Cadastro</title>
<link rel="stylesheet" href="Style_cadastro.css">


<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
  
</a></div>

  <div class="container"> 
<div class="txttitulo">
<h1> Cadastro de Amigos</h1></div>

<form action="cadastroAction.php" class="forms" method='post'>
  <div class="caixas">
      <input name="txtID" class="caixa_id" disabled
      placeholder=" ID" required><br>
      
      <input name="txtNome" class="caixa"
      placeholder=" Digite o nome" required><br>
      
     
      <input name="txtApelido" class="caixa"
      placeholder=" Digite o Apelido" required><br>
     
      <input name="txtEmail" class="caixa"
      placeholder=" Digite o Email" required ><br>
</div>

      <button name="btnAdicionar" class="bttadd">
        <i class="namee"></i> Adicionar
      </button>
    </form>

  </div>

  <?php require_once ('rodape.php'); ?>