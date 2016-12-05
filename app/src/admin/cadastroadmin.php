
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/scripts.js"></script>
</head>
<body>  

    <?php require_once("headeradmin.php");?>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Cadastro de Administrador</h3>
        <div class="col-md-4"></div>
        </div>
    </div>
          
    <form action="processacadastroadmin.php" method="post">    
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h4>Nome:</h4> 
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <span class="glyphicon glyphicon-user"></span>  
                    </span>
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
                    <span class="input-group-addon" id="basic-addon2">
                        <span class="glyphicon glyphicon-envelope"></span>                     
                    </span>
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
                     <span class="input-group-addon" id="basic-addon2">
                        <span class="glyphicon glyphicon-phone"></span>                     
                     </span>
                     <input type="text" class="form-control" placeholder="Telefone" name="telefone" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h4>Senha:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4">
                        <span class="glyphicon glyphicon-lock"></span> 
                    </span>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                </div>
            </div>
            <div class="col-md-5"></div>
        </div> 
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h4>Digite a sua senha novamente:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon4">
                        <span class="glyphicon glyphicon-lock"></span> 
                    </span>
                    <input type="password" class="form-control" name="senha2" placeholder="Senha" required>
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
</body>
</html>