<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwlLibrary</title>
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>

<body>
    <form class="cadastro" action="/Registro/config/configR.php" method="POST">
        <a href="/Home/home.php"><img class="icone" src="imagens/iconTeste.png" alt="Icone do site"></a>
        <input name="nome" class="input-cadastro" type="text" placeholder="Nome" required>
        <input name="email" class="input-cadastro" type="email" placeholder="Email" required>
        <input name="senha" class="input-cadastro" type="password" placeholder="Senha" minlength="8" required>
        <input name="confirmar" class="input-cadastro" type="password" placeholder="Confirme a senha" required>
        <button type="submit" name="submit" class="botao">Cadastrar</button>
        <a class="entrar" href="login.php">Já tem uma conta?</a></p>
     </form>
        
</body>

</html>