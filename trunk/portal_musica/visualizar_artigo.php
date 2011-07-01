<?php
	include_once 'src/bd/conexao.php';
	include_once 'main_header.php';
	

	
	
	$query = 'select * from artigo where id = '.mysql_escape_string($_GET['id']);
	$resultado = mysql_query($query);
	$row = mysql_fetch_array($resultado);
	echo '<h2>'.$row['titulo'].'</h2>';
	echo '<div id="artigo">';
	echo stripcslashes($row['artigo']);
	echo '</div>';
	
	include_once 'main_footer.php';
?>