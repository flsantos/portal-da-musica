<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.1 //EN" "http://ww.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<head>
		<script src='../js/jquery-1.5.1.min.js'></script>
		<script type="text/javascript" src="../app/CLEditor/jquery.cleditor.min.js"></script>
		<script type="text/javascript" src="../app/jqueryUI/js/jquery-ui-1.8.10.custom.min.js"></script>
		<link rel="stylesheet" href="../app/jwysiwyg/jquery.wysiwyg.css" type="text/css" />
		<link rel="stylesheet" href="../app/CLEditor/jquery.cleditor.css" type="text/css" />
		<link rel="stylesheet" href="../app/jqueryUI/css/south-street/jquery-ui-1.8.10.custom.css" type="text/css" />
		<link rel='stylesheet' href='../css/geral.css'>
		<link rel='stylesheet' href='../css/login.css'>
		<link rel='stylesheet' href='../css/lista.css'>
		<link rel='stylesheet' href='../css/cadastro.css'>
		<script type="text/javascript">
			$('document').ready(function(){				
				$('textarea').cleditor({
					width: 644,
					height:421,
					controls:
                        "bold italic underline strikethrough subscript superscript | font size " +
                        "style | color highlight removeformat | bullets numbering | outdent " +
                        "indent | alignleft center alignright justify | undo redo | " +
                        "rule link unlink | cut copy paste pastetext | print source"
				});
			});
		</script>
	</head>
	<body>
		<div id='all'>