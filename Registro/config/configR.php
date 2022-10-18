<?php
    if (isset($_POST['submit'])) {
        include_once('../../BD/config.php');

        $name = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmar = $_POST['confirmar'];

        if ($senha == $confirmar) {
            $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$email','$senha')");
        } else {
            header('location: /Registro/cadastro.php');
        }   
    }
?>