<?php require_once ('cabecalho.php'); ?>
<title>Excluir</title>
<link rel="stylesheet" href="Style_cadastro.css">

<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
  
</a></div>

  <div class="container"> 
    <div class="txttitulo">
      <h1> EXLUIR - ID: <?php echo " " . $_GET['id'] ?> </h1> </div>
        <form action="excluirAction.php" class="forms" method='post'>
        <div class="caixas">
      <input name="txtID" class="caixa_id" type="hidden" value="<?php echo $_GET['id'] ?>">
     
      <input name="txtNome" class="caixa" disabled value="<?php echo $_GET['nome'] ?>">
      <br>
      
      <input name="txtApelido" class="caixa" disabled value="<?php echo $_GET['apelido'] ?>">
      <br>
      
      <input name="txtEmail" class="caixa" disabled value="<?php echo $_GET['email'] ?>"> 
      <br>
     
      <button name="btnExcuir" class="w3-button w3-cell w3-large" style="background-color:#E63946; position:absolut; left:2px; color:white;">
        <i class="w3-xxlarge fa fa-check"></i> Confirmar Exclusão.
      </button>

      <a href="listar.php" class="" style="text-decoration:none; ">
        <button name="btnCancelar" class="w3-button w3-cell w3-large" type="button" style="background-color:#52b788; position:absolut; rigth:2px; color:white">
          <i class="w3-xxlarge fa fa-ban"></i> Cancelar Exclusão.
        </button>
      </a>
    </form>

    </form>
  </div>

  <?php require_once ('rodape.php'); ?>

  