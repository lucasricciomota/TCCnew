<?php $current_directory = getcwd(); ?>
<div class="row">
    <div class="col-md-12 header-menu">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <nav role="navigation">
                <div class="dropdown">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/TCCnew/app/src/index.php/#">Home</a>
                            </li>
                            <li>
                                <a href="/TCCnew/app/src/index.php/#">História</a>
                            </li>
                            <li>
                                <a href="/TCCnew/app/src/index.php/#">Lugares</a>
                            </li>
                            <li>
                                <a href="/TCCnew/app/src/index.php/#">Quem somos</a>
                            </li>
                            <li>
                                <a href="/TCCnew/app/src/index.php/#">Faça parte</a>
                            </li>
<!--                            <li class="dropdown">-->
<!--                                <a href="pontos.php" type="button" class="dropdown-toggle" data-toggle="dropdown" role="onmouseover" aria-haspopup="true" aria-expanded="false">-->
<!--                                    Pontos Turísticos-->
<!--                                    <span class="caret"></span>-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li><a href="/TCCnew/app/src/pontos/trilhas.php">Trilhas</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/pontos/ilhas.php">Ilhas</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/pontos/praias.php">Praias</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/pontos/lazer.php">Lazer</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/pontos/radical.php">Radical</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/pontos/museus.php">Museus</a></li>-->
<!---->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="dropdown">-->
<!--                                <a href="pontos.php" type="button" class="dropdown-toggle" data-toggle="dropdown" role="onmouseover" aria-haspopup="true" aria-expanded="false">-->
<!--                                    Hospedagens-->
<!--                                    <span class="caret"></span>-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu">-->
<!--                                    <li><a href="/TCCnew/app/src/hospedagens/pousadas.php">Pousadas</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/hospedagens/hoteis.php">Hotéis</a></li>-->
<!--                                    <li role="separator" class="divider"></li>-->
<!--                                    <li><a href="/TCCnew/app/src/hospedagens/campings.php">Camping</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                        </ul>
                        <div class="content-user text-right">
                            <?php
                            if (isset($_SESSION["nomeusuario"])) {
                                echo "<div class='authenticated'>";
                                echo "<div class='user'><p class='font-montserrat'>";
                                echo "Bem-vindo, " . $_SESSION["nomeusuario"];
                                echo "</p>";
                                echo "</div>";
                                echo "<div class='options user-menu'>";
                                echo "<nav role=\"navigation\">
                                        <div class=\"dropdown\">
                                            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                                <ul class=\"nav navbar-nav\">";
                                echo "<a href='logout.php'>Sair</a>";
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
                                    echo "<li><a id='config' href='#'>Alterar informações</a></li>";
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