<?php

?>
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul</title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
    <link href="/TCCnew/public/css/freelancer.min.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">

        <?php include("../header.php");?>

        <div class="row pontos jumbotron">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <h1>Pontos Turísticos</h1>
            </div>
            <div class="col-md-4"></div>
	    </div>

            <div class="row" >
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <?php
                        session_start();
                        if (isset($_SESSION["idusuario"])) {
                            if ($_SESSION["idtipousuario"] == "1") {
                                echo "<a href='cadastroponto.php'>Cadastrar Ponto Turístico</a>";
                            }
                        }
                        session_destroy();
                    ?>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="museu2.jpg" class="img-responsive img-rounded ">
                        </div>
                        <div class="col-md-9 jumbotron 2">
                            <h4>teste</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><h4>Museu Nacional do Mar</h4></div>
                        <div class="col-md-6"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <img src="prainha22.jpg" class="img-responsive img-rounded ">
                        </div>
                        <div class="col-md-9 jumbotron"><h4>teste</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><h4>Prainha</h4></div>
                        <div class="col-md-6"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <img src="dunas2.jpg" class="img-responsive img-rounded ">
                        </div>
                        <div class="col-md-9 jumbotron"><h4>teste</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><h4>Dunas Acaraí</h4></div>
                        <div class="col-md-6"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <img src="vila2.jpg" class="img-responsive img-rounded ">
                        </div>
                        <div class="col-md-9 jumbotron"><h4>teste</h4></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"><h4>Vila da Glória</h4></div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <script src="/TCCnew/public/js/jquery.min.js"></script>
        <script src="/TCCnew/public/js/bootstrap.min.js"></script>
        <script src="/TCCnew/public/js/scripts.js"></script>
	</body>
</html>
