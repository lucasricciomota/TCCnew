<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Trilhas</title>
        <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
        <link href="/TCCnew/public/css/style.css" rel="stylesheet">
        <link href="/TCCnew/public/css/freelancer.min.css" rel="stylesheet">
    </head>
    <body>
         <?php include("../header.php");?>
        <div class="container-fluid">
            <div class="row pontos jumbotron">
                <div class="col-md-1"></div>
                    <h1>Trilhas</h1>        
                <div class="col-md-7"></div>    
                <div class="col-md-4"></div>
            </div>
            
        <?php
        require_once("../../config/conexao.php");
            $sql = "select p.idponto, p.nome, min(m.fotos) as fotos
                    from ponto p left join midia m on p.idponto = m.idponto
                    where idTipoPonto = 2
                    group by p.idponto, p.nome;";
            $resultado = mysqli_query($connection, $sql);
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
                                <div class='row'><img src='$fotos' class='img-responsive'></div>
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
        <script src="/TCCnew/public/js/jquery.min.js"></script>
        <script src="/TCCnew/public/js/bootstrap.min.js"></script>
        <script src="/TCCnew/public/js/scripts.js"></script>
    </body>
</html>
