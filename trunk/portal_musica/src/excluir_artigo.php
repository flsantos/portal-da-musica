<?php
	include '_inc/header.php';	
	if(!isset($_SESSION['id']))
		header('Location: administrador.php');
	
	if(mysql_query($query, $conexao)){
		$query = 'delete from artigo where id="'.$_GET['id'].'"';
		if(mysql_query($query, $conexao))
			$query = 'delete from artigo_pertence_timeline where artigo_id="'.$_GET['id'].'"';
			if(mysql_query($query, $conexao))
				header('Location: lista_artigo.php');
	}
	
	include '_inc/footer.php';	
?>