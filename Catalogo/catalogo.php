<?php include_once '../BD/logado.php' ; ?>
<?php include '../BD/config.php' ; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/catalogo.css">
    <title>OwlLibrary</title>
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
        <div class="genero">
            <div class="generos">
                <div class="barra-pesquisa">
                    <input class="pesquisa" type="search" placeholder="Pesquisar" id="pesquisar">
                    <button class="but-pesquisa" onclick="searchData()"></button>
                </div>
                <button class="genero-but">gêneros</button>    
                <ul>
                    <li><p>Fantasia</p></li>
                    <li><p>Ficção científica</p></li>
                    <li><p>Romance</p></li>
                    <li><p>Infantil</p></li>
                    <li><p>Ação</p></li>
                    <li><p>Aventura</p></li>
                </ul>
            </div>
            
            <div style="overflow-y: scroll;" class="caixa">
                <div class="livros">
                <?php

                    $sql = "SELECT * FROM livro WHERE id_livro ORDER BY RAND()";
                    $result = $conexao->query($sql);

                    while($dados = mysqli_fetch_assoc($result)){

                        $preco = $dados['preco'];
                        $img = $dados['capa'];   
                        $id = $dados['id_livro'];
                ?>
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/<?=$img;?>">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$<?=$preco;?>,00" disabled>
                                <a href="../Catalogo/livro.php?id=<?=$id;?>" class="saibaM" >Saiba mais</a>
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>     
                        <?php
                    }
                        ?>
                </div>
            </div>    
        </div>
 
    </main>
</body>
<script src="/Catalogo/JS/search.js"></script>
</html>