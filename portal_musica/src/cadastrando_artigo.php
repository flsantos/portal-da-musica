<?php
	include 'bd/conexao.php';
	if(!isset($_POST))
		header('Location: cadastra_artigo.php');
	if(isset($_POST['pertence'])){
		$_POST['data_inicio'] .= '-01-01';
		if($_POST['data_termino']){
			$_POST['data_termino'] .= '-01-01'; 
			if($_POST['data_termino'] > $_POST['data_inicio'])
				$query = 'insert into artigo(usuario_id, titulo, artigo, data_inicio, data_termino) values("'.$_SESSION['id'].'" ,"'.mysql_real_escape_string($_POST['titulo'], $conexao).'", "'.mysql_escape_string($_POST['artigo']).'", "'.mysql_escape_string($_POST['data_inicio']).'", "'.mysql_escape_string($_POST['data_termino']).'")';
			else
				header('Location: cadastra_artigo.php');
		}else{
			$query = 'insert into artigo(usuario_id, titulo, artigo, data_inicio) values("'.$_SESSION['id'].'" ,"'.mysql_real_escape_string($_POST['titulo'], $conexao).'", "'.mysql_escape_string($_POST['artigo']).'", "'.mysql_escape_string($_POST['data_inicio']).'")';
		}
		
	}else
		$query = 'insert into artigo(usuario_id, titulo, artigo) values("'.$_SESSION['id'].'" ,"'.mysql_real_escape_string($_POST['titulo'], $conexao).'", "'.mysql_escape_string($_POST['artigo']).'")';
		
	if(mysql_query($query, $conexao)){
		if($_POST['pertence']){
			$query = 'insert into artigo_pertence_timeline(artigo_id, timeline_id) values("'.mysql_insert_id($conexao).'", "0")';
			mysql_query($query, $conexao);
		}
		header('Location: lista_artigo.php');
	}else
		header('Location: cadastra_artigo.php');
?>