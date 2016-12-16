<?php $current_directory = getcwd(); ?>
<div class="navbar-wrapper">
<div class="container">
    <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse">

                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/TCCnew/app/src/indexteste.php">Home</a></li>
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

                        <ul class="content-user text-right">
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
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</div>
</div>


<!-- <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#myCarousel">Home</a></li>
                    <li><a href="#quemsomos">Quem Somos?</a></li>
                    <li><a href="#historia">História</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                </ul>


            </div>
          </div>
        </nav>

      </div>
    </div> -->