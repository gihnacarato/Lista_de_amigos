<?php require_once ('cabecalho.php'); ?>
<link rel="stylesheet" href="style_atualizar.css">
<title>Atualizar</title>
</head>
<body>

<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
  <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
  </div>
</a>
  
    <div class="container">
    <h1 class="titulo" >Atualizar - ID: <?php echo " " . $_GET['id'] ?> 

    <form action="atualizarAction.php" class="forms" method='post'>
    <div class="caixas">

      <input name="txtID" class="caixa_id" type="hidden" value="<?php echo $_GET['id'] ?>">
      <br>
      
      <input name="txtNome" class="caixaN" placeholder=" Digite o Nome" value="<?php echo $_GET['nome'] ?>">
      <br>
      
      <input name="txtApelido" class="caixaA" placeholder=" Digite o Apelido" value="<?php echo $_GET['apelido'] ?>">
      <br>
      
      <input name="txtEmail" class="caixaE" placeholder=" Digite o Email" value="<?php echo $_GET['email'] ?>">
      <br>

      <button name="btnAtualizar" >
        <i class="namee"></i> Atualizar
      </button>

    </form>
  </div>

  <?php require_once ('rodape.php'); ?>