<?php
	include '_inc/header.php';
	if(!isset($_POST))
		header('Location: administrador.php');
	$query = 'select id from usuario where login = "'.mysql_real_escape_string($_POST['login'], $conexao).'" and senha = "'.md5($_POST['senha']).'"';
	if($row = mysql_fetch_array(mysql_query($query, $conexao))){
		$_SESSION['id'] = $row['id'];
		header('Location: lista_artigo.php');
	}else{
		header('Location: administrador.php');
	}
	include '_inc/footer.php';
?>