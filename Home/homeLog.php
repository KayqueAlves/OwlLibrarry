<?php

session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: /Registro/login.php ');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/homeLog.css">
    <title>OwlLibrary</title>
</head>
<body>
    <header class="cabecalho">
        <nav class="menu">
           <a href="../Catalogo/catalogo.php" class="catalogo">Catálogo</a>
           <input type="button" onclick="location.href='../Perfil/usuario.php'" class="perfil">
        </nav>
    </header>

    <div class="barra"></div>

    <main class="conteudo">
        <section class="conteudo-p">
            <img class="icone" src="Imagens/Group 1.png" alt="">
            <div class="info">
                <h1 class="info-item-top">A Owl Library é uma biblioteca virtual criada por um pequeno grupo de estudantes</h1>
                <h1 class="info-item">Com diversas opções de livros, desde clássicos da literaura até livros acadêmicos</h1>
                <h1 class="info-item-bot">Encontre seus livros favoritos ou descubra novas experiênciass</h1>
            </div>
        </section>
    </main>
</body>
</html>