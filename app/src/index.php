<html>
<head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
<!--    <link rel="stylesheet" type="text/css" href="../../public/css/carousel.css">-->
    <style type="text/css">
        div.row{
            margin-right: 0;
            margin-left: 0;
        }
    </style>
</head>
    <body>
        <?php
        session_start();
        if (isset($_SESSION["idtipousuario"])) {
            $idtipousuario = $_SESSION["idtipousuario"];
            if ($idtipousuario == "1") {
                include("admin/headeradmin.php");
            }
            if ($idtipousuario == "2") {
                include("header.php");
            }
        }
        else {
            include("header.php");
        }
        ?>

        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../../imagens/1.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="../../imagens/2.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="../../imagens/3.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="row content">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <h1 class="titulo1 text-center">São Francisco do Sul</h1>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <h3>Quem Somos?</h3>
                        <h4>Somos estudantes formados no curso técnico de Informática integrado com o Ensino Médio
                            do Instituto Federal de Ciência e Tecnologia do campus de Araquari, e como moradores de São Francisco do Sul
                            conhecemos a falta de acesso e de informação sobre a cidade que é tão bela,
                            mas não aproveitada ao máximo. Além disso, vemos também a quantidade de turistas que
                            frequantam as praias e os pontos históricos de São Francisco anualmente e não conseguem
                            se encontrar com facilidade, deixando passar boas experiências e ótimos lugares para se conhecer.
                            Assim desenvolvemos este site com o objetivo de integrar tanto os turistas como o moradores para que
                            conheçam mais da cidade e desfrutem ao máximo dos recursos que ela tem para oferecer.</h4>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <iframe width="100%" height="420" src="https://www.youtube.com/embed/OMJTAZLH9lE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <script src="../../public/js/jquery.min.js"></script>
        <script src="../../public/js/bootstrap.min.js"></script>
        <script src="../../public/js/scripts.js"></script>
    </body>
</html>


