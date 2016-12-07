<!DOCTYPE html>
<html>
    <head>
    <title>Museus</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/freelancer.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
        .modal.modal-wide .modal-dialog {width: 95%;}
        .modal-wide .modal-body {overflow-y: auto;}

        /* irrelevant styling */
        body p { max-width: 400px; margin: 20px auto; }
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
        ul, menu, dir {
            -webkit-padding-start: 0px;
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

    </style>

    </head>
    <body>
        <?php require_once("../header.php");?>
        <script type="text/javascript">            
            function mudar(id_el, url_img){
                $(id_el).attr('src', url_img);
            }
            var map;
            var centro = {lat: 0, lng: 0};
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8
              });
              $('#tallModal').on('shown.bs.modal', function () {
                google.maps.event.trigger(map, "resize");
                map.setCenter(centro);
                map.setZoom(14);
            });
            }

            function mostrarModal(id){
                var museu = museus.find(function (v, i) {return v['idponto'] == id});

                var modal = $('#tallModal');

                modal.find('#idnomemodal').html(museu.nome);
                modal.find('#modalImgPrincipal').attr('src', museu.fotos);

                centro = {lat: parseFloat(museu.latitude), lng: parseFloat(museu.longitude)};
                console.log(museu, centro);    

                modal.modal('show');
            }
        </script>
        <div class="container-fluid">
        <div id='tallModal' class='modal modal-wide fade'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button></br>
              </div>
              <div class='modal-body'>
                <div class='rowmuseus'>

                    <div class='col-md-6 jumbotron'>Imagem e Galeria
                        <div class='main-image'>
                            <img alt='Placeholder' class='custom' id='modalImgPrincipal'>
                        </div>
                        <ul class='thumbnails'>
                        </ul>

                    </div>
                    <div class='col-md-6 jumbotron'>
                        <div class='row''>
                            <div class='col-md-12' id="idnomemodal">$nome</div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12' id='idavaliaçãomodal'>Avaliação</div>
                        </div>
                        <div class='row'>
                            <div class='col-md-12' id='idinfomodal'>Informações</div>
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
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Museus</h2>
                            </br>   
                        </div>
                    </div>
        <?php
            require_once("../conexao.php");
            $sql = "select p.idponto, p.nome, m.fotos as fotos, p.latitude, p.longitude
                    from ponto p left join midia m on p.idponto = m.idponto
                    where idTipoPonto = 3
                    and m.principal
                    group by p.idponto, p.nome;";
            $resultado = mysqli_query($conexao, $sql);
            $contador = 0;
            $contadorimg = 0;
            $linhas = mysqli_fetch_all($resultado, MYSQL_ASSOC);

            echo '<script>var museus = JSON.parse(\''.json_encode($linhas).'\');</script>';

            foreach ($linhas as $linha) {
                $contador = $contador + 1;
                $contadorimg = $contadorimg + 1;
                $id = $linha["idponto"];
                $nome = $linha["nome"];
                $fotos = $linha["fotos"];

                 if ($contador == 1) {
                    echo "<div class='row'>
                            <div class='col-md-1'></div>
                            <div class='col-md-10'>";
                }
                echo "<div class='col-md-4'>
                            <div class='col-md-1'>
                            </div>
                            <div class='col-md-10'>
                                <div class='row'><a onclick='mostrarModal(" . $id . ")'><img src='$fotos' class='img-responsive'></a></div>
                                <div class='row'>" . $nome . "</div>
                            </div>
                            <div class='col-md-1'>
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
    </body>
</html>
