<?php include '../BD/logado.php' ; ?>

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
                <input class="pesquisa" type="text" placeholder="Pesquisar">
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
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/livro1.jpg">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$99,99" disabled>
                                <input class="saibaM" type="button" onclick="location.href='../Catalogo/livro.php'" value="Saiba mais">
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>     
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/livro2.jpg">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$99,99" disabled>
                                <input class="saibaM" type="button" value="Saiba mais">
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>        
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/livro3.jpg">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$99,99" disabled>
                                <input class="saibaM" type="button" value="Saiba mais">
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>        
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/livro4.jpg">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$99,99" disabled>
                                <input class="saibaM" type="button" value="Saiba mais">
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>        
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/livro5.jpg">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$99,99" disabled>
                                <input class="saibaM" type="button" value="Saiba mais">
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>        
                        <div class="book-border">
                            <img class="img-livro" src="Imagens/livro6.jpg">
                            <div class="infoC">
                                <input class="preco" type="text" value=" R$99,99" disabled>
                                <input class="saibaM" type="button" value="Saiba mais">
                            </div>
                            <div class="comprar">
                                <a class="comprar-a" href="/pagamento/pagamento.php">COMPRAR</a>               
                            </div>
                        </div>            
                </div>
            </div>    
        </div>
 
    </main>
</body>
</html>