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
    <meta name="viewport" content="width=device-width, initial-scale=0.67">
    <title>OwlLibrary</title>
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/livro1.css">
 
</head>

 <body>

    <header class="header">

        <a class="IconeSite" href="/Home/homeLog.php"><img src="Imagens/IconeSimples.png"></a>

    </header>

    <input type="button" class="voltar" onclick="location.href='/Catalogo/catalogo.php';">

<h1 class="titulo" >HARRY POTTER E O CALICE DE FOGO - 1ªED.(2017)</h1><br>
<div class="autordiretor">autor:J. K. Rowling </a></span><br /><span id="lblNomProdutor">editora: Rocco</a></span></div>


<div class="sinopse">
    <p id="lblSinopse">Nesta aventura, o feiticeiro cresceu e está com 14 anos. O início do ano letivo de Harry Potter reserva muitas emoções, mágicas, e acontecimentos inesperados, além de um novo torneio em que os alunos de Hogwarts terão de demonstrar todas as habilidade mágicas e não-mágicas que vêm adquirindo ao longo de suas vidas. Harry é escolhido pelo Cálice de Fogo para competir como um dos campeões de Hogwarts, tendo ao lado seus fiéis amigos. Muitos desafios, feitiços, poções e confusões estão reservados para Harry. Além disso, ele terá que lidar ainda com os problemas comuns da adolescência - amor, amizade, aceitação e rejeição.</p>		            
<a href="/pagamento/pagamento.php" class="button">COMPRAR</a>
</div>
  
    <img class="img-livro" src="Imagens/livro1.jpg">
   
 </body>