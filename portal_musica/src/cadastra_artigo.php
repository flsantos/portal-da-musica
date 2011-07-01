<?php 
	include_once 'bd/conexao.php';
	include '_inc/inc_header.php'; 
	if(!isset($_SESSION['id']))
		header('Location: administrador.php');
?>
						
	<script type="text/javascript">
		$("#acesso").removeClass().addClass("current");
	</script>
	
	<script>
		 window.onload = function() {
			var editor = CKEDITOR.replace('iartigo', {
				language: 'pt',
				filebrowserBrowseUrl : '/portal_musica/ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : '/portal_musica/ckfinder/ckfinder.html?type=Images',
				filebrowserUploadUrl : '/portal_musica/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : '/portal_musica/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
				
			});
		 };
		
	</script>
	
	<script type='text/javascript'>


	
		$('document').ready(function(){
			$('input#ipertence').click(function(){
				if($(this).is(':checked')){
					$('div#form_timeline').fadeIn();
				}else{
					$('div#form_timeline').fadeOut();
				}
			});

			$('div#upload_img').click(
				function(){
					$('div#dialog_upload').dialog({
						draggable: false,
						modal: true,
						width: 800,
						height: 500
					});
				}
			);
		});
	</script>
	<?php 
		$row = false;
		if(isset($_GET['id'])){
			$query = mysql_query('select * from artigo where id="'.$_GET['id'].'"');
			$row = mysql_fetch_array($query);
			
			if ($row) {
				echo "<script>$('div#form_timeline').fadeIn();</script>";
			}
		}
	?>
	<div id='lista'>
		<h2><?php echo $row ? $row['titulo'] : "Novo Artigo"; ?></h2>
		<form action="<?php echo $row ? 'editando_artigo.php' : 'cadastrando_artigo.php' ?>" method="post" id='cadastro'>
			<?php echo $row ? '<input type="hidden" name="id" value="'.$row['id'].'"/>' : ''; ?>
			<table id='cadastro'>
				<tbody>
					<tr>
						<td><label for='ititulo'>Título</label></td>
					</tr>
					<tr>
						<td><input type="text" name='titulo' id='ititulo' value= '<?php echo $row ? $row['titulo'] : '';?>' /></td>
					</tr>
					<tr>
						<td>
							<input type="checkbox" selected="true"  name='pertence' id='ipertence' <?php echo $row ? 'checked' : '';?> /><label for='ipertence'>Pertence à Timeline</label>
						</td>
					</tr>
					<tr>
						<td>	
							<div id='form_timeline' style='display:none;'>
								<label for='idata_inicio'>Data de Início</label>
								<input type='text' id='idata_inicio' name='data_inicio' value='<?php echo $row ? substr($row['data_inicio'],0,4) : '';?>' />
								<label for='idata_termino'>Data de Término</label>
								<input type='text' id='idata_termino' name='data_termino' value='<?php echo $row ? substr($row['data_termino'],0,4) : '';?>' />
							</div>
						</td>
					</tr>
					<tr>
						<td><label for='iartigo'>Artigo</label></td>
					</tr>
					<tr>
						<td colspan='2'>
							<textarea name='artigo' id='iartigo' >
								<?php echo $row ? stripcslashes($row['artigo']) : '';?>						
							</textarea>
						</td>
					</tr>
				</tbody>
			</table>
			<div id='cadastro_enviar'><input type="submit" value="Enviar" /></div>
		</form>
	</div>
	
	<div id='upload'>
		<!-- <div id='imagens'></div> -->
		<!-- <div id='upload_img'><a>Inserir Imagem</a></div> -->
		
	</div>
	
	<div id='dialog_upload' style='display: none;'>
		<script>
//			$('document').ready( function(){
//				$('div#remover').click(
//					function(){
//						var arquivo = $(this).parent('li').attr('lang');
//						$.post("arquivo.php", {acao: 'removeAnexo', arquivo: arquivo}, function() {
//					        	$(this).parent('li').remove();
//						});
//					});	   
//			});
		</script>
		<iframe name="imagens" id='frame_imagens'src='imagens.php' frameborder="0"></iframe>
<!--		<ul id="anexos"></ul>-->
<!--		<iframe src="upload.php" frameborder="0" scrolling="no"></iframe>-->
<!--		<form id="upload" action="cadastra_artigo<?php //echo $row ? '?'.$row['id'] : '';?>.php" method="post">-->
<!--    		<input type="submit" name="enviar" value="Enviar" />-->
<!--		</form>-->
	</div>
	
<?php include '_inc/inc_footer.php';?>