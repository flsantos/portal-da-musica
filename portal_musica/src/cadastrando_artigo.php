<?php
	include 'bd/conexao.php';
	if(!isset($_POST))
		header('Location: cadastra_artigo.php');
	if(isset($_POST['pertence'])){
		if($_POST['data_termino'])
			$query = 'insert into artigo(usuario_id, titulo, artigo, data_inicio, data_termino) values("'.$_SESSION['id'].'" ,"'.mysql_real_escape_string($_POST['titulo'], $conexao).'", "'.mysql_escape_string($_POST['artigo']).'", "'.mysql_escape_string($_POST['data_inicio']).'", "'.mysql_escape_string($_POST['data_termino']).'")';
		else{
			$query = 'insert into artigo(usuario_id, titulo, artigo, data_inicio) values("'.$_SESSION['id'].'" ,"'.mysql_real_escape_string($_POST['titulo'], $conexao).'", "'.mysql_escape_string($_POST['artigo']).'", "'.mysql_escape_string($_POST['data_inicio']).'")';
		}
		
	}else
		$query = 'insert into artigo(usuario_id, titulo, artigo) values("'.$_SESSION['id'].'" ,"'.mysql_real_escape_string($_POST['titulo'], $conexao).'", "'.mysql_escape_string($_POST['artigo']).'")';
		
	if(mysql_query($query, $conexao)){
		if($_POST['pertence']){
			echo mysql_insert_id($conexao);
			$query = 'insert into artigo_pertence_timeline(artigo_id, timeline_id) values("'.mysql_insert_id($conexao).'", "0")';
			if(!mysql_query($query, $conexao))
				header('Location: cadastra_artigo.php');	
		}
		header('Location: lista_artigo.php');
	}else
	header('Location: cadastra_artigo.php');
?>