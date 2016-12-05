<meta charset="utf-8">
<?php
require_once("../conexao.php");
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $endereco = $_POST ['endereco'];
    $descricao = $_POST ['descricao'];
    $site = $_POST ['site'];
    $hora = $_POST ['horaatendimento']; 
    $telentrega = $_POST ['telentrega'];
    $latitude = $_POST ['latitude'];
    $longitude = $_POST ['longitude'];
    
    $sintaxesql = "SELECT * FROM restaurante WHERE nome = '$nome'";
    $resultado = mysqli_query($conexao,$sintaxesql);
    $quantidadedelinhas = mysqli_num_rows($resultado);
    if ($quantidadedelinhas == 1){
        echo ("Este restaurante já existe");
    }

    else{ 
        $sintaxesql = "INSERT INTO restaurante (nome,endereco,telefone,HoraAtendimento,teleentrega,descricao,email,site,latitude,longitude) VALUES ('$nome','$endereco','$telefone','$hora','$telentrega','$descricao','$email','$site','$latitude','$longitude')";
        echo $sintaxesql;
        $cadastrar = mysqli_query($conexao, $sintaxesql);
        header("location:cadastrorest.php");
       }
?>
