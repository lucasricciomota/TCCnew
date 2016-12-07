<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default" role="navigation">   
            <div class="dropdown">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/TCCnew/index.php">Home</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        
                            if (isset($_SESSION["idusuario"])) {
                                    echo "Olá, ".$_SESSION["nomeusuario"];
                                    echo "<a href='logout.php'>Sair</a>";
                                }
                            else {
                                echo "<form class='navbar-form navbar-right' role='search' action='../processalogin.php' method='POST'>
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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>