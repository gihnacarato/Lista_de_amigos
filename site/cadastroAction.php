<?php require_once ('cabecalho.php'); ?>
<title>Cadastro</title>
<link rel="stylesheet" href="">

<?php require_once ('conexaoBD.php'); ?>
<?php


if(!isset($_POST['btnAdicionar']))
{
  header('Location: escolha.php');
}

extract($_POST);
  $sql = "INSERT INTO amigo (nome, apelido, email)
          VALUES ('{$txtNome}', '{$txtApelido}', '{$txtEmail}')";
?>
<?php require_once ('cabecalho.php'); ?>

    <?php
    if ($conexao->query($sql) === TRUE) {
      echo '<br>
      <a href="escolha.php">
      <h1 class="w3-button" style="background-color:black; color:white; margin-left:500px; width:50%; 
          margin-top:px; border-radius:5px;">' . $txtNome .' , Salvo com sucesso! </h1> 
      </a> 
      <img class="sucesso" style="  margin-left: 500px; margin-top: 0px; width:45%" src="Imagens/suceso.png"> 
      ';
    } else {
      echo '
      <a href="cadastro.php">
                <h1 class="w3-button" style="background-color:black; color:white; margin-left:500px; width:50%; 
            margin-top:5px; border-radius:5px;"> ERRO!  </h1>
                </a> 
                <img class="image_erro" src="Imagens/imageErro.png">;
        ';
    }
    $conexao->close();
    ?>
  
  <?php require_once ('rodape.php'); ?>



  

 