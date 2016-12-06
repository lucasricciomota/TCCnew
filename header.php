<style type="text/css">
    .row {
    margin-right: 0px;
    margin-left: 0px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default" role="navigation">
            <div class="dropdown">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/TCCnew/index.php">Home</a>
                        </li>
                        <li>
                            <a href="/TCCnew/cadastro/cadastro.php">Cadastre-se</a>
                        </li>
                        <li class="dropdown">
                            <a href="pontos.php" type="button" class="dropdown-toggle" data-toggle="dropdown" role="onmouseover" aria-haspopup="true" aria-expanded="false">
                                    Pontos Turísticos
                                <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/TCCnew/pontos/trilhas.php">Trilhas</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/pontos/ilhas.php">Ilhas</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/pontos/praias.php">Praias</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/pontos/lazer.php">Lazer</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/pontos/radical.php">Radical</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/pontos/museus.php">Museus</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="/TCCnew/historia/historia.php">História</a>
                            </li>
                            <li class="dropdown">
                            <a href="pontos.php" type="button" class="dropdown-toggle" data-toggle="dropdown" role="onmouseover" aria-haspopup="true" aria-expanded="false">
                                    Hotéis
                                <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/TCCnew/Hospedagens/pousadas.php">Pousadas</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/Hospedagens/hoteis.php">Hotéis</a></li>
                                        <li role="separator" class="divider"></li>
                                    <li><a href="/TCCnew/Hospedagens/camping.php">Camping</a></li>
                                        <li role="separator" class="divider"></li>
                                </ul>
                            </li>                          
                            <li>
                                <a href="/TCCnew/quem somos/quem somos.php">Quem somos?</a>
                            </li>
                            <li>
                                <a type="button" data-toggle="modal" data-target="#myModal">Alterar Informações</a>

                                  <!-- Modal -->
                                  <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                    <form action="processaalterarinfo.php" method="post"> 
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Alterar Informações</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <h4>Novo Nome:</h4> 
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1">
                                                            <span class="glyphicon glyphicon-user"></span>  
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Nome" name="nome" aria-describedby="basic-addon1" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1"></div>                        
                                                <div class="col-md-10">
                                                    <h4>Novo E-mail:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon2">
                                                            <span class="glyphicon glyphicon-envelope"></span>                     
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="E-mail" name="email" aria-describedby="basic-addon2" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>                 
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">
                                                    <h4>Novo Telefone:</h4>
                                                    <div class="input-group">
                                                         <span class="input-group-addon" id="basic-addon2">
                                                            <span class="glyphicon glyphicon-phone"></span>                     
                                                         </span>
                                                         <input type="text" class="form-control" placeholder="Telefone" name="telefone" aria-describedby="basic-addon2" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>       
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">                  
                                                    <h4>Nova Senha:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon4">
                                                            <span class="glyphicon glyphicon-lock"></span> 
                                                        </span>
                                                        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">                  
                                                    <h4>Digite a sua senha novamente:</h4>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon4">
                                                            <span class="glyphicon glyphicon-lock"></span> 
                                                        </span>
                                                        <input type="password" class="form-control" name="senha2" placeholder="Senha" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                            </div>    
                                            <div class="row">
                                                <div class="col-md-12"></div>
                                            </div>    
                                        </div>
                                        <div class="modal-footer">
                                          <a type="submit" value="Enviar" class="btn btn-default" name="Enviar">Enviar</a>
                                        </div>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                            </li>
                            <li>
                                <?php
                                    if (isset($_SESSION["idusuario"])) {
                                        echo "Olá, ".$_SESSION["nomeusuario"];
                                        echo "<a href='logout.php'>Sair</a>";
                                    }
                                    else {
                                        echo "<form class='navbar-form navbar-right' role='search' action='processalogin.php' method='POST'>
                                                    <div class='form-group'>
                                                        <label class='sr-only' for='email'>Email address</label>
                                                        <input type='email' name ='email' class='form-control' id='exampleInputEmail3' placeholder='E-mail'>
                                                        <label class='sr-only' for='senha'>Password</label>
                                                        <input type='password'  name='senha' class='form-control' id='exampmleInputPassword3' placeholder='Senha'>
                                                        <button type='submit' class='btn btn-default'>Entrar</button>
                                                    </div>
                                             </form>";
                                    }
                                ?>
                            </li>    
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>