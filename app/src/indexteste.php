
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>São Francisco do Sul</title>

    <link href="../../public/css/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../public/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../../public/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="../../public/slick/slick/slick-theme.css"/>

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <style type="text/css">
      .btn-warning {
        color: #fff;
        background-color: #e55829;
        border-color: #e55829;
        }

      .align-right { text-align:right; }

    </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <?php 
    session_start();
    include("header.php"); 
  ?>
    <hr class="divisor">
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel fade-carousel slide" data-ride="carousel">
      <!-- Indicators -->
     

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img class="first-slide"  src="/TCCnew/public/images/fundo2.jpg" alt="First slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1 class="textotitulo1" style="font-size:45px;">Conheça</h1>
              <h1 class="textotitulo" style="font-size:68px;">São Francisco do Sul</h1>
              <br>
              <br>
              <br>
              <p><a class="btn btn-lg btn-warning" href="cadastro/index.php" role="button">Cadastre-se</a></p>
              <br>
            </div>
          </div>  
        </div>

        <div class="item">
          <img class="second-slide" src="/TCCnew/public/images/carousel/museudomar.jpg" alt="Second slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:60px;">
              <h1 class="textotitulo1" style="font-size:32px;">Visite o grande acervo do Museu Nacional do Mar</h1>
              <a class="btn btn-lg btn-warning" href="pontos/museus.php" role="button">Veja mais &raquo;</a>
            </div>
          </div>  
        </div>

        
        <div class="item">
          <img class="second-slide" src="/TCCnew/public/images/carousel/3.jpg" alt="Second slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:60px;">
              <h1 class="textotitulo1" style="font-size:32px;">Aproveite as boas paisagens e ondas da Praia Grande</h1>
              <a class="btn btn-lg btn-warning" href="pontos/praias.php" role="button">Veja mais &raquo;</a>
            </div>
          </div>  
        </div>


        <div class="item">
          <img class="second-slide" src="/TCCnew/public/images/carousel/4.jpg" alt="Second slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:60px;">
              <h1 class="textotitulo1" style="font-size:32px;">Explore a vasta costa do Ervino</h1>
              <a class="btn btn-lg btn-warning" href="pontos/praias.php" role="button">Veja mais &raquo;</a>
            </div>
          </div>  
        </div>


        <div class="item">
          <img class="second-slide" src="/TCCnew/public/images/carousel/mercadomunicipal3.jpg" alt="Second slide">
          <div class="overlay"></div>
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:60px;">
              <h1 class="textotitulo1" style="font-size:32px;">Venha comprar no antigo e famoso Mercado Municipal</h1>
              <a class="btn btn-lg btn-warning" href="pontos/lazer.php" role="button">Veja mais &raquo;</a>
            </div>
          </div>  
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


  

    <div class="container marketing">

<!--       <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div> -->

       <!-- <div class="slider slider-for slick-initialized slick-slider">
        <div aria-live="polite" class="slick-list draggable">
          <div class="slick-track" style="opacity: 1; width: 2800px;" role="listbox">
            <div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 560px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="-1" role="option" aria-describedby="slick-slide120">
              <h3>1</h3>
            </div>
            <div class="slick-slide" data-slick-index="1" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -560px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide121">
              <h3>2</h3>
            </div>
            <div class="slick-slide" data-slick-index="2" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -1120px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide122">
              <h3>3</h3>
            </div>
            <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -1680px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide123">
              <h3>4</h3>
            </div>
            <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="transition: opacity 500ms ease; width: 560px; position: relative; left: -2240px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide124">
              <h3>5</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="slider slider-nav slick-initialized slick-slider slick-dotted" role="toolbar">
        <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
        <div aria-live="polite" class="slick-list draggable" style="padding: 0px 50px;">
          <div class="slick-track" style="opacity: 1; width: 2002px; transform: translate3d(-462px, 0px, 0px);" role="listbox">
            <div class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>2</h3>
            </div>
            <div class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>3</h3>
            </div>
            <div class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>4</h3>
            </div>
            <div class="slick-slide slick-cloned slick-active" data-slick-index="-1" aria-hidden="false" style="width: 154px;" tabindex="-1">
              <h3>5</h3>
            </div>
            <div class="slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" style="width: 154px;" tabindex="-1" role="option" aria-describedby="slick-slide130">
              <h3>1</h3>
            </div>
            <div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 154px;" tabindex="-1" role="option" aria-describedby="slick-slide131">
              <h3>2</h3>
            </div>
            <div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 154px;" tabindex="-1" role="option" aria-describedby="slick-slide132">
              <h3>3</h3>
            </div>
            <div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 154px;" tabindex="-1" role="option" aria-describedby="slick-slide133">
              <h3>4</h3>
            </div>
            <div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 154px;" tabindex="-1" role="option" aria-describedby="slick-slide134">
              <h3>5</h3>
            </div>
            <div class="slick-slide slick-cloned slick-center" data-slick-index="5" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>1</h3>
            </div>
            <div class="slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>2</h3>
            </div>
            <div class="slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>3</h3>
            </div>
            <div class="slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 154px;" tabindex="-1">
              <h3>4</h3>
            </div>
          </div>
        </div>
            
        <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
        <ul class="slick-dots" style="display: block;" role="tablist">
          <li class="slick-active" aria-hidden="false" role="presentation" aria-selected="true" aria-controls="navigation130" id="slick-slide130">
            <button type="button" data-role="none" role="button" tabindex="0">1</button>
          </li>
          <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation131" id="slick-slide131" class="">
            <button type="button" data-role="none" role="button" tabindex="0">2</button>
          </li>
          <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation132" id="slick-slide132" class="">
            <button type="button" data-role="none" role="button" tabindex="0">3</button>
          </li>
          <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation133" id="slick-slide133" class="">
            <button type="button" data-role="none" role="button" tabindex="0">4</button>
          </li>
          <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation134" id="slick-slide134" class="">
            <button type="button" data-role="none" role="button" tabindex="0">5</button>
          </li>
        </ul>
      </div> -->


      <!-- START THE FEATURETTES -->

<!--       <hr class="featurette-divider">
 -->
      <div class="row featurette" id="historia">
        <div class="col-md-7">
          <h2 class="featurette-heading textotitulo1" style="font-size:45px; text-align:right;" >Hisória da cidade.</h2>
          <p class="lead texto" style="text-align:right;">São Francisco do Sul é a cidade mais antiga de Santa Catarina e a terceira cidade mais antiga do Brasil. Colonizada pelos Portugueses, espanhóis e açorianos, sua primeira ocupação, foi feita temporariamente por espanhóis por volta de 1553.</p>
            <a class="btn btn-default" href="historia/historia.php" role="button" >Leia mais &raquo;</a>
          
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="../../public/images/0.jpg" width="500px" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="quemsomos">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading textotitulo1" style="font-size:45px;">Quem Somos? </h2>
          <p class="lead texto">Somos estudantes formados no curso técnico de Informática integrado com o Ensino Médio do Instituto Federal de Ciência e Tecnologia do campus de Araquari, e como moradores de São Francisco do Sul conhecemos a falta de acesso e de informação sobre a cidade que é tão bela, mas não aproveitada ao máximo.</p>
          <a class="btn btn-default" href="quem somos/quem somos.php" role="button">Leia mais &raquo;</a>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="../../public/images/quemsomos.jpg" width="500px" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="video">
        <div class="col-md-7">
          <h2 class="featurette-heading textotitulo1" style="font-size:45px; text-align:right;">Assista ao documentário realizado.</h2>
        </div>
        <div class="col-md-5">
          <iframe width="100%" height="370px" src="https://www.youtube.com/embed/OMJTAZLH9lE" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../public/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../public/bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../public/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../public/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="../../public/slick/slick/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../../public/slick/slick/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="../../public/slick/slick/slick.min.js"></script>

    <script type="text/javascript">
       $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
      });
    </script>  
  </body>
</html>
