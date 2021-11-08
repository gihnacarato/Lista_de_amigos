 <?php require_once ('cabecalho.php'); ?>
 <title>Atualizar</title>
<link rel="stylesheet" href="Style_cadastro.css">

<?php require_once ('conexaoBD.php'); ?>

<?php

if(!isset($_POST['btnAAtualizar']))
{
  extract($_POST);
  $sql = "UPDATE amigo SET 
                nome = '{$txtNome}', 
                apelido = '{$txtApelido}', 
                email = '{$txtEmail}' 
          WHERE idamigo = {$txtID}";
          } else {
            echo '
            <h1 class="w3-button w3-black">ERRO! </h1>
            <img class="image" src="Imagens/imageErro.png">';
          }
?>
<?php require_once ('cabecalho.php'); ?>

    <?php
    if ($conexao->query($sql) === TRUE) {
      echo '
      <a href="listar.php">
      <h1 class="w3-button" style ="background-color:black; color:white; 
        margin-left:500px; width:50%; margin-top:20px; border-radius:5px;">'.$txtNome.', Atualizado com Sucesso!  </h1>
                </a> 
        <img class="image_sucesso" src="Imagens/suceso.png"> 
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