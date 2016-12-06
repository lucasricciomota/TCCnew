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
          include("headeradmin.php");
        }
        if ($idtipousuario == "2") {
          include("../header.php");
        }
      }
      else {
        include("../header.php");
      }
    ?>
	<?php
		require_once("../conexao.php");
		$sql = "select r.nome, r.endereco, r.telefone, r.latitude,
				r.longitude, r.idRestaurante, r.descricao
				from restaurante r, 
				where r.idRestaurante
				order by r.nome;";
		$resultado = mysqli_query($conexao, $sql);
		echo "<table>
				<tr>
					<td>Identificação</td>
					<td>Endereço</td>
					<td>Tipo</td>
					<td></td>
				</tr>";
		while ($linha = mysqli_fetch_array($resultado)) {
			$identificacao = $linha["nome"];
			$endereco = $linha["endereco"];
			$tipo = $linha["descricao"];
			$id = $linha["idRestaurante"];
			echo "<tr>
					<td>".$identificacao."</td>
					<td>".$endereco."</td>
					<td>".$tipo."</td>
					<td>
						<a href='cadastrorest.php?idRestaurante=".$id."'><span class='glyphicon glyphicon-camera' aria-hidden='true'></span></a>
					</td>
				</tr>";
		}
		echo "</table>";
	?>
	</div>
</body>
</html>