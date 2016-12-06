<?php
	require_once("../../config/conexao.php");
	$idusuario = $_GET["idusuario"];
	$tipousuario = $_GET["tipousuario"];
	if ($tipousuario == "1") { 
		$novotipo = "2"; 
	}
	if ($tipousuario == "2") { 
		$novotipo = "1"; 
	}
	$sql = "update Usuario set idtipoUsuario = '$novotipo'
			where idusuario = $idusuario;";
	$resultado = mysqli_query($connection, $sql);
	if ($resultado == true) {
		header("location:usuarios.php");
	}
	else {
		echo "Erro";
	}
?>