<?php

?>
<!DOCTYPE html >
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
	<div class="container-fluid">
            
         <?php require_once("../header.php");?>
     	
            <div class="row pontos jumbotron">
        <div class="col-md-1"></div>
        <h1>Pontos Turísticos</h1>        
        <div class="col-md-7">
        </div>    
        <div class="col-md-4"></div>
	</div>

            <div class="row" >
                </br> 
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <?php
                            session_start();
                            if (isset($_SESSION["idusuario"])) {
                                $tipousuario = $_SESSION["idtipousuario"];
                                if ($tipousuario == "1") {
                                    echo "<a href='cadastroponto.php'>Cadastrar Ponto Turístico</a>";
                                }
                            }
                        ?>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="museu2.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron 2"><h4>teste</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Museu Nacional do Mar</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 
                            
                        <div class="row">
                            <div class="col-md-3">
                                <img src="prainha22.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>teste</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Prainha</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 

                        <div class="row">
                            <div class="col-md-3">
                                <img src="dunas2.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>teste</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Dunas Acaraí</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 
                        
                        <div class="row">
                            <div class="col-md-3">
                                <img src="vila2.jpg" class="img-responsive img-rounded ">
                            </div>
                            <div class="col-md-9 jumbotron"><h4>teste</h4></div>
                        </div>
                                <div class="row">
                                    <div class="col-md-6"><h4>Vila da Glória</h4></div>
                                    <div class="col-md-6"></div>
                                </div>
                        </br> 
                        
                    </div>
                    <div class="col-md-1"></div>
            </div>
        </div>
	</body>
</html>
