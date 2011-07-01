<?php 
	include_once 'bd/conexao.php';
	include '_inc/inc_header.php';
?>
<script type="text/javascript">
	$("#acesso").removeClass().addClass("current");
</script>
<script>
	$('document').ready(
		function(){
			$('a').click(
				function(){
					id = $(this).attr('caminho');
					if($(this).attr('id') == 'excluir'){
						$( "#exclusao" ).dialog({
							resizable: false,
							draggable: false,
							height:180,
							modal: true,
							buttons: {
								"Excluir": function() {
									$(this).dialog( "close" );
									$.get('excluir_artigo.php', {id:id},
											function(e){
												if(e == 'sucesso'){
													$('tr#'+id).hide();
												}
											}
									);
								},
								"Cancelar": function() {
									$( this ).dialog( "close" );
								}
							}
						});
					}else{
						$('#all').load($(this).attr('caminho'));
					}
				}
			);
		}
	);
</script>
<?php
	if(!isset($_SESSION['id'])){
		header('Location: administrador.php');
	}
	
	$query = 'select * from artigo';
	$result = mysql_query($query, $conexao);
	
?>
	<div id='exclusao' style='display:none;'title='Portal da Música'>Deseja excluir este artigo?</div>
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
					<tr id='<?php echo $row->id?>'>
						<td><?php echo $row->titulo; ?></td>
						<td><a href='cadastra_artigo.php?id=<?php echo $row->id; ?>'>Editar</a></td>
						<td><a id='excluir' href='javascript:;' caminho='<?php echo $row->id; ?>'>Excluir</a></td>
					</tr>
					<?php $row++; ?>
				<?php endwhile; ?>
			</tbody>
		</table>
		<a href='cadastra_artigo.php'>Novo Artigo</a>
	</div>
<?php include '_inc/inc_footer.php';?>