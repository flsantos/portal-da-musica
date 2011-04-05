<?php
include_once 'bd/conexao.php';
$erro = null;
if (isset($_FILES['arquivo'])){
    $extensoes = array(".gif", ".png" ,".jpg");
    $caminho = "../imagens/artigos/";
    $nome = $_FILES['arquivo']['name'];
    $temp = $_FILES['arquivo']['tmp_name'];
    if (!in_array(strtolower(strrchr($nome, ".")), $extensoes)) {
		$erro = 'Extensão inválida';
	}
    if (!isset($erro)) {
        $nomeAleatorio = md5(uniqid(time())) . strrchr($nome, ".");
        if (!move_uploaded_file($temp, $caminho . $nomeAleatorio))
            $erro = 'Não foi possível anexar o arquivo';
        else
        	mysql_query('insert into imagem(nome) values("'.$nomeAleatorio.'")',$conexao);
    }
}
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
    <script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
    <script>
	    $('document').ready( function(){ 
	        var pai = window.parent.document;
	        <?php if (isset($erro)):?>
	            alert('<?php echo $erro ?>');
	        <?php elseif (isset($nome)):  ?>
	            $('ul#anexos', pai).append('<li lang="<?php echo $nomeAleatorio ?>"><?php echo $nome ?><div id="remover">Remover</div></li>');
	        <?php endif ?>
	    	$("#arquivo").change(function() {	    
	            if (this.value != ""){   
	            	$("#upload").submit();
	            }
	        });
	    });   	
    </script>
</head>
 
<body>
 
<form id="upload" action="upload.php" method="post" enctype="multipart/form-data">
    <label>Arquivo: </label> <span id="status" style="display: none;"><img src="image/loader.gif" alt="Enviando..." /></span> <br />
    <input type="file" name="arquivo" id="arquivo" />
</form>
 
</body>
</html>