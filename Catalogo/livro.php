<?php include '../BD/logado.php' ; ?>
<?php include '../BD/config.php' ; ?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM livro WHERE id_livro = '$id'";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $dados = $result->fetch_assoc();
        
        $img = $dados['capa'];
        $preco = $dados['preco'];
        $titulo = $dados['titulo'];
        $autor = $dados['autor'];
        $sinopse = $dados['sinopse'];
    }    
?>

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
                <img class="capa" width="250px" src="/Catalogo/Imagens/<?= $img; ?>" alt="">
                <div class="fav">
                    <input class="preco" type="text" value=" R$<?=$preco;?>,00" disabled>
                    <p>Favoritar</p><input class="fav-icon" type="checkbox" >
                </div>
                 <a class="comprar" href="/pagamento/pagamento.php">COMPRAR</a>
                
            </form>

            <section class="info">
                <input class="titulo" type="text" value="Titulo: <?=$titulo;?>" disabled>
                <input class="autor" type="text" value="Autor(a): <?=$autor?>" disabled>

                <div>
                    <h1>SINOPSE</h1>
                    <div style="overflow-y: scroll ;" class="sinopse">
                        <p><?=$sinopse;?></p>
                    </div>
                </div>

            </section>

        </div>
    </main>
</body>
</html>