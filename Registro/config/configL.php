<?php 
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        include_once('../../BD/config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $result = $conexao->query($sql);

        $verify = $result->fetch_assoc();

        if (password_verify($senha, $verify['senha']) == false) {
            
        header('Location: /Registro/login.php');

        } else {

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: /Perfil/usuario.php');
        }

    }else{

        header('Location: /Registro/login.php');
    }

?>