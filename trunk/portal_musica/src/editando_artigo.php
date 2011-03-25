<?php
 include '_inc/header.php';
 if(!isset($_SESSION['id']))
 	header("Location: administrador.php");
 if(!isset($_POST))
 	header("Location: lista_artigo.php");
 $query = 'update artigo set titulo="'.$_POST['titulo'].'", artigo="'.$_POST['artigo'].'" where id ="'.$_POST['id'].'"';

 $resultado = mysql_query($query, $conexao);
 if($resultado)
 	header('Location: lista_artigo.php');
 else 
	header('Location: editar_artigo.php/?id='.$_POST['id']);
 include '_inc/footer.php';
?>