<?php
	session_start();
	$conexao = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('portal_musica', $conexao);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1 //EN" "http://ww.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<head>
		<?php if(count(explode('/', $_SERVER['REQUEST_URI'])) == 4):?>
			<script src='../js/jquery-1.5.1.min.js'></script>
			<script type="text/javascript" src="../app/jwysiwyg/jquery.wysiwyg.js"></script>
			<script type="text/javascript" src="../app/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"></script>
			<link rel="stylesheet" href="../app/jwysiwyg/jquery.wysiwyg.css" type="text/css" />
			<link rel="stylesheet" href="../app/jqueryUI/css/south-street/jquery-ui-1.8.10.custom.css" type="text/css" />
			<link rel='stylesheet' href='../css/geral.css'>
			<link rel='stylesheet' href='../css/login.css'>
			<link rel='stylesheet' href='../css/lista.css'>
			<link rel='stylesheet' href='../css/cadastro.css'>
		<?php else: ?>
			<script src='../../js/jquery-1.5.1.min.js'></script>
			<script type="text/javascript" src="../../app/jwysiwyg/jquery.wysiwyg.js"></script>
			<script type="text/javascript" src="../../app/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"></script>
			<link rel="stylesheet" href="../../app/jwysiwyg/jquery.wysiwyg.css" type="text/css" />
			<link rel='stylesheet' href='../../css/geral.css'>
			<link rel='stylesheet' href='../../css/login.css'>
			<link rel='stylesheet' href='../../css/lista.css'>
			<link rel='stylesheet' href='../../css/cadastro.css'>
			<link rel="stylesheet" href="../../app/jqueryUI/css/south-street/jquery-ui-1.8.10.custom.css" type="text/css" />			
		<?php endif; ?>
		<script type="text/javascript">
			$('document').ready(function(){				
				$('textarea').wysiwyg();
			});
		</script>
	</head>
	<body>
		<div id='all'>