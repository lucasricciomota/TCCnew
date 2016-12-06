<html>
  <head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
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
		$resultado = mysqli_query($conexao, $sql);
		echo "
			<div class='row'>
			 	<div class='col-md-12'></div>
			</div></br>
			<div class='row'>
			 	<div class='col-md-1'></div>
			 	<div class='col-md-2'>Nome</div>
			 	<div class='col-md-3'>E-mail</div>
			 	<div class='col-md-6'></div>
			 </div></br>";
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
			echo "<div class='row'>
					<div class='col-md-1'></div>
				 	<div class='col-md-2'>".$nome."</div>
				 	<div class='col-md-3'>".$email."</div>
				 	<div class='col-md-2'>
				 		<a href='processabloqueio.php?idusuario=".$idusuario."&bloqueado=".$bloqueado."'>".$textobloqueio."</a>
				 	</div>
				 	<div class='col-md-3'>
				 		<a href='processaadmin.php?idusuario=".$idusuario."&tipousuario=".$idtipousuario."'>".$tipousuario."</a>
				 	</div>
				 	<div class='col-md-1'></div>
				</div>
					";
		}
		echo "</table>
			  	<div class='col-md-1'></div>
			  </div>";
	?>
	</div>
</body>
</html>
