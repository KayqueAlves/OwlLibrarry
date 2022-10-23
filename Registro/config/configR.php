<?php
    if (isset($_POST['submit'])) {
        include_once('../../BD/config.php');

        $name = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $confirmar = $_POST['confirmar'];

        if (password_verify($confirmar , $senha) == TRUE) {
            $result = mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha) VALUES ('$name', '$email','$senha')");
            header('location: /Registro/login.php');

        } else {
            header('location: /Registro/cadastro.php');
        }   
    }
?>