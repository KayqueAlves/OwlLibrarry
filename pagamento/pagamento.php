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
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>OwlLibrary</title>
    <link rel="stylesheet" href="/pagamento/CSS/pagamento.css">
    <link rel="shortcut icon" href="Imagens/owl.png" type="image/x-icon">

</head>

<body>
    <header class="cabecalho">
        <div class="logo">
            <a href="/Home/homeLog.php"><img class="icone" src="imagens/IconeSimples.png" alt="Logo simplificada do site"></a>
        </div>
    </header>

    <div class="barra"></div>


    <form class="forma-pagamento" action="">

    <div class="pagamentoF">

        <div class="input-C">
            <input class="inp" type="radio" id="C">
            <label for="C">Cartão de crédito</label>
        </div>
            

        <div class="input-P">        
            <input class="inp" type="radio" id="P">
            <label for="P">PayPal</label>
        </div>

    </div>
     
        <div class="dados">
            <div class="livro">
                <img width="200px" class="livro-img" src="/pagamento/Imagens/livro1.jpg" alt="">
                <h1 class="titulo">Harry Potter e o calice de fogo</h1>
            </div>
            
            <div class="info-livro-top">
                <p>Preço:</p>
                <p>R$ 99,99</p>
            </div>

            <div class="info-livro-but">
                <p class="total">Total:</p>
                <p class="preco-but">R$ 99,99</p>
            </div>

            <div class="dado-final">
                    <p class="pagamento">Método de pagamento:</p>
                <div class="valor">
                    <p>PayPal</p>
                    <p>R$ 99,99</p>
                </div>
            </div>

            <button class="comprar" type="submit">Finalizar Compra</button>

        </div>

    </form>

</body>
</html>