<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>São Francisco do Sul
    </title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
    <style type="text/css">
        .jumbotron {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <?php
    session_start();
    if (!isset($_SESSION['idtipousuario']) || $_SESSION['idtipousuario'] != 1) {
        header("location:../index.php");
        exit;
    }

    include("../header.php");
    ?>
</div>

<div class="page-content">
    <div class="row">
        <div class="row jumbotron">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="textotitulo1" style="font-size:40px;">Cadastre Pontos Turísticos</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="row">
                <form action="processacadastroponto.php" class="form-data" method="post" enctype="multipart/form-data">
                    <div class="row">
                            <h4 class="form-input-title">Nome:</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                            </div>
                    </div>
                    <div class="row">
                            <h4 class="form-input-title">Descrição:</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2"></span>
                                <input type="text" class="form-control" placeholder="Descrição" name="descricao" aria-describedby="basic-addon2" required>
                            </div>
                    </div>
                    <div class="row">
                            <h4 class="form-input-title">Endereço:</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2"></span>
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" aria-describedby="basic-addon2" required>
                            </div>
                    </div>
                    <div class="row">
                            <h4 class="form-input-title">Latitude / Longitude</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2"></span>
                                <input type="text" class="form-control" placeholder="Latitude" name="latitude" aria-describedby="basic-addon2" required>
                                <input type="text" class="form-control" placeholder="Longitude" name="longitude" aria-describedby="basic-addon2" required>
                            </div>
                    </div>
                    <div class="row">
                            <h4 class="form-input-title">Tipo do Ponto</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2"></span>
                                <select id="tipoponto" name="tipoponto" class="form-control" aria-describedby="basic-addon2" required>
                                    <?php
                                    require_once("../../config/conexao.php");
                                    $sql = "select * from tipoponto order by descricao;";
                                    $resultado = mysqli_query($connection, $sql);
                                    while ($linha = mysqli_fetch_array($resultado)) {
                                        $id = $linha["idTipoPonto"];
                                        $descricao = $linha["descricao"];
                                        echo "<option value='$id'>$descricao</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="row">
                            <h4 class="form-input-title">Foto do ponto</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2"></span>
                                <input type="file" name="foto" aria-describedby="basic-addon2" required>
                                <input type="file" name="fotosAdicionais[]" aria-describedby="basic-addon2" multiple>
                            </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Enviar" class="btn btn-default btn-enter">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<script src="/TCCnew/public/js/jquery.min.js"></script>
<script src="/TCCnew/public/js/bootstrap.min.js"></script>
<script src="/TCCnew/public/js/scripts.js"></script>
</body>
</html>
