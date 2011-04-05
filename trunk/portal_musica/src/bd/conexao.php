<?php
	session_start();
	$conexao = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('portal_musica', $conexao);
?>