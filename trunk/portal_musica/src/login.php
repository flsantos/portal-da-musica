<?php
	include_once 'bd/conexao.php';
	if($_POST['login'] == '' || $_POST['senha'] == ''){
		echo 'Os campos devem ser preenchidos!';
		die();
	}
	$query = 'select id from usuario where login = "'.mysql_real_escape_string($_POST['login'], $conexao).'" and senha = "'.md5($_POST['senha']).'"';
	if($row = mysql_fetch_array(mysql_query($query, $conexao))){
		$_SESSION['id'] = $row['id'];
		echo 'sucesso';
	}else{
		echo 'Login ou senha incorretos';
		die();
	}
?>