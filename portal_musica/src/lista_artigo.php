<?php 
	include '_inc/header.php';
	if(!isset($_SESSION['id']))
		header('Location: administrador.php');
	
	$query = 'select * from artigo';
	$result = mysql_query($query, $conexao);
	
?>
	<div id='lista'>
		<h2>Lista de Artigos</h2>
		<table id='lista_artigos'>
			<thead>
				<tr>
					<th>Artigo</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysql_fetch_object($result)): ?>			
					<tr>
						<td><?php echo $row->titulo; ?></td>
						<td><a href='editar_artigo.php/?id=<?php echo $row->id; ?>'>Editar</a></td>
						<td><a href='excluir_artigo.php/?id=<?php echo $row->id; ?>'>Excluir</a></td>
					</tr>
					<?php $row++; ?>
				<?php endwhile; ?>
			</tbody>
		</table>
		<a href='cadastra_artigo.php'>Novo Artigo</a>
	</div>
<?php include '_inc/footer.php';?>