<?php require_once ('conexaoBD.php'); ?>
<title>Listar</title>

<?php require_once ('cabecalho.php'); ?>

<link rel="stylesheet" href="style_lista.css">

<div class="btnVoltar">
  <a href="escolha.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large  w3-button w3-xxlarge"></i>
</a>

  <div class="container"> 
<div class="titulo">
<h1> Listagem de Amigos </h1></div>


  <!-- header da tabela -->
  <?php
  $tableHead = <<<TABLE
 
  <table class="w3-table-all w3-centered">
    <thead>
      <tr class="w3-center" style="background-color:#6c757d; color:white" >
        <th>Código</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Email</th>
        <th>Excluir</th>
        <th>Atualizar</th>
      </tr>
    </thead>
TABLE;
  echo $tableHead;
  // query
  $sql = "SELECT * FROM amigo";
  $resultado = $conexao->query($sql);
  if ($resultado->num_rows < 1)
  {
    echo '<h2>😭 Você não tem amigos cadastrados ainda ...</h2>';
    exit;
  }
  // dados da tabela
    foreach ($resultado as $linha) {
      echo '<tr>';
      echo '<td>' . $linha['idamigo'] . '</td>';
      echo '<td>' . $linha['nome']    . '</td>';
      echo '<td>' . $linha['apelido'] . '</td>';
      echo '<td>' . $linha['email']   . '</td>';
      echo '<td><a href="excluir.php?id='    . $linha['idamigo'] . '&nome=' . $linha['nome'] . '&apelido=' . $linha['apelido'] .
           '&email=' . $linha['email'] . '"><i class="fa fa-user-times w3-large w3-text-red"></i> </a></td>';
      echo '<td><a href="atualizar.php?id='  . $linha['idamigo'] . '&nome=' . $linha['nome'] . '&apelido=' . $linha['apelido'] .
            '&email=' . $linha['email'] . '"><i class="fa fa-refresh w3-large w3-text-blue""></i></a></td></td>';
      echo '</tr>';
    }
    // fecha a tabela
  echo '
  </table>
  </div>';
  $conexao->close();
  ?>
  </div>
  <?php require_once ('rodape.php'); ?>