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
        if (!isset($_SESSION['idtipousuario']) || $_SESSION['idtipousuario'] != 1) {
            header("location:../index.php");
            exit;
        }

        include("../header.php");
    ?>
	<?php
		require_once("../../config/conexao.php");
		$sql = "select h.nome, h.endereco, h.latitude,
				h.longitude, h.idHospedagem, t.descricao
				from hospedagem h, tipohospedagem t
				where h.idTipoHospedagem = t.idTipoHospedagem
				order by h.nome;";
		$resultado = mysqli_query($connection, $sql);
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
			$id = $linha["idHospedagem"];
			echo "<tr>
					<td>".$identificacao."</td>
					<td>".$endereco."</td>
					<td>".$tipo."</td>
					<td>
						<a href='cadastrohoteis.php?idHospedagem=".$id."'><span class='glyphicon glyphicon-camera' aria-hidden='true'></span></a>
					</td>
				</tr>";
		}
		echo "</table>";
	?>
	</div>
</body>
</html>
