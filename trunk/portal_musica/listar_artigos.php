<?php 
	include_once 'src/bd/conexao.php';
	include 'main_header.php';
?>

<?php
	if(!isset($_SESSION['id'])){
		header('Location: administrador.php');
	}
	
	$query = 'select * from artigo';
	$result = mysql_query($query, $conexao);
	
?>
	<div id='lista' style="width: 550px; text-align: center;">
		<h2>Lista de Artigos</h2>
		<table id='lista_artigos'  style="margin-left:30%;">
			<thead>
				<tr>
					<th>Artigo</th>
					<th>    </th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysql_fetch_object($result)): ?>			
					<tr id='<?php echo $row->id?>'>
						<td><?php echo $row->titulo; ?></td>
						<td>   </td>
						<td><a href="visualizar_artigo.php?id=<?php echo $row->id;?>">Ver artigo</a></td>
					</tr>
					<?php $row++; ?>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
<?php include 'main_footer.php';?>