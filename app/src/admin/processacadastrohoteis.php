<meta charset="utf-8">
<?php
require_once("../../config/conexao.php");
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $endereco = $_POST ['endereco'];
    $descricao = $_POST ['descricao'];
    $site = $_POST ['site'];
    $hora = $_POST ['horaatendimento'];
    $latitude = $_POST ['latitude'];
    $longitude = $_POST ['longitude'];
    $tipohospedagem = $_POST ['tipohospedagem']; 
        $sintaxesql = "SELECT * FROM hospedagem WHERE nome = '$nome'";
        $resultado = mysqli_query($connection,$sintaxesql);
        $quantidadedelinhas = mysqli_num_rows($resultado);
        if ($quantidadedelinhas == 1){
            echo ("Este hotel já está cadastrado");
        }
        else{ 
    $sintaxesql = "INSERT INTO hospedagem (nome,email,telefone,endereco,descricao,site,HoraAtendimento,latitude,longitude,idTipoHospedagem) 
    VALUES ('$nome','$email','$telefone','$endereco','$descricao','$site','$hora','$latitude','$longitude','$tipohospedagem')";
    echo $sintaxesql;
    $cadastrar = mysqli_query($connection, $sintaxesql);
    header("location:cadastrohoteis.php");
            }
          


?>
