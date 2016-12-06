 <?php
	require_once("conexao.php");
	session_start();
	$idusuario = $_SESSION["idusuario"];
	$nome = $_POST["nome"];
	$cad_email = $_POST["email"];
	$telefone = $_POST["telefone"];
	$senha = $_POST["senha"];
	$senha2 = $_POST["senha2"];
	if (md5($senha) != md5($senha2))
	{
		echo "As senhas não são iguais";
	}
	else if(md5($senha) == md5($senha2)){
		$novaSenha = md5($senha);
	$sql = "UPDATE usuario SET nome = '$nome', email= '$email', telefone = '$telefone' , senha = '$novaSenha', WHERE  idusuario = '$idusuario';";
	$resultado = mysqli_query($connection, $sql);
	if ($resultado == true) {
		$_SESSION["nome"] = $nome;
	}
}
	else {
		echo "Erro";
	}
?>