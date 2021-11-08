<?php require_once ('cabecalho.php'); ?>
<link rel="stylesheet" href="style_excluir.css">
<title>Excluir</title>
</head>
<body>

<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
  <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
  </div>
</a>
  
    <div class="container">
    <h1 class="titulo" >Excluir - ID: <?php echo " " . $_GET['id'] ?> 

    <form action="excluirAction.php" class="forms" method='post'>

    <input name="txtID" class="caixa_id" type="hidden" value="<?php echo $_GET['id'] ?>">

    <input name="txtNome" class="caixaN"disabled value="<?php echo $_GET['nome'] ?>"> <br>

    <input name="txtApelido" class="caixaA" disabled value="<?php echo $_GET['apelido'] ?>" ><br>

    <input name="txtEmail" class="caixaE" disabled value="<?php echo $_GET['email'] ?>" ><br>

  

      <a href="listar.php" class="">
      <button name="btnCancelar" type="button" class="bttcancelar">
        <i class="namee"></i> Cancelar a exclusão
      </button>
      </a>
      <a href="listar.php" class="">
      <button name="btnExcluir" class="bttexcluir">
        <i class="namee"></i> Confirmar a exclusão
      </button>
      </a>


    </form>
  
</div>