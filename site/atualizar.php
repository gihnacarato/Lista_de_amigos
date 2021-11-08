<?php require_once ('cabecalho.php'); ?>
<title>Atualizar </title>
<link rel="stylesheet" href="Style_cadastro.css">

<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
  
</a></div>
 
<div class="container"> 
    <div class="txttitulo">
      <h1> Atualizar - ID: <?php echo " " . $_GET['id'] ?> </h1> </div>

    <form action="atualizarAction.php" class="forms" method='post'>
    <div class="caixas">

      <input name="txtID" class="caixa_id" type="hidden" value="<?php echo $_GET['id'] ?>">
      <br>
      
      <input name="txtNome" class="caixa" placeholder=" Digite o Nome" value="<?php echo $_GET['nome'] ?>">
      <br>
      
      <input name="txtApelido" class="caixa" placeholder=" Digite o Apelido" value="<?php echo $_GET['apelido'] ?>">
      <br>
      
      <input name="txtEmail" class="caixa" placeholder=" Digite o Email" value="<?php echo $_GET['email'] ?>">
      <br>

      <button name="btnAtualizar" class="w3-button w3-cell w3-large" style="background-color:#E63946; position:absolut; right:2px; color:white;">
        <i class="w3-xxlarge fa fa-check"></i> Atualizar.
      </button>
    </form>
  </div>

  <?php require_once ('rodape.php'); ?>