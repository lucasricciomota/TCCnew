<html>
  <head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="/TCCnew/public/js/jquery.min.js"></script>
    <script src="/TCCnew/public/js/bootstrap.min.js"></script>
    <script src="/TCCnew/public/js/scripts.js"></script>
    <script src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>
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
	                <h1 class="textotitulo1" style="font-size:40px;">Gerencie os Usuários</h1>
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
    ?>
	<?php
		require_once("../../config/conexao.php");
		$sql = "select * from usuario order by nome;";
		$resultado = mysqli_query($connection, $sql);
		?>
			<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Bloquear/Desbloquear</th>
                <th>Admin/Usuário</th>
            </tr>
        </thead>
        <tfoot>
        </tfoot>
        <tbody>
        <?php
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
		 		 	</td>
		 		 	<td>
		 		 		<a href='processaadmin.php?idusuario=".$idusuario."&tipousuario=".$idtipousuario."'>".$tipousuario."</a>
		 		 	</td>
	 			";
	 		}
	 		?>
</tbody>
</table>
<?php
		echo "
 			  	<div class='col-md-1'></div>
 			  </div>";
 			
	?>
	</div>
</body>
<script>
$(document).ready(function() {
    $('#example').DataTable({
    	"language": {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
}
        
    });
} );
</script>
</html>
