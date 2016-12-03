<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul
    </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    
  
</head>
<body>
   <?php require_once("../header.php");?>
    
    <div class="row pontos jumbotron">
        <div class="col-md-1"></div>
        <h1>Restaurantes</h1>        
        <div class="col-md-7">
        </div>    
        <div class="col-md-4"></div>
	</div>

            <div class="row" >
                </br> 
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <?php
                            
                            if (isset($_SESSION["idusuario"])) {
                                $tipousuario = $_SESSION["idtipousuario"];
                                if ($tipousuario == "1") {
                                    echo "<a href='CadastroRestaurante.php'>Cadastrar Restaurante</a>";
                                }
                            }
                        ?>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../imagens/Maruju's.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron 2"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Sed aliquam pharetra scelerisque. Proin maximus nisl eget ante tincidunt, non pulvinar justo sagittis. 
                                    Donec hendrerit risus vitae egestas viverra. Etiam augue leo, bibendum in massa in, ornare mollis ante. 
                                    Nulla a dolor ipsum.</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Restaurante Maruju's</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 
                            
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../imagens/Portela.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Sed aliquam pharetra scelerisque. Proin maximus nisl eget ante tincidunt, non pulvinar justo sagittis. 
                                    Donec hendrerit risus vitae egestas viverra. Etiam augue leo, bibendum in massa in, ornare mollis ante. 
                                    Nulla a dolor ipsum.</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Restaurante Portela</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 

                        <div class="row">
                            <div class="col-md-3">
                                <img src="../imagens/Mediterraneo.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Sed aliquam pharetra scelerisque. Proin maximus nisl eget ante tincidunt, non pulvinar justo sagittis. 
                                    Donec hendrerit risus vitae egestas viverra. Etiam augue leo, bibendum in massa in, ornare mollis ante. 
                                    Nulla a dolor ipsum.</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Restaurante Adega Porto Mediterrâneo</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 
                        
                        <div class="row">
                            <div class="col-md-3">
                                <img src="../imagens/Container.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Sed aliquam pharetra scelerisque. Proin maximus nisl eget ante tincidunt, non pulvinar justo sagittis. 
                                    Donec hendrerit risus vitae egestas viverra. Etiam augue leo, bibendum in massa in, ornare mollis ante. 
                                    Nulla a dolor ipsum.</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Restaurante Container</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br>
                         <div class="row">
                            <div class="col-md-3">
                                <img src="../imagens/Deck66.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Sed aliquam pharetra scelerisque. Proin maximus nisl eget ante tincidunt, non pulvinar justo sagittis. 
                                    Donec hendrerit risus vitae egestas viverra. Etiam augue leo, bibendum in massa in, ornare mollis ante. 
                                    Nulla a dolor ipsum.</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Restaurante Deck 66</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 
                    </div>
                    <div class="col-md-1"></div>
            </div>
        </div>
	</body>
</html>
