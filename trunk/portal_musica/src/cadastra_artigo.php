<?php 
	include '_inc/header.php'; 
	if(!isset($_SESSION['id']))
		header('Location: administrador.php');
?>
	<script type='text/javascript'>
		$('document').ready(function(){
			
			$('div#upload_anchor').click(function(){
				$('div#dialog').dialog({
					draggable: false,
					width: 369,
					resizable: false,
					modal: true
								
				});	
			});
		});
	</script>
	<div id='lista'>
		<h2>Novo Artigo</h2>
		<form action="cadastrando_artigo.php" method="post" id='cadastro'>
			<table id='cadastro'>
				<tbody>
					<tr>
						<td><label for='ititulo'>Título</label></td>
					</tr>
					<tr>
						<td><input type="text" name='titulo' id='ititulo'/></td>
					</tr>
					<tr>
						<td><label for='iartigo'>Artigo</label></td>
					</tr>
					<tr>
						<td colspan='2'><textarea name='artigo' id='iartigo'></textarea></td>
					</tr>
				</tbody>
			</table>
			<div id='cadastro_enviar'><input type="submit" value="Enviar" /></div>
			
			<input type="checkbox" name='pertence' id='ipertence' /><label for='ipertence'>Pertence à Timeline</label>
			<div id='form_timeline'>
				<label for='idata_inicio'>Data de Início</label>
				<input type='text' id='idata_inicio' name='data_inicio' />
				<label for='idata_termino'>Data de Término</label>
				<input type='text' id='idata_termino' name='data_termino' />
			</div>
		</form>
	</div>
	
<?php include '_inc/footer.php';?>