
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul
    </title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/scripts.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php require_once("headeradmin.php");?>
    </div>
    <div class="row cad jumbotron">
        <div class="col-md-11">
            <h1>Cadastro de Pontos</h1>
            <div class="col-md-6"></div>
        </div>
    </div>
         
    <form action="processacadastroponto.php" method="post" enctype="multipart/form-data">    
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h3>Nome:</h3> 
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <span class=""></span>  
                    </span>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4"></div>                        
            <div class="col-md-3">
                <h3>Descrição:</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                        <span class=""></span>                     
                        </span>
                        <input type="text" class="form-control" placeholder="Descrição" name="descricao" aria-describedby="basic-addon2" required>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h3>Endereço:</h3>
                    <div class="input-group">
                         <span class="input-group-addon" id="basic-addon2">
                         <span class=""></span>                     
                         </span>
                         <input type="text" class="form-control" placeholder="Endereço" name="endereco" aria-describedby="basic-addon2" required>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div>
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h3>Latitude / Longitude</h3>
                    <div class="input-group">
                         <span class="input-group-addon" id="basic-addon2">
                         <span class=""></span>                     
                         </span>
                        <input type="text" class="form-control" placeholder="Latitude" name="latitude" aria-describedby="basic-addon2" required>
                        <input type="text" class="form-control" placeholder="Longitude" name="longitude" aria-describedby="basic-addon2" required>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div>
            
        <div class="row">
            <div class="col-md-12"></div>
        </div>  
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h3>Tipo do Ponto</h3>
                    <div class="input-group">
                         <span class="input-group-addon" id="basic-addon2">
                         <span class=""></span>                     
                         </span>
                         <select id="tipoponto" name="tipoponto" class="form-control" aria-describedby="basic-addon2" required>
                            <?php
                                require_once("../conexao.php");
                                $sql = "select * from tipoponto order by descricao;";
                                $resultado = mysqli_query($connection, $sql);
                                while ($linha = mysqli_fetch_array($resultado)) {
                                    $id = $linha["idTipoPonto"];
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
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h3>Foto do ponto</h3>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
                    <input type="file" name="foto" aria-describedby="basic-addon2" required>
                    <input type="file" name="fotosAdicionais[]" aria-describedby="basic-addon2" required multiple>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-1">      
			<input type="submit" value="Enviar" class="form-control" name="Enviar">
            </div>
            <div class="col-md-7"></div>   
        </div>
              
    </form>
</body>
</html>
