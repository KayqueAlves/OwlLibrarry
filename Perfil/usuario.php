<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/usuario.css">
</head>
<body>

    <header class="cabecalho">
        <img class="Icone" src="imagens/IconeSimples.png" alt="Logo simplificada do site">
        <nav class="menu">
            <a href="" class="menu-item" >Catálogo</a>
            <a href="../Home/home.php" class="menu-item" >Quem somos</a>
        </nav>
    </header>

    <main>
        <section class="abas">
            <div class="navegacao">
                <button id="tab-padrao" class="nav-button" onclick="openTab('perfil')">Perfil</button>
                <button class="nav-button" onclick="openTab('estante')">Estante</button>
                <button class="nav-button" onclick="openTab('favoritos')">Favoritos</button>
            </div>
        </section>
        
        <section class="information">
            <div class="avatar">
                <img width="360" height="360" class="avatar-user" src="imagens/Tucked in.jpg" alt="">
                <button class="edit-avatar">Editar</button>
            </div>
             
            <div id="perfil" class="conteudo">
                <p class="info">Kayque Alves</p>
                <P class="info">exemplo@gmail.com</P>
                <p class="info">**********</p>
                <button class="exit">Sair</button>
            </div>

            <div id="estante" class="conteudo">
                <div class="box-book"></div>
            </div>

            <div id="favoritos" class="conteudo">
                <div class="box-book"></div>
            </div>

        </section>
    </main>
<script src="JS/usuario.js"></script>
</body>
</html>