<?php require_once ('cabecalho.php'); ?>
<title>Login</title>
<link rel="stylesheet" href="style_index.css">
    <?php
    session_start();    
    $nome = $_POST['txtnome'];
    $senha = $_POST['txtsenha'];
       require_once 'conexaoBD.php';
       $sql = "SELECT * FROM usuario WHERE nome =  '".$nome."';";
       $resultado = $conexao->query($sql);
       //echo $sql;
       $linha = mysqli_fetch_array($resultado);
       if($linha != null)
        {
            if($linha['senha'] == $senha)
            {
                echo '
                <a href="escolha.php">
                    <h1 class="w3-button" style="background-color:black; color:white; margin-left:500px; width:50%; 
                    margin-top:20px;border-radius:5px;">'.$nome.', Seja Bem-Vinda!  </h1>
                </a> 
                <img class="image_erro" src="Imagens/bemvinda.png">
                ';
                $_SESSION['logado'] = $nome;
            }
            else
            {
                echo '
                <a href="index.php">
                <h1 class="w3-button" style="background-color:black; color:white; margin-left:500px; width:50%; 
            margin-top:5px; border-radius:5px;"> Login Inválido!  </h1>
                </a> 
                <img class="image_erro" src="Imagens/imageErro.png">';
            }
        }
        else
        {
            echo '
            <a href="index.php">
            <h1 class="w3-button" style="background-color:black; color:white; margin-left:500px; width:50%; 
            margin-top:5px; border-radius:5px;"> Login Inválido!  </h1>
            </a> 
            <img class="image_erro" src="Imagens/imageErro.png">';
        }
        $conexao->close();
    ?>

<?php require_once ('rodape.php'); ?>