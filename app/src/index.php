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
        <div class="row" style="position: relative; top: 98px; left: 0;">
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
                        <img src="/TCCnew/public/images/1.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="/TCCnew/public/images/2.jpg" alt="...">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img src="/TCCnew/public/images/3.jpg" alt="...">
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


                <div id="historia" class="row content">
                    <div class="col-md-5">
                        <h3 class="block-title">História?</h3>
                        <h4>São Francisco do Sul é a cidade mais antiga de Santa Catarina e a terceira cidade mais antiga do Brasil.</h4>
                        <button class="btn btn-info"><a href="historia/historia.php">Veja mais</a></button>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 video">
                        <img width="100%" height="50%" src="/TCCnew/public/images/1.jpg" />
                    </div>
                </div>

                <hr/>

                <div id="lugares" class="row content">
                    <div class="col-md-12 text-center">
                        <h3 class="block-title">Lugares</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <h3 class="form-input-title">Pontos</h3>
                                <div class="row">
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/pontos/trilhas.php">Trilhas</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/pontos/ilhas.php">Ilhas</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/pontos/praias.php">Praias</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/pontos/lazer.php">Lazer</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/pontos/radical.php">Radical</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/pontos/museus.php">Museus</a></button>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                                <h3 class="form-input-title">Hospedagens</h3>
                                <div class="row">
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/hospedagens/pousadas.php">Pousadas</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/hospedagens/hoteis.php">Hotéis</a></button>
                                    <button class="btn btn-default"><a href="/TCCnew/app/src/hospedagens/campings.php">Camping</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr/>

                <div id="quem-somos" class="row content">
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

                <hr/>

                <div id="faca-parte" class="row content">
                    <div class="col-md-12 text-center">
                        <h3 class="block-title">Cadastre-se</h3>
                        <button class="btn btn-success"><a href="/TCCnew/app/src/cadastro/">Clique aqui</a></button>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row footer">
            <div class="col-md-12">
                <footer></footer>
            </div>
        </div>
        <script src="/TCCnew/public/js/jquery.min.js"></script>
        <script src="/TCCnew/public/js/bootstrap.min.js"></script>
        <script src="/TCCnew/public/js/scripts.js"></script>
    </body>
</html>
