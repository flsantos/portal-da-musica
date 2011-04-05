<?php
		include_once 'bd/conxeao.php';
		if ($_POST['acao'] == 'removeAnexo'){
		    $arquivo = $_POST['arquivo'];
		    $caminho = '../imagens/artigos/';
		    if (file_exists($caminho . $arquivo) and !empty($arquivo))
		        unlink($caminho . $arquivo);
		    mysql_query('delete from imagens where nome="'.$_POST['arquivo'].'"');
		    exit;
		}

?>

