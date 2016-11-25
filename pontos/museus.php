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
        .modal.modal-wide .modal-dialog {width: 98%;}
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

    </style>

    </head>
    <body>
        <?php require_once("../header.php");?>
        <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Museus</h2>
                            </br>   
                        </div>
                    </div>
        <?php
            require_once("../conexao.php");
            $sql = "select p.idponto, p.nome, min(m.fotos) as fotos
                    from ponto p left join midia m on p.idponto = m.idponto
                    where idTipoPonto = 3
                    group by p.idponto, p.nome;";
            $resultado = mysqli_query($conexao, $sql);
            $contador = 0;
            while ($linha = mysqli_fetch_array($resultado)) {
                $contador = $contador + 1;
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
                                <div class='row'><a data-toggle='modal' href='#tallModal'><img src='$fotos' class='img-responsive'></a>
                                    <div id='tallModal' class='modal modal-wide fade'>
                                      <div class='modal-dialog'>
                                        <div class='modal-content'>
                                          <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title'>Modal title</h4>
                                          </div>
                                          <div class='modal-body'>
                                            <div class='row'>
                                                <script>
                                                    function mudar(id_el, url_img){
                                                        $(id_el).attr('src', url_img;
                                                    }
                                                </script>
                                                <div class='col-md-1'></div>
                                                <div class='col-md-5 jumbotron'>Imagem e Galeria
                                                    <div class='main-image'>
                                                        <img src='$fotos' alt='Placeholder' class='custom' id='imgPrincipal$contador'>
                                                    </div>
                                                    <ul class='thumbnails'>
                                                        <li><img src='$fotos' alt='Thumbnails' onclick='mudar(\"#imgPrincipal$contador\", this.src)'></li>
                                                        <li><img src='../img/img-02-tn.jpg' alt='Thumbnails' onclick='mudar(\"#imgPrincipal$contador\", this.src)'></li>
                                                        <li><img src='../img/img-03-tn.jpg' alt='Thumbnails' onclick='mudar(\"#imgPrincipal$contador\", this.src)'></li>
                                                    </ul>

                                                      <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>

                                                </div>
                                                <div class='col-md-5 jumbotron'>
                                                    <div class='row''>
                                                        <div class='col-md-12'>Nome do Ponto</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-12'>Avaliação</div>
                                                    </div>
                                                    <div class='row'>
                                                        <div class='col-md-12'>Informações</div>
                                                    </div>
                                                </div> 
                                                <div class='col-md-1'></div>    
                                            </div>
                                          </div>
                                        </div><!-- /.modal-content -->
                                      </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                </div>
                                <div class='row'>$nome</div>
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

<!--
   //     if ($contador == 1) {
            //         echo "<div class='row'>
            //                 <div class='col-md-1'></div>
            //                 <div class='col-md-10'>";
            //     }
            //     echo "<div class='col-md-4'>
            //                 <div class='col-md-1'>
            //                 </div>
            //                 <div class='col-md-10'>
            //                     <div class='row'><img src='$fotos' class='img-responsive'></div>
            //                     <div class='row'>$nome</div>
            //                 </div>
            //                 <div class='col-md-1'>
            //                 </div>
            //             </div>";
            //     if ($contador == 3) {
            //         echo "  </div>
            //             <div class='col-md-1'></div>
            //             </div>";
            //         $contador = 0;
            //     }
            // }
            // if ($contador == 1) {
            //     echo "<div class='col-md-8'></div>";
            //     echo "  </div>
            //         <div class='col-md-1'></div>
            //         </div>";
            // }
            // if ($contador == 2) {
            //     echo "<div class='col-md-4'></div>";
            //     echo "  </div>
            //         <div class='col-md-1'></div>
            //         </div>";
            // }
-->

       <!--  // if ($contador%3 == 0){ 
                // echo"<div class='row'>";    
                // }

                // echo "<div class='col-sm-4'>
                //         <a href='#portfolioModal1' class='portfolio-link' data-toggle='modal'>
                //             <div class='caption'>
                //                 <div class='caption-content'></div>
                //             </div>
                //             <img src='$fotos' class='img-responsive' alt=''>
                //         </a>
                //         <div class='row portfolio-link portfolio-item'>
                //             $nome
                //         </div>
                //     </div>";

                // if ($contador%3 == 0){ 
                // echo"</div>";    
                // } -->
