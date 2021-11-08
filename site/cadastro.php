<?php require_once ('cabecalho.php'); ?>
<link rel="stylesheet" href="style_cadastro.css">
<title>Cadastro</title>
</head>
<body>

<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
</div>
</a>
  
    <div class="container">
    <h1 class="titulo" >Cadastro de Amigos</h1>

    <form action="cadastroAction.php" class="forms" method='post'>
      <input name="txtID" class="caixa_id" disabled placeholder="   ID" required><br>

      <input name="txtNome" class="caixaN" placeholder="    Digite o nome" required><br>
      
      <input name="txtApelido" class="caixaA" placeholder="   Digite o Apelido" required><br>
     
      <input name="txtEmail" class="caixaE" placeholder="   Digite o Email" required ><br>


      <button name="btnAdicionar" class="bttadd">
        <i class="namee"></i> Adicionar
      </button>
    </form>
    </div>
