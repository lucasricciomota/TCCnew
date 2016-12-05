
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
    <?php require_once("../header.php");?>

    <div class="row cad bold">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Cadastro de Usuários</h3>
        </div>
        <div class="col-md-4"></div>
    </div>
         
    <form action="processacadastro.php" method="post">    
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Nome:</h4> 
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <span class="glyphicon glyphicon-user"></span>  
                    </span>
                    <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>                        
            <div class="col-md-4">
                <h4>E-mail:</h4>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">
                        <span class="glyphicon glyphicon-envelope"></span>                     
                    </span>
                    <input type="text" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Telefone:</h4>
                <div class="input-group">
                     <span class="input-group-addon" id="basic-addon2">
                        <span class="glyphicon glyphicon-phone"></span>                     
                     </span>
                     <input type="text" class="form-control" placeholder="Telefone" name="telefone" aria-describedby="basic-addon2" required>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Estado:</h4>
                <select name="cod_estados" id="cod_estados">
                    <option value=""></option>
                    <?php
                        require_once("../conexao.php");
                        $sintaxesql = "SELECT id, nome FROM tb_estados ORDER BY uf;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            $id = $linha["id"];
                            $nome = $linha["nome"];
                            echo "<option value=$id>".utf8_decode($nome)."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-4"></div>
        </div>     
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4>Cidade:</h4>
                <select name="cod_cidades" id="cod_cidades">
                    <option value="">-- Escolha um estado --</option>
                </select>
            </div>
            <div class="col-md-4"></div>
        </div>

        <script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">
          google.load('jquery', '1.3');
        </script>       

        <script type="text/javascript">
        $(function(){
            $('#cod_estados').change(function(){
                if( $(this).val() ) {
                    $('#cod_cidades').hide();
                    $('.carregando').show();
                    $.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
                        var options = '<option value=""></option>'; 
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].cod_cidades + '">' + j[i].nome + '</option>';
                        }   
                        $('#cod_cidades').html(options).show();
                        $('.carregando').hide();
                    });
                } else {
                    $('#cod_cidades').html('<option value="">– Escolha um estado –</option>');
                }
            });
        });
        </script>

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
