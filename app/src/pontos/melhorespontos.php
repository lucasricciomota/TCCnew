<html>
  <head>
    <meta charset="utf-8">
    <title>São Francisco do Sul</title>
    <link href="/TCCnew/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/TCCnew/public/css/style.css" rel="stylesheet">
    <script src="/TCCnew/public/js/jquery.min.js"></script>
    <script src="/TCCnew/public/js/bootstrap.min.js"></script>
    <script src="/TCCnew/public/js/scripts.js"></script>
  </head>
<body>
  <div class="container-fluid">
    <?php
        include("../header.php");

		require_once("../../config/conexao.php");
		$sql = "SELECT * FROM 'ponto' ORDER by avaliacao DESC limit 10";
		$resultado = mysqli_query($connection, $sql);

        
	?>	
			
	</div>
</body>
</html>
