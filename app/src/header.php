
<style type="text/css">

</style>
<?php $current_directory = getcwd(); ?>
<div class="row navbar-fixed-top">
    <div class="col-md-12 header-menu">
        <div class="col-md-11">
            <nav role="navigation ">
                <div class="dropdown">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="/TCCnew/app/src/indexteste.php">Home</a></li>
                            <li><a href="/TCCnew/app/src/indexteste.php#historia">História</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pontos Turísticos <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="/TCCnew/app/src/pontos/praias.php">Praias</a></li>
                                <li><a href="/TCCnew/app/src/pontos/museus.php">Museus</a></li>
                                <li><a href="/TCCnew/app/src/pontos/trilhas.php">Trilhas</a></li>
                                <li><a href="/TCCnew/app/src/pontos/radical.php">Radical</a></li>
                                <li><a href="/TCCnew/app/src/pontos/lazer.php">Lazer</a></li>
                                <li><a href="/TCCnew/app/src/pontos/ilhas.php">Ilhas</a></li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hospedagens <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="/TCCnew/app/src/Hospedagens/pousadas.php">Pousadas</a></li>
                                <li><a href="/TCCnew/app/src/Hospedagens/hoteis.php">Hotéis</a></li>
                                <li><a href="/TCCnew/app/src/Hospedagens/campings.php">Campings</a></li>
                              </ul>
                            </li>
                            <li><a href="/TCCnew/app/src/indexteste.php#quemsomos">Quem Somos?</a></li>
                            <li><a href="/TCCnew/app/src/cadastro/index.php">Cadastre-se</a></li>
                        </ul>

                        <div class="content-user text-right">
                            <?php
                            if (isset($_SESSION["nomeusuario"])) {
                                echo "<div class='authenticated'>";
                                echo "<div class='user'><p class='font-montserrat' style='color: #fdf9f9;''>";
                                echo "Bem-vindx, " . $_SESSION["nomeusuario"]; 
                                echo "</p>";
                                echo "</div>";
                                echo "<div class='options user-menu'>";
                                echo "<nav role=\"navigation\">
                                        <div class=\"dropdown\">
                                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                                <ul class=\"nav navbar-nav\">";
                                echo "<a href='/TCCnew/app/src/logout.php'>Sair</a>";
                                echo "<li class='dropown'>";
                                echo "<a href='#' class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"onmouseover\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class='glyphicon glyphicon-cog'></span></a>";
                                echo "<ul class='dropdown-menu'>";
                                if (isset($_SESSION['idtipousuario']) && $_SESSION['idtipousuario'] == '1') {
                                    echo '<li><a href="/TCCnew/app/src/admin/cadastroadmin.php">Cadastro de Administrador</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/TCCnew/app/src/admin/pontos.php">Gerenciar Pontos</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/TCCnew/app/src/admin/cadastroponto.php">Cadastrar Pontos</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/TCCnew/app/src/admin/hospedagens.php">Gerenciar Hospedagens</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/TCCnew/app/src/admin/cadastrohoteis.php">Cadastrar Hospedagens</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/TCCnew/app/src/admin/usuarios.php">Gerenciar Usuários</a></li>';
                                } else{
                                    echo "<li>
                                            <a id='config' data-tohgle='modal' data-target='#myModal'>Alterar informações</a>
                                          </li>
                                    <div class='modal fade' id='myModal' role='dialog'>
                                    <div class='modal-dialog'>
                                    
                                    <form action='processaalterarinfo.php' method='post'> 
                                      <div class='modal-content'>
                                        <div class='modal-header'>
                                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                          <h4 class='modal-title'>Alterar Informações</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <div class='row'>
                                                <div class='col-md-1'></div>
                                                <div class='col-md-10'>
                                                    <h4>Novo Nome:</h4> 
                                                    <div class='input-group'>
                                                        <span class='input-group-addon' id='basic-addon1'>
                                                            <span class='glyphicon glyphicon-user'></span>  
                                                        </span>
                                                        <input type='text' class='form-control' placeholder='Nome' name='nome' aria-describedby='basic-addon1' required>
                                                    </div>
                                                </div>
                                                <div class='col-md-1'></div>
                                            </div>
                                            <div class='row'>
                                                <div class='col-md-1'></div>                        
                                                <div class='col-md-10'>
                                                    <h4>Novo E-mail:</h4>
                                                    <div class='input-group'>
                                                        <span class='input-group-addon' id='basic-addon2'>
                                                            <span class='glyphicon glyphicon-envelope'></span>                     
                                                        </span>
                                                        <input type='text' class='form-control' placeholder='E-mail' name='email' aria-describedby='basic-addon2' required>
                                                    </div>
                                                </div>
                                                <div class='col-md-1'></div>
                                            </div>                 
                                            <div class='row'>
                                                <div class='col-md-1'></div>
                                                <div class='col-md-10'>
                                                    <h4>Novo Telefone:</h4>
                                                    <div class='input-group'>
                                                         <span class='input-group-addon' id='basic-addon2'>
                                                            <span class='glyphicon glyphicon-phone'></span>                     
                                                         </span>
                                                         <input type='text' class='form-control' placeholder='Telefone' name='telefone' aria-describedby='basic-addon2' required>
                                                    </div>
                                                </div>
                                                <div class='col-md-1'></div>
                                            </div>       
                                            <div class='row'>
                                                <div class='col-md-1'></div>
                                                <div class='col-md-10'>                  
                                                    <h4>Nova Senha:</h4>
                                                    <div class='input-group'>
                                                        <span class='input-group-addon' id='basic-addon4'>
                                                            <span class='glyphicon glyphicon-lock'></span> 
                                                        </span>
                                                        <input type='password' class='form-control' name='senha' placeholder='Senha' required>
                                                    </div>
                                                </div>
                                                <div class='col-md-1'></div>
                                            </div> 
                                            <div class='row'>
                                                <div class='col-md-1'></div>
                                                <div class='col-md-10'>                  
                                                    <h4>Digite a sua senha novamente:</h4>
                                                    <div class='input-group'>
                                                        <span class='input-group-addon' id='basic-addon4'>
                                                            <span class='glyphicon glyphicon-lock'></span> 
                                                        </span>
                                                        <input type='password' class='form-control' name='senha2' placeholder='Senha' required>
                                                    </div>
                                                </div>
                                                <div class='col-md-1'></div>
                                            </div>    
                                            <div class='row'>
                                                <div class='col-md-12'></div>
                                            </div>    
                                        </div>
                                        <div class='modal-footer'>
                                          <a type='submit' value='Enviar' class='btn btn-default' name='Enviar'>Enviar</a>
                                        </div>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                  ";
                                }
                                echo "</ul>";
                                echo "</li>";
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class=\"form-login\"><form class='navbar-form navbar-right' role='search' action='/TCCnew/app/src/processalogin.php' method='POST'>
                                      <div class='form-group'>
                                        <label class='sr-only' for='email'>Email address</label>
                                        <input type='email' name ='email' class='form-control' id='exampleInputEmail3' placeholder='E-mail'>
                                        <label class='sr-only' for='senha'>Password</label>
                                        <input type='password'  name='senha' class='form-control' id='exampmleInputPassword3' placeholder='Senha'>
                                        <button type='submit' class='btn btn-default'>Entrar</button>
                                      </div>
                                    </form>
                                  </div>";


                            }
                            ?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>




                                  <!-- <a href='#' data-toggle='modal' data-target='#login-modal'>Login</a>
                                    <div class='modal fade' id='login-modal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
                                      <div class='modal-dialog'>
                                        <div class='loginmodal-container'>
                                          <h1>Login to Your Account</h1><br>
                                          <form>
                                            <input type='text' name='user' placeholder='Username'>
                                            <input type='password' name='pass' placeholder='Password'>
                                            <input type='submit' name='login' class='login loginmodal-submit' value='Login'>
                                          </form>
                                          <div class='login-help'>
                                            <a href='#'>Register</a> - <a href='#'>Forgot Password</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div> -->