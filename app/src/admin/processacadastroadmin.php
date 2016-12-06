<meta charset="utf-8">
<?php
    require_once("../conexao.php");
    $nome = $_POST ['nome'];
    $telefone = $_POST ['telefone'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha']; 
    $senha2 = $_POST ['senha2'];
    if ($senha == $senha2) {
        $sintaxesql = "SELECT * FROM Usuario WHERE nome = '$nome'";
        $resultado = mysqli_query($connection,$sintaxesql);
        $quantidadedelinhas = mysqli_num_rows($resultado);
        if ($quantidadedelinhas == 1){
            echo ("Este usuário já existe");
        }
        else{ 
            $senha = md5($senha);
            $sintaxesql = "INSERT INTO Usuario (nome,telefone,email,senha,IdtipoUsuario,idcidade) VALUES ('$nome','$telefone','$email','$senha','1','1')";
            echo $sintaxesql;
            $cadastrar = mysqli_query($connection, $sintaxesql);
            session_start();
            $_SESSION['nome'] = $nome;
            header("location:../index.php");
        }
    }    


?>
