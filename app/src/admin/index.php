
<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
	<title>São Francisco do Sul</title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/fonts/">
</head>
    <body>         
        <?php include("../header.php");?>
        
        <div class="row cad jumbotron">
            <div class="col-md-11">
                <h1>Login</h1>
                <h3>administração do gerenciamento para o site</h3>
            </div>
        </div>            
        <form action="../processalogin.php" method="post">
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
                <div class="col-md-1">
    			 <input type="submit" value="Enviar" class="form-control" name="Enviar">
                </div>
                <div class="col-md-7"></div>
            </div>
        </form>
        <script src="../../../public/js/jquery.min.js"></script>
        <script src="../../../public/js/bootstrap.min.js"></script>
        <script src="../../../public/js/scripts.js"></script>
    </body>
</html>
