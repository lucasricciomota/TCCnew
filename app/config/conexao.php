<?php
	$conexao = mysqli_connect("localhost", "root", "", "turismo");
	if ($conexao == false) {
		$erro = mysqli_connect_error();
		echo "<h1>$erro</h1>";
	}
?>
