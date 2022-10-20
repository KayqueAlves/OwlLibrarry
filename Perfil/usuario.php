<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: /Registro/login.php ');
    }

    $emailInf = $_SESSION['email'];
    $senhaInf = $_SESSION['senha'];

    include_once('../BD/config.php');

    $sql = "SELECT nome FROM usuario WHERE email = '$emailInf'";

    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $nomeInf = $result->fetch_assoc();
    }    


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.67">
    <title>OwlLibrary</title>
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/usuario.css">
</head>
<body>

    <header class="cabecalho">
        <img class="Icone" src="imagens/IconeSimples.png" alt="Logo simplificada do site">
        <nav class="menu">
            <a href="/Catalogo/catalogo.php" class="menu-item" >Catálogo</a>
            <a href="../Home/homeLog.php" class="menu-item" >Quem somos</a>
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
        
        <form class="information" method="POST">
            <div class="avatar">
                <img width="360" height="360" class="avatar-user" src="Imagens/imgPD.png" alt="">
                <button name="submit" type="submit" class="edit-avatar">Editar</button>
            </div>
             
            <div id="perfil" class="conteudo">
                <input name="name" type="text" class="info" disabled value="<?php echo implode($nomeInf); ?>">

                <input name="email" type="text" class="info" disabled value="<?php echo $emailInf; ?>">

                <input type="password" name="senha" class="info" disabled value="<?php echo $senhaInf; ?>">

                <a href="config/sair.php" class="exit">Sair</a>
            </div>

            <div id="estante" class="conteudo">
                <div class="box-book"></div>
            </div>

            <div id="favoritos" class="conteudo">
                <div class="box-book"></div>
            </div>

        </form>
    </main>
<script src="JS/usuario.js"></script>
</body>
</html>