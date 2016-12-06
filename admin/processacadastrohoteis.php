<meta charset="utf-8">
<?php
    require_once("../conexao.php");
    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $endereco = $_POST ['endereco'];
    $descricao = $_POST ['descricao'];
    $site = $_POST ['site'];
    $hora = $_POST ['horaatendimento'];
    $latitude = $_POST ['latitude'];
    $longitude = $_POST ['longitude'];
    $tipohospedagem = $_POST ['tipohospedagem']; 

    $sintaxesql = "SELECT * FROM hospedagem WHERE nome = '$nome';";
    echo $sintaxesql;
    $resultado = mysqli_query($conexao,$sintaxesql);
    $quantidadedelinhas = mysqli_num_rows($resultado);
    if ($quantidadedelinhas == 1){
        echo ("Esta hospedagem já está cadastrada");
    }
    else {
        if(isset($_FILES['foto']['name']) && $_FILES["foto"]["error"] == 0) {
            echo "333";
            $sql = "INSERT into hospedagem (nome,email,telefone,endereco,descricao,site,HoraAtendimento,latitude,longitude,idTipoHospedagem)
                    VALUES ('$nome','$email','$telefone','$endereco','$descricao','$site','$hora','$latitude','$longitude','$tipohospedagem');";
            echo $sql;
            $resultado = mysqli_query($conexao, $sql);
            if ($resultado == true) {
                $sql = "SELECT max(idHospedagem) as idHospedagem from hospedagem;";
                $resultado = mysqli_query($conexao, $sql);
                $idHospedagem = mysqli_insert_id($conexao);
                if ($resultado == true) {
                    while ($linha = mysqli_fetch_array($resultado)) {
                        $idponto = $linha["idHospedagem"];
                    }
                }
                $arquivo_tmp = $_FILES['foto']['tmp_name'];
                $nome = $_FILES['foto']['name'];
                
                // Pega a extensao
                $extensao = strrchr($nome, '.');

                // Converte a extensao para mimusculo
                $extensao = strtolower($extensao);

                // Somente imagens, .jpg;.jpeg;.gif;.png
                // Aqui eu enfilero as extesões permitidas e separo por ';'
                // Isso server apenas para eu poder pesquisar dentro desta String
                if(strstr('.jpg;.jpeg;.png', $extensao))
                {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    $novoNome = md5(microtime()) . $extensao;
                    
                    // Concatena a pasta com o nome
                    $destino = '../imagens/' . $novoNome; 
                    
                    // tenta mover o arquivo para o destino
                    if( @move_uploaded_file( $arquivo_tmp, $destino ))
                    {
                        $sql = "INSERT into midia (fotos, idHospedagem, principal) VALUES ('$destino', '$idHospedagem', 1);";
                        echo $sql;
                        $resultado = mysqli_query($conexao, $sql);

                    }
                    else
                        echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
                }
                else
                    echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
            }
            else {
                echo "Você não enviou nenhum arquivo!";
            }
        }
        
        $fotos = reArrayFiles($_FILES['fotosAdicionais']);
        foreach ($fotos as $foto) {
            if(isset($foto['name']) && $_FILES["foto"]["error"] == 0) {


                    $arquivo_tmp = $foto['tmp_name'];
                    $nome = $foto['name'];
                    
                    // Pega a extensao
                    $extensao = strrchr($nome, '.');

                    // Converte a extensao para mimusculo
                    $extensao = strtolower($extensao);

                    // Somente imagens, .jpg;.jpeg;.gif;.png
                    // Aqui eu enfilero as extesões permitidas e separo por ';'
                    // Isso server apenas para eu poder pesquisar dentro desta String
                    if(strstr('.jpg;.jpeg;.png', $extensao))
                    {
                        // Cria um nome único para esta imagem
                        // Evita que duplique as imagens no servidor.
                        $novoNome = md5(microtime()) . $extensao;
                        
                        // Concatena a pasta com o nome
                        $destino = '../imagens/' . $novoNome; 
                        
                        // tenta mover o arquivo para o destino
                        if( @move_uploaded_file( $arquivo_tmp, $destino ))
                        {
                            $sql = "INSERT into midia (fotos, idHospedagem, principal) VALUES ('$destino', '$idHospedagem', 0);";
                            $resultado = mysqli_query($conexao, $sql);

                            if ($resultado == true) {
                                header("location:cadastrohoteis.php");
                            }
                            else {
                                echo "Não foi possível salvar a imagem!";
                            }
                        }
                        else
                            echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
                    }
                    else
                        echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
                }
                else {
                    echo "Você não enviou nenhum arquivo!";
                }
            }
        }
    
?>


<?php

function reArrayFiles(&$file_post) {

    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}

?>