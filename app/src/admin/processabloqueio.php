<?php
	require_once("../../config/conexao.php");
	$idusuario = $_GET["idusuario"];
	$bloqueado = $_GET["bloqueado"];
	if ($bloqueado == "S") { 
		$novostatus = "N"; 
	}
	if ($bloqueado == "N") { 
		$novostatus = "S"; 
	}
	$sql = "update Usuario set bloqueado = '$novostatus'
			where idusuario = $idusuario;";
	$resultado = mysqli_query($connection, $sql);
	if ($resultado == true) {
		header("location:usuarios.php");
	}
	else {
		echo "Erro";
	}
?>