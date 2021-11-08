<?php
require_once('conexaoBD.php');

$id = is_numeric($_POST['txtID']) ? $_POST['txtID'] : 0;
$sql = "DELETE FROM amigo WHERE idamigo = {$id}";
?>

<?php require_once('cabecalho.php'); ?>

  
    <?php
    if ($conexao->query($sql) === TRUE) {
      echo'
      <a href="listar.php">
        <h1 class="w3-button" style ="background-color:black; color:white; 
        margin-left:500px; width:50%; margin-top:20px; border-radius:5px;">Amigo Excluído com Sucesso!  </h1>
                </a> 
        <img class="sucesso" src="Imagens/delete.png" style= "width:25%; position:absolute; left:730px; right:730px; margin-top:180px;"> 
        ';
      } else {
        echo '
        <a href="excluir.php">
        <h1 class="w3-button" style="background-color:black; color:white; margin-left:500px; width:50%; 
    margin-top:5px; border-radius:5px;"> ERRO!  </h1>
        </a> 
        <img class="image_erro" src="Imagens/imageErro.png">;
  ';
      }
      $conexao->close();
    ?>
  
