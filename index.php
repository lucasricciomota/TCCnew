<html>
<head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/stylefooter.css" rel="stylesheet">
    <style type="text/css">
        footer {
        position: fixed;
        height: 300px;
        bottom: 0;
        width: 100%;
        color: black;

        .carousel-inner > .item > img, .carousel-inner > .item > a > img {
        width: 100%;
        height: 470px;
        margin: auto;
        }
    </style>
</head>
    <body>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
              <h1 class="titulo1">São Francisco do Sul</h1>
            </div>
        </div>
        <div>
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
        </div>
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
                    <img src="imagens/1.jpg" alt="...">
                    <div class="carousel-caption"></div>
                </div>
                <div class="item">
                    <img src="imagens/2.jpg" alt="..."/>
                    <div class="carousel-caption"></div>
                </div>
                <div class="item">
                    <img src="imagens/3.jpg" alt="..."/>
                    <div class="carousel-caption"></div>
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
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
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
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <iframe width="854" height="480" src="https://www.youtube.com/embed/OMJTAZLH9lE" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-2"></div>
        </div>

        <?php include("footer.php");?>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>


