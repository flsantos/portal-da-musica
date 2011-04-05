<?php
	include 'bd/conexao.php';
	if(!isset($_POST))
		header('Location: cadastra_artigo.php');
	if(isset($_POST['pertence'])){
		if($_POST['data_termino'])
			$query = 'update artigo set usuario_id = "'.$_SESSION['id'].'", titulo = "'.mysql_real_escape_string($_POST['titulo'], $conexao).'", artigo = "'.mysql_escape_string($_POST['artigo']).'", data_inicio = "'.mysql_escape_string($_POST['data_inicio']).'", data_termino =  "'.mysql_escape_string($_POST['data_termino']).'" where id = "'.$_POST['id'].'"';
		else{
			$query = 'update artigo set usuario_id = "'.$_SESSION['id'].'", titulo = "'.mysql_real_escape_string($_POST['titulo'], $conexao).'", artigo = "'.mysql_escape_string($_POST['artigo']).'", data_inicio = "'.mysql_escape_string($_POST['data_inicio']).'" where id = "'.$_POST['id'].'"';
		}
	}else
		$query = 'update artigo set usuario_id = "'.$_SESSION['id'].'", titulo = "'.mysql_real_escape_string($_POST['titulo'], $conexao).'", artigo = "'.mysql_escape_string($_POST['artigo']).'" where id="'.$_POST['id'].'"'; 	
	if(mysql_query($query, $conexao)){
		if($_POST['pertence']){
			mysql_query('delete from artigo_pertence_timeline where id = "'.$_POST['id'].'"' , $conexao);
			$query = 'insert into artigo_pertence_timeline(artigo_id, timeline_id) values("'.$_POST['id'].'", "0")';
			if(!mysql_query($query, $conexao))
				header('Location: cadastra_artigo.php?id='.$_POST['id']);	
		}
		header('Location: lista_artigo.php');
	}else
		header('Location: cadastra_artigo.php?id='.$_POST['id']);
?>