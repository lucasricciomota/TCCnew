
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul
    </title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
    <script src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/scripts.js"></script>
    <style type="text/css">
        .jumbotron {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
    </style>
</head>
<body>  
    <?php
    session_start();
    if (!isset($_SESSION['idtipousuario']) || $_SESSION['idtipousuario'] != 1) {
        header("location:../index.php");
        exit;
    }

    include("../header.php");
    ?>
<div class="page-content">
    <div class="row">
        <div class="row jumbotron">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="textotitulo1" style="font-size:40px;">Cadastre uma Hospedagem</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
       
    <form action="processacadastrohoteis.php" method="post">    
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h4>Nome:</h4> 
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"></span>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>                        
            <div class="col-md-3">
                <h4>E-mail:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"></span>
                    <input type="text" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h4>Telefone:</h4>
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2"></span>
                     <input type="text" class="form-control" placeholder="Telefone" name="telefone" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h4>Endereço:</h4>
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2"></span>
                    <input type="text" class="form-control" placeholder="Endereço" name="endereco" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>       
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h4>Descrição:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4"></span>
                    <input type="text" class="form-control" name="descricao" placeholder="Descrição" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h4>Site:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4"></span>
                    <input type="text" class="form-control" name="site" placeholder="Site" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h4>Horário de Atendimento:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4"></span>
                    <input type="text" class="form-control" name="horaatendimento" placeholder="Horário de Atendimento" required></br>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>       
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h4>Latitude / Longitude</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"></span>
                    <input type="text" class="form-control" placeholder="Latitude" name="latitude" aria-describedby="basic-addon2" required>
                    <input type="text" class="form-control" placeholder="Longitude" name="longitude" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h4>Tipo de Hospedagem</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"></span>
                    <select id="tipohospedagem" name="tipohospedagem" class="form-control" aria-describedby="basic-addon2" required>
                        <?php
                            require_once("../conexao.php");
                            $sql = "select * from tipohospedagem order by descricao;";
                            $resultado = mysqli_query($connection, $sql);
                            while ($linha = mysqli_fetch_array($resultado)) {
                                $id = $linha["idTipoHospedagem"];
                                $descricao = $linha["descricao"];
                                echo "<option value='$id'>$descricao</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-1">      
			<input type="submit" value="Enviar" class="form-control" name="Enviar">
            </div>
            <div class="col-md-7"></div>   
        </div> 
    </form>
</div>
</body>
</html>