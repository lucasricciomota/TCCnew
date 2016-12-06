<html>
  <head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/scripts.js"></script>
  </head>
<body>
  <div class="container-fluid">
    <?php 
      session_start();
      if (isset($_SESSION["idtipousuario"])) {
        $idtipousuario = $_SESSION["idtipousuario"];
        if ($idtipousuario == "1") {
          require_once("headeradmin.php");
        }
        if ($idtipousuario == "2") {
          require_once("header.php");
        }
      }
      else {
        require_once("header.php");
      }
    ?>
	<?php
		require_once("../conexao.php");
		$sql = "select * from usuario order by nome;";
		$resultado = mysqli_query($connection, $sql);
		echo "<table>
				<tr>
					<td>Nome</td>
					<td>E-mail</td>
					<td></td>
				</tr>";
		while ($linha = mysqli_fetch_array($resultado)) {
			$nome = $linha["nome"];
			$email = $linha["email"];
			$idusuario = $linha["idusuario"];
			$idtipousuario = $linha["idtipoUsuario"];
			$bloqueado = $linha["bloqueado"];
			$textobloqueio = "";
			$tipousuario = "";
			if ($bloqueado == "S") { $textobloqueio = "Desbloquear"; }
			else { $textobloqueio = "Bloquear"; }
			if ($idtipousuario == "1") { $tipousuario = "Tornar Usuário"; }
			else { $tipousuario = "Tornar Administrador"; }
			echo "<tr>
					<td>".$nome."</td>
					<td>".$email."</td>
					<td>
						<a href='processabloqueio.php?idusuario=".$idusuario."&bloqueado=".$bloqueado."'>".$textobloqueio."</a>
						<a href='processaadmin.php?idusuario=".$idusuario."&tipousuario=".$idtipousuario."'>".$tipousuario."</a>
					</td>
				</tr>";
		}
		echo "</table>";
	?>
	</div>
</body>
</html>
