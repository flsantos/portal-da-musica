<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1 //EN" "http://ww.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
	include_once 'bd/conexao.php';
	
	$query = 'select * from artigo where id = '.mysql_escape_string($_GET['id']);
	$resultado = mysql_query($query);
	$row = mysql_fetch_array($resultado);
	echo '<h2>'.$row['titulo'].'</h2>';
	echo $row['artigo'];
?>
</html>