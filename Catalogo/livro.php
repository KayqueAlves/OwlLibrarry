<?php include '../BD/logado.php' ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OwlLibrary</title>
    <link rel="stylesheet" href="/Catalogo/CSS/livro.css">
</head>
<body>
    <header class="cabecalho">
        <div></div>
        <a href="/Home/homeLog.php">
            <img class="Icone" src="imagens/IconeSimples.png" alt="Logo simplificada do site">
        </a>
        <input type="button" onclick="location.href='../Perfil/usuario.php'" class="perfil">
    </header>

    <main>
        <div class="box">

            <input type="button" class="voltar" onclick="location.href='/Catalogo/catalogo.php';">

            <form class="livro">
                <img class="capa" width="250px" src="/Catalogo/Imagens/livro1.jpg" alt="">
                <div class="fav">
                    <input class="preco" type="text" value="R$99,99" disabled>
                    
                </div>
                 <a class="comprar" href="/pagamento/pagamento.php">COMPRAR</a>
                
            </form>

            <section class="info">
                <input class="titulo" type="text" value="Titulo: Harry Potter e o cálice de fogo" disabled>
                <input class="publicacao" type="text" value="Publicação: 08/07/2000" disabled>
                <input class="autor" type="text" value="Autor(a): J.K. Rowling" disabled>

                <div>
                    <h1>SINOPSE</h1>
                    <div style="overflow-y: scroll ;" class="sinopse">
                        <p>Nesta aventura, o feiticeiro cresceu e está com 14 anos. O início do ano letivo de Harry Potter reserva muitas emoções, mágicas, e acontecimentos inesperados, além de um novo torneio em que os alunos de Hogwarts terão de demonstrar todas as habilidade mágicas e não-mágicas que vêm adquirindo ao longo de suas vidas. Harry é escolhido pelo Cálice de Fogo para competir como um dos campeões de Hogwarts, tendo ao lado seus fiéis amigos. Muitos desafios, feitiços, poções e confusões estão reservados para Harry. Além disso, ele terá que lidar ainda com os problemas comuns da adolescência - amor, amizade, aceitação e rejeição.</p>
                    </div>
                </div>

            </section>

        </div>
    </main>
</body>
</html>