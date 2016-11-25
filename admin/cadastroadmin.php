
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
        <div class="row cad jumbotron">
            <div class="col-md-11">
                <h1>Cadastro de Administrador</h1>
            <div class="col-md-6">
            </div>
            </div>
        </div>
        
        
    <form action="processacadastroadmin.php" method="post">    
        
      
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">
                <h3>Nome:</h3> 
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
                <h3>E-mail:</h3>
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
                <h3>Telefone:</h3>
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
                <h3>Senha:</h3>
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
                <h3>Digite a sua senha novamente :</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon4">
                        <span class="glyphicon glyphicon-lock"></span> 
                        </span>
                        <input type="password" class="form-control" name="senha2" placeholder="Senha" required></br>
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