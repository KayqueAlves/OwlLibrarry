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
    <title>OwlLibrary</title>
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/catalago.css">
 
</head>

 <body>


    <header class="header">
        <nav>
            <ul class="menu">
                <label for="check" id="icone"><a class="genero">Gêneros</a></label>
            </ul>
        </nav>
        <a class="iconeSite" href="/Home/homeLog.php"><img src="Imagens/IconeSimples.png"></a>
        <input type="button" onclick="location.href='../Perfil/usuario.php'" class="perfil">


    </header>

    <input type="checkbox" id="check">
    
        <div class="barra">	
	<nav>
		<a href=""><div class="link">Home</div></a>
		<a href=""><div class="link">Fantasia</div></a>
		<a href=""><div class="link">Ficção científica </div></a>
		<a href=""><div class="link">Romance </div></a>
		<a href=""><div class="link">Infantil</div></a>
        <a href=""><div class="link">Mistério </div></a>
        <a href=""><div class="link">Ação e Aventira </div></a>
        <a href=""><div class="link">Horror </div></a>
        <a href=""><div class="link">Suspense </div></a>
	</nav>	
</div>

   
        <form class="search-container">
          <input type="text" id="search-bar" placeholder=" Pesquisar">
          <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
        </form>
      
      


    <h1>LIVROS</h1>

    <section class="flex">
        <div>
            <img class="livroIMG" src="Imagens/livro1.jpg">
            <a href="livro1.php"> COMPRAR</a>
            

        </div>

        <div>
            <img src="Imagens/livro2.jpg">
            <a href="Livro2.html">COMPRAR </a>

        </div>

        <div>
            <img src="Imagens/livro3.jpg">
            <a href="livro3.html">COMPRAR </a>

        </div>

        <div>
            <img src="Imagens/livro 4.jpg">
            <a href="livro4.html">COMPRAR </a>

        </div>

        <div>
            <img src="Imagens/livro5.jpg">
            <a href="livro5.html">COMPRAR </a>

        </div>

        <div>
            <img src="Imagens/livro6.jpg">
            <a href="livro6.html">COMPRAR</a>

        </div>
        <div>
            <img src="Imagens/livro7.jpg">
            <a href="livro7.html">COMPRAR </a>

        </div>

        <div>
            <img src="Imagens/livro8.jpg">
            <a href="livro8.html">COMPRAR </a>

        </div>

        <div>
            <img src="Imagens/livro9.jpg">
            <a href="livro9.html">COMPRAR</a>

    </section>
    

</body>

</html>