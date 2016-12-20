<?php

    require_once(explode('src', getcwd())[0]."config/conexao.php");

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $sql = "select * from usuario where email='$email' AND senha='$senha'";
        $resultado = mysqli_query($connection, $sql);
        if ($resultado) {
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_array($resultado)) {
                    session_start();
                    $_SESSION["idusuario"] = $linha["idusuario"];
                    $_SESSION["nomeusuario"] = $linha["nome"];
                    $_SESSION ["idtipousuario"] = $linha["idtipoUsuario"];
                    header('location:indexteste.php');
                }
            } else {
                echo "Usuário não encontrado";
            }
        }
        else {
            header("location:../error.php");
        }
    }
