<html>
<head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
    <style type="text/css">
        div.row{
            margin-right: 0;
            margin-left: 0;
        }
    </style>
</head>
<body>
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
    <div class="row">
        <div class="row">
            <h1 class="titulo1 text-center">São Francisco do Sul</h1>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 jumbotron"><h3>Quem Somos</h3></div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- <footer>
    <div class="container footerWrap">
      <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h4>BootstrapBay</h4>
            <ul class="list-unstyled">
              <li><a href="/sell">Sell Your Themes</a></li>
              <li><a href="/affiliate">Affiliates</a></li>
              <li><a href="/about">About Us</a></li>
              <li><a href="/feed">RSS Feed</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h4>Help &amp; Support</h4>
          <ul class="list-unstyled">
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/submission-guidelines">Submission Guidelines</a></li>
            <li><a href="/payment-rates">Payment Rates</a></li>
            <li><a href="/contact-support">Contact Support</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h4>Resources</h4>
          <ul class="list-unstyled">
            <li><a href="https://stocksnap.io" target="_blank">Free Stock Photos</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/blog/bootstrap-resources/">Resource List</a></li>
            <li><a href="/blog/category/tutorials/">Tutorials</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h4>Social</h4>
          <ul class="list-unstyled">
            <li><a href="https://www.facebook.com/bootstrapbay" target="_blank">Facebook</a></li>
            <li><a href="https://twitter.com/bootstrapbay" target="_blank">Twitter</a></li>
            <li><a href="http://www.youtube.com/user/bootstrapbayofficial" target="_blank">YouTube</a></li>
            <li><a href="https://plus.google.com/+BootstrapbayThemes/posts" target="_blank">Google+</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="subFooter">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="pull-left">
            © 2016 <a href="http://noscomedia.com/" target="_blank">Nosco Media Inc.</a> /
            <a href="/licenses">Licenses</a> /
            <a href="/terms">Terms &amp; Conditions</a> /
            <a href="/privacy">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer> -->
    <script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
    <script src="../../public/js/scripts.js"></script>
</body>
</html>


