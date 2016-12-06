<?php $current_directory = getcwd(); ?>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <nav class="navbar navbar-default" role="navigation">
            <div class="dropdown">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/TCCnew/app/src/index.php">Home</a>
                        </li>
                        <li>
                            <a href="/TCCnew/app/src/cadastro/cadastro.php">Cadastre-se</a>
                        </li>
                        <li class="dropdown">
                            <a href="pontos.php" type="button" class="dropdown-toggle" data-toggle="dropdown" role="onmouseover" aria-haspopup="true" aria-expanded="false">
                                Pontos Turísticos
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/TCCnew/app/src/pontos/trilhas.php">Trilhas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/TCCnew/app/src/pontos/ilhas.php">Ilhas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/TCCnew/app/src/pontos/praias.php">Praias</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/TCCnew/app/src/pontos/lazer.php">Lazer</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/TCCnew/app/src/pontos/radical.php">Radical</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/TCCnew/app/src/pontos/museus.php">Museus</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="/TCCnew/app/src/historia/historia.php">História</a>
                        </li>
                        <li class="dropdown">
                            <a href="pontos.php" type="button" class="dropdown-toggle" data-toggle="dropdown" role="onmouseover" aria-haspopup="true" aria-expanded="false">
                                Hospedagens
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/TCCnew/app/src/hospedagens/pousadas.php">Pousadas</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/TCCnew/app/src/hospedagens/hoteis.php">Hotéis</a></li>
                                <li role="separator" class="dhvider"></li>
                                <li><a href="/TCCnew/app/src/hospedagens/campings.php">Camping</a></li>
                                <li role="separator" class="divider"></li>
                            </ul>
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
    <div class="col-md-1"></div>
</div>