
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
    <script src="../js/mascara.js"></script>
</head>
<body>

    <script type="
            function MascaraTelefone(tel){  
                if(mascaraInteiro(tel)==false){
                    event.returnValue = false;
                }       
                return formataCampo(tel, '(00) 0000-0000', event);
            }">
            
    </script>

    <div class="container-fluid">
        
        <?php require_once("headeradmin.php");?>
    </div>
        <div class="row cad jumbotron">
            <div class="col-md-11">
                <h1>Cadastro de Restaurantes</h1>
            <div class="col-md-6">
            </div>
            </div>
        </div>
        
        
    <form action="processacadastrorest.php" method="post">    
        
      
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
                <h3>E-mail:</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                        <span class=""></span>                     
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
                         <span class=""></span>                     
                         </span>
                         <input type="text" class="form-control" placeholder="Telefone" name="telefone" onKeyPress="MascaraTelefone(tel)" aria-describedby="basic-addon2" required>
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
                <h3>Descrição:</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                        <span class=""></span> 
                        </span>
                        <input type="text" class="form-control" name="descricao" placeholder="Descrição" aria-describedby="basic-addon2" required>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div> 
        
        
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h3>Site :</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                        <span class=""></span> 
                        </span>
                        <input type="text" class="form-control" name="site" placeholder="Site" aria-describedby="basic-addon2" required></br>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h3>Horário de Atendimento :</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                        <span class=""></span> 
                        </span>
                        <input type="text" class="form-control" name="horaatendimento" placeholder="Horário de Atendimento" aria-describedby="basic-addon2" required></br>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div>

         <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-3">                  
                <h3>Telentrega:</h3>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                        <span class=""></span> 
                        </span>
                        <input type="text" class="form-control" name="telentrega" placeholder="Telentrega" aria-describedby="basic-addon2" required></br>
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
            <div class="col-md-1">      
			<input type="submit" value="Enviar" class="form-control" name="Enviar">
            </div>
            <div class="col-md-7"></div>   
        </div>
        
</form>
</body>
</html>