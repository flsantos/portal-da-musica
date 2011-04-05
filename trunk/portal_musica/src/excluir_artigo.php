<?php
	include 'bd/conexao.php';	
	if(!isset($_SESSION['id']))
		header('Location: administrador.php');
	
	$query = 'delete from artigo where id="'.$_GET['id'].'"';
	if(mysql_query($query, $conexao))
		$query = 'delete from artigo_pertence_timeline where artigo_id="'.$_GET['id'].'"';
	if(mysql_query($query, $conexao))
		echo "sucesso"
	
?>