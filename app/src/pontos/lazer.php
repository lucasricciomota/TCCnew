<!DOCTYPE html>
<html>
    <head>
        <title>Museus</title>
        <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/TCCnew/public/css/style.css" rel="stylesheet">
        <link href="/TCCnew/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <style type="text/css">
            .modal.modal-wide .modal-dialog {width: 90%;}
            .modal-wide .modal-body {overflow-y: auto;}

            /* irrelevant styling */
            #tallModal .modal-body p { margin-bottom: 200px }
            .main-image {
              margin-bottom: 0.75em;
            }
            .thumbnails li {
              display: inline;
              margin: 0 10px 0 0;
            }
            .thumbnails li img{
                width: 60px;
            }
            .jumbotron{
                padding-bottom:10px;
                padding-top:10px;
            }
            .modal-header{
                padding:10px;
            }
            .modal-body{
                padding:5px;
            }
            .modal-body .main-image img{
                width: 100%;
            }
            .container-fluid .jumbotron {
                padding-right: 10px;
                padding-left: 10px;
            }

            .thumbnails li img {
                width: 60px;
                height: 60px;
            }
            .img{
                height:598px;
            }
            .rowmuseus{
                margin-right: 15px;
                margin-left: 15px;
                margin-bottom: 15px;
            }
            #map{
                width: 100%;
                height: 300px;
            }
            .rowtitulo{
                margin-top:100px;
            }

        </style>
    </head>
    <body>
        <?php session_start(); include("../header.php");?>
        <div class="container-fluid">
        <div id='tallModal' class='modal modal-wide fade'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                  <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button></br>
              </div>
              <div class='modal-body'>
                <div class='rowmuseus'>

                    <div class='col-md-6 jumbotron'>
                        <div class='main-image'>
                            <img alt='Placeholder' class='custom' id='modalImgPrincipal'>
                        </div>
                        <ul class='thumbnails'>
                        </ul>

                    </div>
                    <div class='col-md-6 jumbotron'>
                        <div class='row''>
                            <div class='col-md-12' id="idnomemodal"><h1 id="idnomemodal"></h1></div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12' id='idavaliaçãomodal'>
                                <form action="processaavaliacao.php" method="get">
                                  Nota:
                                  <input type="range" name="nota" min="0" max="5" value = "0">
                                  <input type="hidden" name="idponto" value=""> 
                                  <input type="submit">
                                </form>
                               <!--  <form style="display:none" title="Avaliação: <?=$r?>" class="rating" action="processaavaliacao.php">
                                    <input type="hidden" name="valor" value="1" />
                                    <select id="rl">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>    
                                        <option value="5">5</option>
                                    </select>
                                </form>
                                <?php 
                                    // require_once("../../config/conexao.php");
                                    // $SQL = " SELECT votos, nota FROM avaliacao WHERE idAvaliacao = 1";
                                    // $RS = mysql_query($SQL);
                                    // $RF = mysql_fetch_array($RS);
                                    // $r = number_format($RF[ 'nota' ] / $RF[ 'votos' ],2,'.','.');
                                 ?> -->
                                
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12' id='idinfomodal'></div>
                        </div>
                    </div> 
                       
                </div>
                <div class="rowmuseus">
                    <div id="map"></div>
                    <script async defer
                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDS6Y37V8-TuqQ70bfgNQ6q-aAgmikJ9NM&callback=initMap">
                    </script>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
                    <div class="rowtitulo">
                        <div class="col-lg-12 text-center">
                            <h2>Lazer</h2>
                            </br>   
                        </div>
                    </div>
        <?php
            require_once("../../config/conexao.php");

            $sql = "select p.idponto, p.nome, m.fotos as fotos, p.latitude, p.longitude
                    from ponto p
                    left join midia m on p.idponto = m.idponto
                    where idTipoPonto = 6
                    and m.principal 
                    group by p.idponto, p.nome;";
            $resultado = mysqli_query($connection, $sql);
            $contador = 0;
            $contadorimg = 0;
            $linhas = mysqli_fetch_all($resultado, MYSQL_ASSOC);

            echo '<script type="text/javascript">var museus = JSON.parse(\''.json_encode($linhas).'\');</script>';

            foreach ($linhas as $linha) {
                $contador = $contador + 1;
                $contadorimg = $contadorimg + 1;
                $id = $linha["idponto"];
                $nome = $linha["nome"];
                $fotos = $linha["fotos"];

                 if ($contador == 1) {
                    echo "<div class='row'>
                            <div class='col-md-12'>";
                }
                echo "<div class='col-md-4'>
                            
                            <div class='col-md-12'>
                                <div class='row'><a onclick='mostrarModal(" . $id . ")'><img src='$fotos' class='img-responsive'></a></div>
                                <div class='row'>" . $nome . "</div>
                            </div>
                        </div>";
                if ($contador == 3) {
                    echo "  </div>
                        <div class='col-md-1'></div>
                        </div>";
                    $contador = 0;
                }
            }
            if ($contador == 1) {
                echo "<div class='col-md-8'></div>";
                echo "  </div>
                    <div class='col-md-1'></div>
                    </div>";
            }
            if ($contador == 2) {
                echo "<div class='col-md-4'></div>";    
                echo "  </div>
                    <div class='col-md-1'></div>
                    </div>";
            }

            
        ?>
        </div>
        <script src="/TCCnew/public/js/jquery.min.js"></script>
        <script src="/TCCnew/public/js/bootstrap.min.js"></script>
        <script src="/TCCnew/public/js/rating.js"></script>
        <script src="/TCCnew/public/js/scripts.js"></script>
        <script type="text/javascript">
            jQuery(function(){     jQuery('form.rating').rating(); }); 
        </script>
    </body>
</html>
