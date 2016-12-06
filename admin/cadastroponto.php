
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
        <?php require_once("headeradmin.php");?>
    </div>
    <div class="row cad">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Cadastro de Pontos Turísticos</h3>
        </div>
        <div class="col-md-4"></div>
    </div>
         
    <form action="processacadastroponto.php" method="post" enctype="multipart/form-data">    
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Nome:</h4> 
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"></span>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>                        
            <div class="col-md-4">
                <h4>Descrição:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"></span>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Endereço:</h4>
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2"></span>
                     <input type="text" class="form-control" placeholder="Endereço" name="endereco" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Latitude / Longitude</h4>
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2"></span>
                    <input type="text" class="form-control" placeholder="Latitude" name="latitude" aria-describedby="basic-addon2" required>
                    <input type="text" class="form-control" placeholder="Longitude" name="longitude" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>  
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Tipo do Ponto</h4>
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2"></span>
                     <select id="tipoponto" name="tipoponto" class="form-control" aria-describedby="basic-addon2" required>
                        <?php
                            require_once("../conexao.php");
                            $sql = "select * from tipoponto order by descricao;";
                            $resultado = mysqli_query($conexao, $sql);
                            while ($linha = mysqli_fetch_array($resultado)) {
                                $id = $linha["idTipoPonto"];
                                $descricao = $linha["descricao"];
                                echo "<option value='$id'>$descricao</option>";
                            }
                        ?>
                     </select>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Foto do ponto</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2"></span>
                    <input type="file" name="foto" aria-describedby="basic-addon2" required>
                    <input type="file" name="fotosAdicionais[]" aria-describedby="basic-addon2" required multiple>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div></br>
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-1">      
			<input type="submit" value="Enviar" class="form-control" name="Enviar">
            </div>
            <div class="col-md-4"></div>   
        </div>     
    </form>
</body>
</html>
