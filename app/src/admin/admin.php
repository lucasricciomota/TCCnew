<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <div class="container-fluid">
    <?php require_once("headeradmin.php");?>
         
</div>        
    <div class="row sfs jumbotron">
		<div class="col-md-6"></div>
    <h1>São Francisco do Sul</h1>
		<div class="col-md-6">
</div>
    </div>
		
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Compilador de Imagens-->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="2.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="3.jpg" alt="Flower" width="460" height="345">
      </div>

      <div class="item">
        <img src="4.jpg" alt="Flower" width="460" height="345">
      </div>
      
      <div class="item">
        <img src="5.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Controles de direita e esquerda -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
</div>
    </body>
</html>
