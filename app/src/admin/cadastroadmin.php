
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul</title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
</head>
<body>  

    <?php session_start(); include("../header.php");?>

    <div class="page-content">
        <div class="row">
            <div class="row jumbotron">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1 class="title">Cadastre um usuário</h1>
                    <h3 class="font-montserrat">como administrador do site</h3>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="row">
                    <form action="processacadastroadmin.php" class="form-data" method="post">
                        <div class="row">
                            <h4 class="form-input-title">Nome:</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="form-input-title">E-mail:</h4>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon2" required>
                            </div>
                        </div>
                        <div class="row">
                                <h4 class="form-input-title">Telefone:</h4>
                                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2">
                        <span class="glyphicon glyphicon-phone"></span>
                     </span>
                                    <input type="text" class="form-control" placeholder="Telefone" name="telefone" aria-describedby="basic-addon2" required>
                                </div>
                        </div>
                        <div class="row">
                                <h4 class="form-input-title">Senha:</h4>
                                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                </div>
                        </div>
                        <div class="row">
                                <h4 class="form-input-title">Digite a sua senha novamente:</h4>
                                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4">
                        <span class="glyphicon glyphicon-lock"></span>
                    </span>
                                    <input type="password" class="form-control" name="senha2" placeholder="Senha" required>
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
    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/scripts.js"></script>
</body>
</html>