<?php

session_start();

$nota = $_GET["nota"];
if(isset($_SESSION["idusuario"]))
{
	$idusuario = $_SESSION['idusuario'];
	$idponto = $_GET["idponto"];

echo("idusuario $idusuario<br>");

require_once("../../config/conexao.php");

$sql = "INSERT INTO avaliacao (nota, idponto, idusuario) VALUES ('$nota', '$idponto', '$idusuario');";

$resultado = mysqli_query($connection, $sql);



if($resultado == true)
{

	$sql = "UPDATE `ponto` SET avaliacao = FLOOR((avaliacao + $nota)/2) where idponto = $idponto;";
	$resultado = mysqli_query($connection, $sql);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
}
else{
	echo("Você precisa estar logado para mandar uma avaliação");
}



?>

