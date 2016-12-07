<?php
    require_once("../../config/conexao.php");
    $nome = $_POST ['nome'];
    $telefone = $_POST ['telefone'];
    $email = $_POST ['email'];
    if ($_POST['senha'] == $_POST['senha2']) {

        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email= '$email'";

        $resultado = mysqli_query($connection, $sql);
        $quantidadedelinhas = mysqli_num_rows($resultado);

        if ($quantidadedelinhas == 1){
            echo ("Este usuário já existe");
        } else {
            $senha = md5($senha);
            $sql = "INSERT INTO usuario (nome, telefone, email, senha, IdtipoUsuario, idcidade) 
                            VALUES ('$nome', '$telefone', '$email', '$senha', 2, 1)";
            $cadastrar = mysqli_query($connection, $sql);

            if ($cadastrar){
                header("location:/TCCnew/app/src/");
            }
        }
    } else {
        echo "Senhas não correspondem";
    }
