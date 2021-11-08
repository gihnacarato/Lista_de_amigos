<?php require_once ('cabecalho.php'); ?>
<link rel="stylesheet" href="Style_login.css">
<title>Login </title>
<link rel="stylesheet" href="style_login.css">
</head>
<body>

<div class="container">
    <h1>Login</h1>
        <form action="loginAction.php" method="post">
            <div class="container2">
                <div class="usuario">
                    <h2> Usuário </h2> 
                    <input class="nome" type="text" name="txtnome" id="username"
                    placeholder="Digite o nome">
                        <div class="underline"></div>
                    </div>
            <div class="senha">
                <h2> Senha </h2> 
                <input class="senha" type="password" name="txtsenha" id="password" placeholder="Digite a senha">
                    <div class="underline"></div>
            </div>
                </div>

            <input class="botao" type="submit" value= "Entrar" id="button">
        </form>

</div>
 
  <img src="Imagens/imageLogin.png">
    
<?php require_once ('rodape.php'); ?>



