<?php 
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        include_once('../../BD/config.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha' ";

        $result = $conexao->query($sql);

        print_r($result);

        if (mysqli_num_rows($result) < 1) {
            
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