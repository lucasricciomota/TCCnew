<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>Hotéis</title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
</head>
<body>
	<?php require_once("../header.php");?>
        <div class="container-fluid">
            <div class="row pontos jumbotron">
                <div class="col-md-1"></div>
                    <h1>Hotéis</h1>        
                <div class="col-md-7"></div>    
                <div class="col-md-4"></div>
            </div>
            <?php 
            require_once("../conexao.php");
            $sql = "select h.idHospedagem, h.nome, min(m.fotos) as fotos
                        from hospedagem h left join midia m on h.idHospedagem = h.idHospedagem
                        where idHospedagem = 1
                        group by h.idHospedagem, h.nome;";
            $resultado = mysqli_query($connection, $sql);
            $contador = 0;
            while ($linha = mysqli_fetch_array($resultado)) {
                $contador = $contador + 1;
                $id = $linha["idHospedagem"];
                $nome = $linha["nome"];
                $fotos = $linha["fotos"];
            if ($contador == 1) {
                echo    "<div class='row'>
                            <div class='col-md-1'></div>
                            <div class='col-md-10'>";
                    }
                echo    "<div class='col-md-4'>
                            <div class='col-md-1'></div>
                            <div class='col-md-10'>
                                <div class='row'><img src='$fotos' class='img-responsive'></div>
                                <div class='row'>$nome</div>
                            </div>
                            <div class='col-md-1'></div>
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
        <script src="../public/js/jquery.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/scripts.js"></script>
    </body>
</html>