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