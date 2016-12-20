<html>
  <head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
    <script src="/TCCnew/public/js/jquery.min.js"></script>
    <script src="/TCCnew/public/js/bootstrap.min.js"></script>
    <script src="/TCCnew/public/js/scripts.js"></script>
    <style type="text/css">
    	.jumbotron {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
    </style>
  </head>
<body>
  	<div class="page-content">
  		<div class="row">
	        <div class="row jumbotron">
	            <div class="col-md-1"></div>
	            <div class="col-md-10">
	                <h1 class="textotitulo1" style="font-size:40px;">Gerencie os Pontos</h1>
	            </div>
	            <div class="col-md-1"></div>
	        </div>
    	</div>
    <?php
        session_start();
        if (!isset($_SESSION['idtipousuario']) || $_SESSION['idtipousuario'] != 1) {
            header("location:../index.php");
            exit;
        }

        include("../header.php");

		require_once("../../config/conexao.php");
		$sql = "select p.nome, p.endereco, p.latitude,
				p.longitude, p.idponto,	t.descricao
				from ponto p, tipoponto t
				where p.idTipoPonto = t.idTipoPonto
				order by p.nome;";
		$resultado = mysqli_query($connection, $sql);
		echo "<div class'row'>
				<div class='col-md-1'></div>
				<div class='col-md-10'>
				<table>
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
			$id = $linha["idponto"];
			echo "<tr>
					<td>".$identificacao."</td>
					<td>".$endereco."</td>
					<td>".$tipo."</td>
					<td>
						<a href='cadastroponto.php?idponto=".$id."'><span class='glyphicon glyphicon-camera' aria-hidden='true'></span></a>
					</td>
				</tr>";
		}
		echo "</table>
				</div>
				<div class='col-md-1'></div>
				</div>";
	?>
	</div>
</body>
</html>

<!-- 
				<div class='row'>
		 			<div class='col-md-1'></div>
		 		 	<div class='col-md-1'>".$identificacao."</div>
		 		 	<div class='col-md-7'>".$endereco."</div>
		 		 	<div class='col-md-1'>".$tipo."</div>
		 		 	<div class='col-md-1'>
		 		 		<a href='cadastroponto.php?idponto=".$id."'><span class='glyphicon glyphicon-camera' aria-hidden='true'></span></a>
		 		 	</div>
		 		</div> -->