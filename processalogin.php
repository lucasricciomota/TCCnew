<?php
    echo "chegouuuu";
    require_once("conexao.php");
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sintaxesql = "select * from usuario where email = '$email' and senha = md5('$senha')";
        $resultado = mysqli_query($conexao, $sintaxesql);
        if ($resultado) {
            if (mysqli_num_rows($resultado) > 0) {
                while ($linha = mysqli_fetch_array($resultado)) {
                    session_start();
                    $_SESSION["idusuario"] = $linha["idusuario"];
                    $_SESSION["nomeusuario"] = $linha["nome"];
                    $_SESSION ["idtipousuario"] = $linha["idtipoUsuario"];
                    header('location:index.php');
                }
            }
            else {
                echo "Usuário ou Senha Incorretos!";
            }
        }
        else {
            echo "Erro: " . mysqli_error($conexao);
        }
    }
?>
