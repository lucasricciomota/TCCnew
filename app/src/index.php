<html>
<head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link rel="stylesheet" type="text/css" href="/TCCnew/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/TCCnew/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/TCCnew/public/css/carousel.css">
</head>
    <body>
        <?php
            session_start();
            include ("header.php");
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
                        <img src="/TCCnew/images/1.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="/TCCnew/images/2.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="/TCCnew/images/3.jpg" alt="...">
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
        </div>

        <div class="row container-block">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title text-center">São Francisco do Sul</h1>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-md-5">
                        <h3 class="block-title">História?</h3>
                        <h4>São Francisco do Sul é a cidade mais antiga de Santa Catarina e a terceira cidade mais antiga do Brasil.</h4>
                        <button class="btn btn-info"><a href="historia/historia.php">Veja mais</a></button>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 video">
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/OMJTAZLH9lE" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-12 text-center">
                        <h3 class="block-title">Lugares</h3>
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/OMJTAZLH9lE" frameborder="0" allowfullscreen></iframe>
                        <h4>Bla</h4>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-5 video">
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/OMJTAZLH9lE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <h3 class="block-title">Quem Somos?</h3>
                        <h4>Somos estudantes formados no curso técnico de Informática integrado com o Ensino Médio
                            do Instituto Federal de Ciência e Tecnologia do campus de Araquari, e como moradores de São Francisco do Sul
                            conhecemos a falta de acesso e de informação sobre a cidade que é tão bela,
                            mas não aproveitada ao máximo.</h4>
                        <button class="btn btn-info"><a href="quem%20somos/quem%20somos.php">Descubra mais</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <script src="/TCCnew/public/js/jquery.min.js"></script>
        <script src="/TCCnew/public/js/bootstrap.min.js"></script>
        <script src="/TCCnew/public/js/scripts.js"></script>
    </body>
</html>
