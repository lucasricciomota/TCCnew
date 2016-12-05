<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysqli_connect("localhost", "root", "", "turismo");

	$cod_estados = mysqli_real_escape_string( $con, $_REQUEST['cod_estados'] );

	$cidades = array();

	$sql = "SELECT id as cod_cidades, nome
			FROM tb_cidades
			WHERE estado=$cod_estados
			ORDER BY nome";
	$res = mysqli_query( $con, $sql );
	while ( $row = mysqli_fetch_array( $res ) ) {
		$cidades[] = array(
			'cod_cidades'	=> $row['cod_cidades'],
			'nome'			=> $row['nome'],
		);
	}

	echo( json_encode( $cidades ) );
?>
