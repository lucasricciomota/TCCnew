<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul</title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
</head>
    <body>
        <?php
            session_start();

            if ($_SESSION['nomeusuario']) {
                header('location:index.php');
            } else{
                include("header.php");
            }
        ?>
        <div class="page-content">
            <div class="row">
                <div class="row jumbotron">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <h1 class="title">Faça seu login</h1>
                        <h3 class="font-montserrat">e aproveite os recursos do site</h3>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4 text-right">
                        <h3 class="font-montserrat">
                            Não tem uma conta?
                        </h3>
                        <a href="cadastro/index.php"><p class="font-montserrat">Faça agora!</p></a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="row">
                        <form action="processalogin.php" class="form-data login" method="post">
                            <div class="row">
                                <h3 class="form-input-title">E-mail:</h3>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </span>
                                    <input type="text" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon2" required>
                                </div>
                            </div>
                            <div class="row">
                                <h3 class="form-input-title">Senha:</h3>
                                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon4">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </span>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="Entrar" class="btn btn-default btn-enter">
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
