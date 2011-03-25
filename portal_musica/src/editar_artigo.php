<?php
	include '_inc/header.php';
	if(!isset($_SESSION['id']))
		header('Location: administrador.php');
	$query = 'select * from artigo where id="'.$_GET['id'].'"';
	$result = mysql_query($query, $conexao);
	
	$row = mysql_fetch_object($result);
?>
		<div id='lista'>
		<h2>Editar <?php echo $row->titulo?></h2>
		<form action="../editando_artigo.php" method="post" id='cadastro'>
			<table id='cadastro'>
				<tbody>
					<tr>
						<td><label for='ititulo'>Título</label></td>
					</tr>
					<tr>
						<td><input type="text" name='titulo' id='ititulo' value='<?php echo $row->titulo; ?>'/></td>
					</tr>
					<tr>
						<td><label for='iartigo'>Artigo</label></td>
					</tr>
					<tr>
						<td colspan='2'><textarea name='artigo' id='iartigo'><?php echo $row->artigo; ?></textarea></td>
					</tr>
				</tbody>
			</table>
			<input type="hidden" name='id' value='<?php echo $row->id; ?>' />
			<div id='cadastro_enviar'><input type="submit" value="Enviar" /></div>
		</form>
	</div>
<?php include '_inc/footer.php';?>