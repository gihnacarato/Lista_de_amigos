<?php require_once ('cabecalho.php'); ?>
<link rel="stylesheet" href="style_index.css">
<title>Login </title>
</head>
<body>

<div class="container">
    <h1 class="titulo" >Bem vindo a</h1>
    <p>Lista de Amigos</p>
        
    <form action="loginAction.php" method="post">
        <input class="nome" type="text" name="txtnome" id="username"
        placeholder="   Digite o nome">

        <input class="senha" type="password" name="txtsenha" id="password" placeholder="    Digite a senha">

        <input class="botao" type="submit" value="Entrar" id="button">


        </form>

            <h3> Você não possui uma conta?</h3> <a class="registrar" href="url">Registra-se</a>
</div>
 
                <img src="Imagens/image_login.png">
    
<?php require_once ('rodape.php'); ?>
