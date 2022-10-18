<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwlLibrary</title>
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>

    <form class="login" action="/Registro/config/configL.php" method="POST">
        <a href="/Home/home.php"><img class="icone" src="imagens/iconTeste.png" alt="Icone Site"></a>
        <input name="email" class="login-input" type="email" placeholder="Email">
        <input name="senha" class="login-input" type="password" placeholder="Senha">
        <a class="passRe" href="">Esqueceu sua senha?</a>
        <button name="submit" type="submit" class="botao">ENTRAR</button>
        <p>Precisando de uma conta?<a href="cadastro.php"> Registre-se</a></p>
    </form>
    
</body>

</html>